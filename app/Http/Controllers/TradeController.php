<?php

namespace App\Http\Controllers;

use App\Models\Trade;
use App\Models\TradePair;
use App\Services\StockService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class TradeController extends Controller
{
    protected $stockService;

    public function __construct(StockService $stockService)
    {
        $this->stockService = $stockService;
    }

    /**
     * Display the trade pairs page with tabs for different markets
     */
    public function index()
    {
        $stocks = TradePair::active()->byMarket('stock')->get();
        $cryptos = TradePair::active()->byMarket('crypto')->get();
        $forexes = TradePair::active()->byMarket('forex')->get();

        return view('dashboard.trade.index', compact('stocks', 'cryptos', 'forexes'));
    }

    /**
     * Display the trading page for a specific pair
     */
    public function show(TradePair $tradePair)
    {
        $user = auth()->user();
        
        return view('dashboard.trade.show', compact('tradePair', 'user'));
    }

    /**
     * Execute a trade
     */
    public function store(Request $request, TradePair $tradePair)
    {
        $request->validate([
            'type' => 'required|in:buy,sell',
            'amount' => 'required|numeric|min:' . $tradePair->min_amount . '|max:' . $tradePair->max_amount,
            'entry_price' => 'nullable|numeric|min:0',
            'stop_loss' => 'nullable|numeric|min:0',
            'take_profit' => 'nullable|numeric|min:0',
            'order_type' => 'required|in:market,limit,stop',
            'limit_price' => 'nullable|required_if:order_type,limit|numeric|min:0',
            'interval' => 'nullable',
        ]);

        $user = auth()->user();

        // Check if user has sufficient balance
        if ($request->type === 'buy' && $user->balance < $request->amount) {
            return back()->withErrors(['amount' => 'Insufficient balance. Available: $' . number_format($user->balance, 2)]);
        }

        try {
            DB::transaction(function () use ($request, $tradePair, $user) {
                $currentPrice = $this->getCurrentPrice($tradePair);
                
                // Process interval based on market type
                $interval = null;
                $scheduledAt = null;
                
                if ($request->interval) {
                    if ($tradePair->market === 'stock') {
                        // For stocks, interval is a datetime string
                        $scheduledAt = $request->interval;
                        $interval = 'custom'; // Use 'custom' to indicate custom date
                    } else {
                        // For crypto/forex, validate interval is in available options
                        if (!in_array($request->interval, array_keys(Trade::getAvailableIntervals()))) {
                            throw new \Exception('Invalid interval selected.');
                        }
                        $interval = $request->interval;
                    }
                }
                
                // Use provided entry price or current price
                $entryPrice = $request->entry_price ?: $currentPrice;
                
                $trade = Trade::create([
                    'user_id' => $user->id,
                    'market' => $tradePair->market,
                    'symbol' => $tradePair->symbol,
                    'type' => $request->type,
                    'amount' => $request->amount,
                    'price' => $currentPrice,
                    'entry_price' => $entryPrice,
                    'stop_loss' => $request->stop_loss,
                    'take_profit' => $request->take_profit,
                    'status' => 1, // Pending
                    'order_type' => $request->order_type,
                    'limit_price' => $request->limit_price,
                    'interval' => $interval,
                    'scheduled_at' => $scheduledAt,
                ]);

                // Calculate scheduled time if interval is provided
                if ($interval && $interval !== 'custom') {
                    $trade->calculateScheduledTime();
                    $trade->save();
                }

                // If it's a market order, execute immediately
                if ($request->order_type === 'market') {
                    $this->executeTrade($trade, $currentPrice);
                }

                // Deduct balance for buy orders
                if ($request->type === 'buy' && $request->order_type === 'market') {
                    $user->balance -= $request->amount;
                    $user->save();
                }
            });

            return redirect()->back()->with('success', 'Trade placed successfully!');
        } catch (\Exception $e) {
            Log::error('Trade execution failed: ' . $e->getMessage());
            return back()->withErrors(['error' => 'Failed to place trade. Please try again.']);
        }
    }

    /**
     * Display user's trade history
     */
    public function history()
    {
        $user = auth()->user();
        
        // Get open trades (status = 2 for active trades)
        $openTrades = $user->trades()
            ->with('tradePair')
            ->where('status', 2) // Active trades
            ->latest()
            ->get();
        
        // Get closed trades (status = 3 for closed trades)
        $closedTrades = $user->trades()
            ->with('tradePair')
            ->where('status', 3) // Closed trades
            ->latest()
            ->get();
        
        return view('dashboard.trade.history', compact('openTrades', 'closedTrades'));
    }

    /**
     * Cancel a pending trade
     */
    public function cancel(Trade $trade)
    {
        if ($trade->user_id !== auth()->id()) {
            abort(403);
        }

        if (!$trade->canBeCancelled()) {
            return back()->withErrors(['error' => 'This trade cannot be cancelled.']);
        }

        try {
            DB::transaction(function () use ($trade) {
                $trade->update(['status' => 4]); // Cancelled

                // Refund balance for buy orders
                if ($trade->type === 'buy') {
                    $user = $trade->user;
                    $user->balance += $trade->amount;
                    $user->save();
                }
            });

            return back()->with('success', 'Trade cancelled successfully!');
        } catch (\Exception $e) {
            Log::error('Trade cancellation failed: ' . $e->getMessage());
            return back()->withErrors(['error' => 'Failed to cancel trade. Please try again.']);
        }
    }

    /**
     * Close an active trade
     */
    public function close(Trade $trade)
    {
        if ($trade->user_id !== auth()->id()) {
            abort(403);
        }

        if (!$trade->canBeClosed()) {
            return back()->withErrors(['error' => 'This trade cannot be closed.']);
        }

        try {
            DB::transaction(function () use ($trade) {
                $currentPrice = $this->getCurrentPriceBySymbol($trade->market, $trade->symbol);
                
                if (!$currentPrice) {
                    throw new \Exception('Unable to get current price');
                }

                $exitValue = $trade->quantity * $currentPrice;
                $pnl = $trade->type === 'buy' 
                    ? $exitValue - $trade->amount 
                    : $trade->amount - $exitValue;

                $trade->update([
                    'exit_price' => $currentPrice,
                    'pnl' => $pnl,
                    'status' => 3, // Closed
                    'closed_at' => now()
                ]);

                // Update user balance
                $user = $trade->user;
                if ($trade->type === 'buy') {
                    $user->balance += $exitValue;
                } else {
                    $user->balance += $trade->amount + $pnl;
                }
                $user->save();
            });

            return back()->with('success', 'Trade closed successfully!');
        } catch (\Exception $e) {
            Log::error('Trade close failed: ' . $e->getMessage());
            return back()->withErrors(['error' => 'Failed to close trade. Please try again.']);
        }
    }

    /**
     * Get current price for a trade pair
     */
    private function getCurrentPrice(TradePair $tradePair): float
    {
        // For now, return the stored price
        // In production, you would fetch real-time prices
        return $tradePair->current_price;
    }

    /**
     * Get current price by symbol
     */
    private function getCurrentPriceBySymbol(string $market, string $symbol): ?float
    {
        $tradePair = TradePair::where('symbol', $symbol)->first();
        return $tradePair ? $tradePair->current_price : null;
    }

    /**
     * Execute a trade
     */
    private function executeTrade(Trade $trade, float $currentPrice): void
    {
        $trade->update([
            'price' => $currentPrice,
            'entry_price' => $trade->entry_price ?: $currentPrice, // Use existing entry_price or current price
            'quantity' => $trade->amount / $currentPrice,
            'status' => 2, // Active
            'filled_at' => now()
        ]);
    }
} 