<?php

namespace App\Http\Controllers;

use App\Models\Trade;
use App\Models\Stock;
use App\Services\StockService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class TradeController extends Controller
{
    protected $stockService;

    public function __construct(StockService $stockService)
    {
        $this->stockService = $stockService;
    }

    public function index()
    {
        $user = Auth::user();
        $trades = Trade::where('user_id', $user->id)
            ->orderBy('created_at', 'desc')
            ->paginate(20);

        return view('dashboard.trade.index', compact('trades'));
    }

    public function create()
    {
        $markets = [
            'stock' => 'Stocks',
            'crypto' => 'Cryptocurrency',
            'forex' => 'Forex'
        ];

        $symbols = [
            'stock' => Stock::pluck('symbol', 'symbol')->toArray(),
            'crypto' => [
                'BTC' => 'Bitcoin',
                'ETH' => 'Ethereum',
                'BNB' => 'Binance Coin',
                'ADA' => 'Cardano',
                'SOL' => 'Solana',
                'DOT' => 'Polkadot',
                'DOGE' => 'Dogecoin',
                'AVAX' => 'Avalanche',
                'MATIC' => 'Polygon',
                'LINK' => 'Chainlink'
            ],
            'forex' => [
                'EURUSD' => 'EUR/USD',
                'GBPUSD' => 'GBP/USD',
                'USDJPY' => 'USD/JPY',
                'USDCHF' => 'USD/CHF',
                'AUDUSD' => 'AUD/USD',
                'USDCAD' => 'USD/CAD',
                'NZDUSD' => 'NZD/USD',
                'EURGBP' => 'EUR/GBP',
                'EURJPY' => 'EUR/JPY',
                'GBPJPY' => 'GBP/JPY'
            ]
        ];

        return view('dashboard.trade.create', compact('markets', 'symbols'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'market' => 'required|in:stock,crypto,forex',
            'symbol' => 'required|string|max:10',
            'type' => 'required|in:buy,sell',
            'amount' => 'required|numeric|min:1',
            'order_type' => 'required|in:market,limit,stop',
            'limit_price' => 'nullable|numeric|min:0',
            'stop_loss' => 'nullable|numeric|min:0',
            'take_profit' => 'nullable|numeric|min:0'
        ]);

        $user = Auth::user();

        // Check if user has sufficient balance for buy orders
        if ($request->type === 'buy' && $user->balance < $request->amount) {
            return back()->withErrors(['amount' => 'Insufficient balance. Your balance is $' . number_format($user->balance, 2)]);
        }

        try {
            DB::transaction(function () use ($request, $user) {
                $trade = Trade::create([
                    'user_id' => $user->id,
                    'market' => $request->market,
                    'symbol' => $request->symbol,
                    'type' => $request->type,
                    'amount' => $request->amount,
                    'order_type' => $request->order_type,
                    'limit_price' => $request->limit_price,
                    'stop_loss' => $request->stop_loss,
                    'take_profit' => $request->take_profit,
                    'status' => 1 // Pending
                ]);

                // If it's a market order, execute immediately
                if ($request->order_type === 'market') {
                    $this->executeMarketOrder($trade);
                } else {
                    // For limit/stop orders, keep status as pending
                    $trade->update(['status' => 1]); // Pending
                }

                // Deduct balance for buy orders
                if ($request->type === 'buy') {
                    $user->balance -= $request->amount;
                    $user->save();
                }
            });

            return redirect()->route('user.trade.index')->with('success', 'Trade placed successfully!');
        } catch (\Exception $e) {
            Log::error('Trade execution failed: ' . $e->getMessage());
            return back()->withErrors(['error' => 'Failed to place trade. Please try again.']);
        }
    }

    private function executeMarketOrder(Trade $trade)
    {
        try {
            // Get current price for the symbol
            $currentPrice = $this->getCurrentPrice($trade->market, $trade->symbol);
            
            if (!$currentPrice) {
                throw new \Exception('Unable to get current price for ' . $trade->symbol);
            }

            $trade->update([
                'price' => $currentPrice,
                'entry_price' => $currentPrice,
                'quantity' => $trade->amount / $currentPrice,
                'status' => 2, // Active - Trade is now live
                'filled_at' => now()
            ]);

        } catch (\Exception $e) {
            Log::error('Market order execution failed: ' . $e->getMessage());
            throw $e;
        }
    }

    private function getCurrentPrice(string $market, string $symbol): ?float
    {
        // This would integrate with your existing price fetching logic
        // For now, return a mock price - you should integrate with your StockService
        
        if ($market === 'stock') {
            $stock = Stock::where('symbol', $symbol)->first();
            return $stock ? $stock->price : null;
        }

        // Mock prices for crypto and forex
        $mockPrices = [
            'crypto' => [
                'BTC' => 45000.00,
                'ETH' => 3000.00,
                'BNB' => 350.00,
                'ADA' => 0.50,
                'SOL' => 100.00,
                'DOT' => 7.50,
                'DOGE' => 0.08,
                'AVAX' => 25.00,
                'MATIC' => 0.80,
                'LINK' => 15.00
            ],
            'forex' => [
                'EURUSD' => 1.0850,
                'GBPUSD' => 1.2650,
                'USDJPY' => 150.50,
                'USDCHF' => 0.8750,
                'AUDUSD' => 0.6650,
                'USDCAD' => 1.3550,
                'NZDUSD' => 0.6150,
                'EURGBP' => 0.8575,
                'EURJPY' => 163.25,
                'GBPJPY' => 190.50
            ]
        ];

        return $mockPrices[$market][$symbol] ?? null;
    }

    public function show(Trade $trade)
    {
        // Ensure user can only view their own trades
        if ($trade->user_id !== Auth::id()) {
            abort(403);
        }

        return view('dashboard.trade.show', compact('trade'));
    }

    public function close(Trade $trade)
    {
        if ($trade->user_id !== Auth::id()) {
            abort(403);
        }

        if (!$trade->canBeClosed()) {
            return back()->withErrors(['error' => 'Only active trades can be closed.']);
        }

        return $this->closeTrade($trade);
    }

    /**
     * Close a trade and calculate P&L
     */
    private function closeTrade(Trade $trade)
    {
        try {
            DB::transaction(function () use ($trade) {
                $currentPrice = $this->getCurrentPrice($trade->market, $trade->symbol);
                
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

    public function cancel(Trade $trade)
    {
        if ($trade->user_id !== Auth::id()) {
            abort(403);
        }

        if (!$trade->canBeCancelled()) {
            return back()->withErrors(['error' => 'Only pending trades can be cancelled.']);
        }

        try {
            DB::transaction(function () use ($trade) {
                $trade->update([
                    'status' => 4 // Cancelled
                ]);

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

    public function getSymbols(Request $request)
    {
        $market = $request->get('market');
        
        $symbols = match($market) {
            'stock' => Stock::pluck('symbol', 'symbol')->toArray(),
            'crypto' => [
                'BTC' => 'Bitcoin',
                'ETH' => 'Ethereum',
                'BNB' => 'Binance Coin',
                'ADA' => 'Cardano',
                'SOL' => 'Solana',
                'DOT' => 'Polkadot',
                'DOGE' => 'Dogecoin',
                'AVAX' => 'Avalanche',
                'MATIC' => 'Polygon',
                'LINK' => 'Chainlink'
            ],
            'forex' => [
                'EURUSD' => 'EUR/USD',
                'GBPUSD' => 'GBP/USD',
                'USDJPY' => 'USD/JPY',
                'USDCHF' => 'USD/CHF',
                'AUDUSD' => 'AUD/USD',
                'USDCAD' => 'USD/CAD',
                'NZDUSD' => 'NZD/USD',
                'EURGBP' => 'EUR/GBP',
                'EURJPY' => 'EUR/JPY',
                'GBPJPY' => 'GBP/JPY'
            ],
            default => []
        };

        return response()->json($symbols);
    }

    public function getPrice(Request $request)
    {
        $market = $request->get('market');
        $symbol = $request->get('symbol');
        
        $price = $this->getCurrentPrice($market, $symbol);
        
        return response()->json(['price' => $price]);
    }
} 