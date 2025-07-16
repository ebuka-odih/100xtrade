<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TradePair extends Model
{
    use HasUuids;

    protected $fillable = [
        'symbol',
        'name',
        'market', // stock, crypto, forex
        'base_currency',
        'quote_currency',
        'current_price',
        'change_24h',
        'volume_24h',
        'is_active',
        'min_amount',
        'max_amount',
        'price_precision',
        'amount_precision'
    ];

    protected $casts = [
        'current_price' => 'decimal:8',
        'change_24h' => 'decimal:4',
        'volume_24h' => 'decimal:2',
        'is_active' => 'boolean',
        'min_amount' => 'decimal:2',
        'max_amount' => 'decimal:2',
        'price_precision' => 'integer',
        'amount_precision' => 'integer',
    ];

    public function trades(): HasMany
    {
        return $this->hasMany(Trade::class, 'symbol', 'symbol');
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

    public function getPriceChangeClassAttribute(): string
    {
        return $this->change_24h >= 0 ? 'text-success' : 'text-danger';
    }

    public function getFormattedPriceAttribute(): string
    {
        return '$' . number_format($this->current_price, $this->price_precision);
    }

    public function getFormattedChangeAttribute(): string
    {
        $sign = $this->change_24h >= 0 ? '+' : '';
        return $sign . number_format($this->change_24h, 2) . '%';
    }

    public function getTradingViewSymbolAttribute(): string
    {
        return match($this->market) {
            'stock' => 'NASDAQ:' . $this->symbol,
            'crypto' => 'BINANCE:' . $this->symbol . 'USD',
            'forex' => 'FX:' . $this->symbol,
            default => $this->symbol
        };
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeByMarket($query, $market)
    {
        return $query->where('market', $market);
    }
} 