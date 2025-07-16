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
        return match($this->type) {
            'buy' => '<span class="badge bg-success">Buy</span>',
            'sell' => '<span class="badge bg-danger">Sell</span>',
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
} 