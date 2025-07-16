<?php

namespace App\Console\Commands;

use App\Models\Trade;
use App\Services\StockService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ExecuteScheduledTrades extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'trades:execute-scheduled';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Execute scheduled trades that are ready for execution';

    protected $stockService;

    public function __construct(StockService $stockService)
    {
        parent::__construct();
        $this->stockService = $stockService;
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Checking for scheduled trades...');

        $scheduledTrades = Trade::where('status', 1) // Pending trades
            ->whereNotNull('scheduled_at')
            ->where('scheduled_at', '<=', now())
            ->get();

        if ($scheduledTrades->isEmpty()) {
            $this->info('No scheduled trades ready for execution.');
            return 0;
        }

        $this->info("Found {$scheduledTrades->count()} trades ready for execution.");

        $executedCount = 0;
        $failedCount = 0;

        foreach ($scheduledTrades as $trade) {
            try {
                DB::transaction(function () use ($trade) {
                    $currentPrice = $this->getCurrentPrice($trade->market, $trade->symbol);
                    
                    if (!$currentPrice) {
                        throw new \Exception('Unable to get current price for ' . $trade->symbol);
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

                    $this->info("Executed trade {$trade->id} for {$trade->symbol} at \${$currentPrice}");
                });

                $executedCount++;
            } catch (\Exception $e) {
                Log::error("Failed to execute scheduled trade {$trade->id}: " . $e->getMessage());
                $this->error("Failed to execute trade {$trade->id}: " . $e->getMessage());
                $failedCount++;
            }
        }

        $this->info("Execution complete: {$executedCount} successful, {$failedCount} failed.");
        return 0;
    }

    /**
     * Get current price for a symbol
     */
    private function getCurrentPrice(string $market, string $symbol): ?float
    {
        // This should be implemented based on your price fetching logic
        // For now, return a mock price - replace with actual API call
        return match($market) {
            'stock' => rand(100, 500),
            'crypto' => rand(1000, 50000) / 100,
            'forex' => rand(100, 200) / 100,
            default => null
        };
    }
}
