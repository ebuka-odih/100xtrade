<?php

namespace App\Console\Commands;

use App\Models\Trade;
use Illuminate\Console\Command;

class FixTradeStatuses extends Command
{
    protected $signature = 'trades:fix-statuses';
    protected $description = 'Fix trade statuses that might be stored incorrectly';

    public function handle()
    {
        $this->info('Checking and fixing trade statuses...');

        $trades = Trade::all();
        $fixed = 0;

        foreach ($trades as $trade) {
            $originalStatus = $trade->status;
            $statusInt = (int) $originalStatus;
            
            // Check if status is valid (1-4)
            if ($statusInt < 1 || $statusInt > 4) {
                $this->warn("Trade {$trade->id} has invalid status: {$originalStatus}");
                
                // Set to pending if invalid
                $trade->update(['status' => 1]);
                $fixed++;
                $this->info("Fixed trade {$trade->id} status to Pending");
            } else {
                $this->info("Trade {$trade->id} status is valid: {$statusInt}");
            }
        }

        $this->info("Processed {$trades->count()} trades, fixed {$fixed} statuses.");
    }
} 