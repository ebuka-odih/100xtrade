<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Trade;
use App\Models\User;
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
     * Display all trades with filtering options
     */
    public function index(Request $request)
    {
        $query = Trade::with('user');

        // Filter by status
        if ($request->has('status') && $request->status !== '') {
            $query->where('status', $request->status);
        }

        // Filter by market
        if ($request->has('market') && $request->market !== '') {
            $query->where('market', $request->market);
        }

        // Filter by user
        if ($request->has('user_id') && $request->user_id !== '') {
            $query->where('user_id', $request->user_id);
        }

        // Filter by date range
        if ($request->has('date_from') && $request->date_from) {
            $query->whereDate('created_at', '>=', $request->date_from);
        }

        if ($request->has('date_to') && $request->date_to) {
            $query->whereDate('created_at', '<=', $request->date_to);
        }

        // Search by symbol
        if ($request->has('symbol') && $request->symbol !== '') {
            $query->where('symbol', 'like', '%' . $request->symbol . '%');
        }

        $trades = $query->orderBy('created_at', 'desc')->paginate(20);

        // Get filter options
        $users = User::select('id', 'name', 'email')->get();
        $markets = ['stock', 'crypto', 'forex'];
        $statuses = [
            1 => 'Pending',
            2 => 'Active', 
            3 => 'Closed',
            4 => 'Cancelled'
        ];

        return view('admin.trade.index', compact('trades', 'users', 'markets', 'statuses'));
    }

    /**
     * Show specific trade details
     */
    public function show(Trade $trade)
    {
        $trade->load('user');
        return view('admin.trade.show', compact('trade'));
    }

    /**
     * Close a trade manually
     */
    public function close(Trade $trade)
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
            Log::error('Admin trade close failed: ' . $e->getMessage());
            return back()->withErrors(['error' => 'Failed to close trade. Please try again.']);
        }
    }

    /**
     * Cancel a pending trade
     */
    public function cancel(Trade $trade)
    {
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
            Log::error('Admin trade cancellation failed: ' . $e->getMessage());
            return back()->withErrors(['error' => 'Failed to cancel trade. Please try again.']);
        }
    }

    /**
     * Execute a pending trade manually
     */
    public function execute(Trade $trade)
    {
        if ($trade->status !== 1) {
            return back()->withErrors(['error' => 'Only pending trades can be executed.']);
        }

        try {
            DB::transaction(function () use ($trade) {
                $currentPrice = $this->getCurrentPrice($trade->market, $trade->symbol);
                
                if (!$currentPrice) {
                    throw new \Exception('Unable to get current price');
                }

                $trade->update([
                    'price' => $currentPrice,
                    'entry_price' => $currentPrice,
                    'quantity' => $trade->amount / $currentPrice,
                    'status' => 2, // Active
                    'filled_at' => now()
                ]);

                // Deduct balance for buy orders
                if ($trade->type === 'buy') {
                    $user = $trade->user;
                    $user->balance -= $trade->amount;
                    $user->save();
                }
            });

            return back()->with('success', 'Trade executed successfully!');
        } catch (\Exception $e) {
            Log::error('Admin trade execution failed: ' . $e->getMessage());
            return back()->withErrors(['error' => 'Failed to execute trade. Please try again.']);
        }
    }

    /**
     * Delete a trade (only for closed/cancelled trades)
     */
    public function destroy(Trade $trade)
    {
        if (!in_array($trade->status, [3, 4])) { // Only closed or cancelled trades
            return back()->withErrors(['error' => 'Only closed or cancelled trades can be deleted.']);
        }

        try {
            $trade->delete();
            return back()->with('success', 'Trade deleted successfully!');
        } catch (\Exception $e) {
            Log::error('Admin trade deletion failed: ' . $e->getMessage());
            return back()->withErrors(['error' => 'Failed to delete trade. Please try again.']);
        }
    }

    /**
     * Get trade statistics
     */
    public function statistics()
    {
        $stats = [
            'total_trades' => Trade::count(),
            'active_trades' => Trade::where('status', 2)->count(),
            'pending_trades' => Trade::where('status', 1)->count(),
            'closed_trades' => Trade::where('status', 3)->count(),
            'cancelled_trades' => Trade::where('status', 4)->count(),
            'total_volume' => Trade::sum('amount'),
            'total_pnl' => Trade::where('status', 3)->sum('pnl'),
            'profitable_trades' => Trade::where('status', 3)->where('pnl', '>', 0)->count(),
            'losing_trades' => Trade::where('status', 3)->where('pnl', '<', 0)->count(),
        ];

        // Market breakdown
        $marketStats = Trade::selectRaw('market, COUNT(*) as count, SUM(amount) as volume')
            ->groupBy('market')
            ->get();

        // Recent trades
        $recentTrades = Trade::with('user')
            ->orderBy('created_at', 'desc')
            ->limit(10)
            ->get();

        return view('admin.trade.statistics', compact('stats', 'marketStats', 'recentTrades'));
    }

    /**
     * Export trades to CSV
     */
    public function export(Request $request)
    {
        $query = Trade::with('user');

        // Apply filters
        if ($request->has('status') && $request->status !== '') {
            $query->where('status', $request->status);
        }

        if ($request->has('market') && $request->market !== '') {
            $query->where('market', $request->market);
        }

        $trades = $query->get();

        $filename = 'trades_' . date('Y-m-d_H-i-s') . '.csv';
        
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ];

        $callback = function() use ($trades) {
            $file = fopen('php://output', 'w');
            
            // CSV headers
            fputcsv($file, [
                'ID', 'User', 'Market', 'Symbol', 'Type', 'Amount', 
                'Status', 'Entry Price', 'Exit Price', 'P&L', 
                'Created At', 'Filled At', 'Closed At'
            ]);

            foreach ($trades as $trade) {
                fputcsv($file, [
                    $trade->id,
                    $trade->user->name,
                    $trade->market,
                    $trade->symbol,
                    $trade->type,
                    $trade->amount,
                    $trade->getStatusTextAttribute(),
                    $trade->entry_price,
                    $trade->exit_price,
                    $trade->pnl,
                    $trade->created_at,
                    $trade->filled_at,
                    $trade->closed_at
                ]);
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }

    /**
     * Add profit or loss to a trade (without closing)
     */
    public function addProfitLoss(Request $request, Trade $trade)
    {
        $request->validate([
            'pnl_amount' => 'required|numeric',
            'pnl_type' => 'required|in:profit,loss'
        ]);

        try {
            DB::transaction(function () use ($request, $trade) {
                $pnlAmount = $request->pnl_amount;
                
                // If it's a loss, make it negative
                if ($request->pnl_type === 'loss') {
                    $pnlAmount = -$pnlAmount;
                }

                // Calculate exit price based on P&L
                $exitPrice = $trade->entry_price + ($pnlAmount / $trade->quantity);

                // Update the trade P&L and exit price (but don't close the trade)
                $trade->update([
                    'pnl' => $pnlAmount,
                    'exit_price' => $exitPrice
                ]);

                // Note: User balance is not updated here - it will be updated when the trade is closed
            });

            return back()->with('success', 'Profit/Loss added successfully! Trade remains active.');
        } catch (\Exception $e) {
            Log::error('Admin add profit/loss failed: ' . $e->getMessage());
            return back()->withErrors(['error' => 'Failed to add profit/loss. Please try again.']);
        }
    }

    /**
     * Close a trade with existing P&L
     */
    public function closeWithPnL(Trade $trade)
    {
        if ($trade->status !== 2) {
            return back()->withErrors(['error' => 'Only active trades can be closed.']);
        }

        if (!$trade->pnl) {
            return back()->withErrors(['error' => 'Trade must have P&L set before closing.']);
        }

        try {
            DB::transaction(function () use ($trade) {
                // Close the trade
                $trade->update([
                    'status' => 3, // Closed
                    'closed_at' => now()
                ]);

                // Update user balance with the P&L
                $user = $trade->user;
                $user->balance += $trade->pnl;
                $user->save();
            });

            return back()->with('success', 'Trade closed successfully with P&L!');
        } catch (\Exception $e) {
            Log::error('Admin close trade with P&L failed: ' . $e->getMessage());
            return back()->withErrors(['error' => 'Failed to close trade. Please try again.']);
        }
    }

    /**
     * Get current price for a symbol
     */
    private function getCurrentPrice(string $market, string $symbol): ?float
    {
        // This would integrate with your existing price fetching logic
        // For now, return a mock price - you should integrate with your StockService
        
        if ($market === 'stock') {
            $stock = \App\Models\Stock::where('symbol', $symbol)->first();
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
} 