<?php

namespace App\Console\Commands;

use App\Models\Trade;
use App\Services\StockService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ProcessTradeOrders extends Command
{
    protected $signature = 'trades:process-orders';
    protected $description = 'Process pending trade orders and execute them when conditions are met';

    protected $stockService;

    public function __construct(StockService $stockService)
    {
        parent::__construct();
        $this->stockService = $stockService;
    }

    public function handle()
    {
        $this->info('Processing trade orders...');

        // Get all pending trades
        $pendingTrades = Trade::where('status', 1)->get();

        if ($pendingTrades->isEmpty()) {
            $this->info('No pending trades found.');
            return;
        }

        $processed = 0;
        $executed = 0;

        foreach ($pendingTrades as $trade) {
            $this->info("Processing trade {$trade->id} for {$trade->symbol}...");
            
            try {
                if ($this->shouldExecuteTrade($trade)) {
                    $this->executeTrade($trade);
                    $executed++;
                    $this->info("Trade {$trade->id} executed successfully.");
                } else {
                    $this->info("Trade {$trade->id} conditions not met yet.");
                }
                $processed++;
            } catch (\Exception $e) {
                Log::error("Failed to process trade {$trade->id}: " . $e->getMessage());
                $this->error("Failed to process trade {$trade->id}: " . $e->getMessage());
            }
        }

        $this->info("Processing complete. Processed: {$processed}, Executed: {$executed}");
    }

    private function shouldExecuteTrade(Trade $trade): bool
    {
        $currentPrice = $this->getCurrentPrice($trade->market, $trade->symbol);
        
        if (!$currentPrice) {
            return false;
        }

        // Check if limit order conditions are met
        if ($trade->order_type === 'limit' && $trade->limit_price) {
            if ($trade->type === 'buy' && $currentPrice <= $trade->limit_price) {
                return true;
            }
            if ($trade->type === 'sell' && $currentPrice >= $trade->limit_price) {
                return true;
            }
        }

        // Check if stop order conditions are met
        if ($trade->order_type === 'stop' && $trade->limit_price) {
            if ($trade->type === 'buy' && $currentPrice >= $trade->limit_price) {
                return true;
            }
            if ($trade->type === 'sell' && $currentPrice <= $trade->limit_price) {
                return true;
            }
        }

        return false;
    }

    private function executeTrade(Trade $trade)
    {
        DB::transaction(function () use ($trade) {
            $currentPrice = $this->getCurrentPrice($trade->market, $trade->symbol);
            
            if (!$currentPrice) {
                throw new \Exception('Unable to get current price');
            }

            // Update trade to active status
            $trade->update([
                'price' => $currentPrice,
                'entry_price' => $currentPrice,
                'quantity' => $trade->amount / $currentPrice,
                'status' => 2, // Active
                'filled_at' => now()
            ]);

            // Deduct balance for buy orders if not already done
            if ($trade->type === 'buy') {
                $user = $trade->user;
                $user->balance -= $trade->amount;
                $user->save();
            }
        });
    }

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