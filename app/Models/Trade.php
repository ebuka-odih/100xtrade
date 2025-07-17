<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Trade extends Model
{
    use HasUuids;

    protected $fillable = [
        'user_id',
        'market',
        'symbol',
        'type', // buy/sell
        'amount',
        'price',
        'stop_loss',
        'take_profit',
        'status', // pending, active, closed, cancelled
        'pnl',
        'entry_price',
        'exit_price',
        'quantity',
        'order_type', // market, limit, stop
        'limit_price',
        'interval', // expiry interval
        'scheduled_at', // scheduled execution time
        'filled_at',
        'closed_at'
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'price' => 'decimal:2',
        'stop_loss' => 'decimal:2',
        'take_profit' => 'decimal:2',
        'pnl' => 'decimal:2',
        'entry_price' => 'decimal:2',
        'exit_price' => 'decimal:2',
        'quantity' => 'decimal:4',
        'limit_price' => 'decimal:2',
        'status' => 'integer',
        'scheduled_at' => 'datetime',
        'filled_at' => 'datetime',
        'closed_at' => 'datetime',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function tradePair(): BelongsTo
    {
        return $this->belongsTo(TradePair::class, 'symbol', 'symbol');
    }

    public function getStatusBadgeAttribute(): string
    {
        $status = (int) $this->status;
        
        return match($status) {
            1 => '<span class="badge bg-warning">Pending</span>',
            2 => '<span class="badge bg-success">Active</span>',
            3 => '<span class="badge bg-info">Closed</span>',
            4 => '<span class="badge bg-danger">Cancelled</span>',
            default => '<span class="badge bg-secondary">Unknown (' . $this->status . ')</span>'
        };
    }

    public function getStatusTextAttribute(): string
    {
        $status = (int) $this->status;
        
        return match($status) {
            1 => 'Pending',
            2 => 'Active',
            3 => 'Closed',
            4 => 'Cancelled',
            default => 'Unknown (' . $this->status . ')'
        };
    }

    public function getTypeBadgeAttribute(): string
    {
        $isStock = $this->market === 'stock';
        
        return match($this->type) {
            'buy' => '<span class="badge bg-success">' . ($isStock ? 'Call' : 'Buy') . '</span>',
            'sell' => '<span class="badge bg-danger">' . ($isStock ? 'Put' : 'Sell') . '</span>',
            default => '<span class="badge bg-secondary">Unknown</span>'
        };
    }

    public function getMarketBadgeAttribute(): string
    {
        return match($this->market) {
            'stock' => '<span class="badge bg-primary">Stock</span>',
            'crypto' => '<span class="badge bg-warning">Crypto</span>',
            'forex' => '<span class="badge bg-info">Forex</span>',
            default => '<span class="badge bg-secondary">Unknown</span>'
        };
    }

    public function getCurrentPnlAttribute(): float
    {
        $status = (int) $this->status;
        
        if ($status == 3) { // Closed
            return $this->pnl ?? 0;
        }

        // Calculate unrealized P&L for active trades
        if ($status == 2 && $this->entry_price) {
            $currentPrice = $this->getCurrentPrice();
            if ($currentPrice) {
                if ($this->type == 'buy') {
                    return (($currentPrice - $this->entry_price) / $this->entry_price) * 100;
                } else {
                    return (($this->entry_price - $currentPrice) / $this->entry_price) * 100;
                }
            }
        }

        return 0;
    }

    private function getCurrentPrice(): ?float
    {
        // This would need to be implemented based on your price fetching logic
        // For now, return null - you can integrate with your StockService
        return null;
    }

    public function isProfitable(): bool
    {
        return $this->getCurrentPnlAttribute() > 0;
    }

    public function isLoss(): bool
    {
        return $this->getCurrentPnlAttribute() < 0;
    }

    public function canBeClosed(): bool
    {
        return (int) $this->status === 2; // Only active trades can be closed
    }

    public function canBeCancelled(): bool
    {
        return (int) $this->status === 1; // Only pending trades can be cancelled
    }

    public function isActive(): bool
    {
        return (int) $this->status === 2;
    }

    public function isPending(): bool
    {
        return (int) $this->status === 1;
    }

    public function isClosed(): bool
    {
        return (int) $this->status === 3;
    }

    public function isCancelled(): bool
    {
        return (int) $this->status === 4;
    }

    /**
     * Get available intervals for trade execution
     */
    public static function getAvailableIntervals(): array
    {
        return [
            '5min' => '5 Minutes',
            '10min' => '10 Minutes',
            '15min' => '15 Minutes',
            '30min' => '30 Minutes',
            '1hour' => '1 Hour',
            '2hour' => '2 Hours',
            '4hour' => '4 Hours',
            '6hour' => '6 Hours',
            '8hour' => '8 Hours',
            '12hour' => '12 Hours',
            '1day' => '1 Day',
            '2day' => '2 Days',
            '3day' => '3 Days',
            '1week' => '1 Week',
            '2week' => '2 Weeks',
            '1month' => '1 Month',
            '3month' => '3 Months',
            '6month' => '6 Months',
            '1year' => '1 Year',
        ];
    }

    /**
     * Calculate scheduled time based on interval
     */
    public function calculateScheduledTime(): void
    {
        if (!$this->interval) {
            return;
        }

        $now = now();
        
        $scheduledTime = match($this->interval) {
            '5min' => $now->addMinutes(5),
            '10min' => $now->addMinutes(10),
            '15min' => $now->addMinutes(15),
            '30min' => $now->addMinutes(30),
            '1hour' => $now->addHour(),
            '2hour' => $now->addHours(2),
            '4hour' => $now->addHours(4),
            '6hour' => $now->addHours(6),
            '8hour' => $now->addHours(8),
            '12hour' => $now->addHours(12),
            '1day' => $now->addDay(),
            '2day' => $now->addDays(2),
            '3day' => $now->addDays(3),
            '1week' => $now->addWeek(),
            '2week' => $now->addWeeks(2),
            '1month' => $now->addMonth(),
            '3month' => $now->addMonths(3),
            '6month' => $now->addMonths(6),
            '1year' => $now->addYear(),
            default => $now
        };

        $this->scheduled_at = $scheduledTime;
    }

    /**
     * Check if trade is ready to be executed based on scheduled time
     */
    public function isReadyForExecution(): bool
    {
        if (!$this->scheduled_at || $this->status !== 1) {
            return false;
        }

        return now()->gte($this->scheduled_at);
    }

    /**
     * Get formatted interval display
     */
    public function getIntervalDisplayAttribute(): string
    {
        if (!$this->interval) {
            return 'Immediate';
        }

        $intervals = self::getAvailableIntervals();
        return $intervals[$this->interval] ?? $this->interval;
    }
} 