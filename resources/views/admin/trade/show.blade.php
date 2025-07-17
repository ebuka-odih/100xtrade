@extends('admin.layout.app')
@section('content')

<div class="container-fluid" style="margin-top: 80px; padding-top: 20px;">
    <div class="row">
        <div class="col-12">
            <div class="card" style="margin-top: 10px;">
                <div class="card-header" style="background-color: #f8f9fa; border-bottom: 2px solid #dee2e6;">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Trade Details - {{ $trade->symbol }}</h4>
                        <div>
                            <a href="{{ route('admin.trade.index') }}" class="btn btn-secondary me-2" style="font-weight: 500;">
                                <i class="fas fa-arrow-left"></i> Back to Trades
                            </a>
                        
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <!-- TradingView Chart -->
                            <div class="tradingview-widget-container">
                                <div class="tradingview-widget-container__widget"></div>
                                <div class="tradingview-widget-copyright">
                                    <a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank">
                                    </a>
                                </div>
                                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async>
                                    {
                                        "width": "100%",
                                        "height": "500",
                                        "symbol": "{{ $trade->market === 'stock' ? 'NASDAQ:' . $trade->symbol : ($trade->market === 'crypto' ? 'BINANCE:' . $trade->symbol . 'USD' : 'FX:' . $trade->symbol) }}",
                                        "interval": "D",
                                        "timezone": "Etc/UTC",
                                        "theme": "dark",
                                        "style": "1",
                                        "locale": "en",
                                        "allow_symbol_change": true,
                                        "calendar": false,
                                        "support_host": "https://www.tradingview.com"
                                    }
                                </script>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <!-- Trade Information -->
                            <div class="card">
                                <div class="card-header">
                                    <h6 class="mb-0">Trade Information</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <strong>Trade ID:</strong>
                                        </div>
                                        <div class="col-6">
                                            {{ $trade->id }}
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <strong>User:</strong>
                                        </div>
                                        <div class="col-6">
                                            <a href="{{ route('admin.user.show', $trade->user->id) }}">
                                                {{ $trade->user->name }}
                                            </a>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <strong>Market:</strong>
                                        </div>
                                        <div class="col-6">
                                            {!! $trade->market_badge !!}
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <strong>Symbol:</strong>
                                        </div>
                                        <div class="col-6">
                                            <span class="fw-bold">{{ $trade->symbol }}</span>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <strong>Type:</strong>
                                        </div>
                                        <div class="col-6">
                                            {!! $trade->type_badge !!}
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <strong>Amount:</strong>
                                        </div>
                                        <div class="col-6">
                                            ${{ number_format($trade->amount, 2) }}
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <strong>Order Type:</strong>
                                        </div>
                                        <div class="col-6">
                                            <span class="badge bg-info">{{ ucfirst($trade->order_type) }}</span>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <strong>Price:</strong>
                                        </div>
                                        <div class="col-6">
                                            ${{ number_format($trade->price, 8) }}
                                        </div>
                                    </div>

                                    @if($trade->entry_price)
                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <strong>Entry Price:</strong>
                                        </div>
                                        <div class="col-6">
                                            ${{ number_format($trade->entry_price, 8) }}
                                        </div>
                                    </div>
                                    @endif

                                    @if($trade->exit_price)
                                        <div class="row mb-3">
                                            <div class="col-6">
                                                <strong>Exit Price:</strong>
                                            </div>
                                            <div class="col-6">
                                                ${{ number_format($trade->exit_price, 2) }}
                                            </div>
                                        </div>
                                    @endif

                                    @if($trade->quantity)
                                        <div class="row mb-3">
                                            <div class="col-6">
                                                <strong>Quantity:</strong>
                                            </div>
                                            <div class="col-6">
                                                {{ number_format($trade->quantity, 4) }}
                                            </div>
                                        </div>
                                    @endif

                                    @if($trade->stop_loss)
                                        <div class="row mb-3">
                                            <div class="col-6">
                                                <strong>Stop Loss:</strong>
                                            </div>
                                            <div class="col-6">
                                                ${{ number_format($trade->stop_loss, 2) }}
                                            </div>
                                        </div>
                                    @endif

                                    @if($trade->take_profit)
                                        <div class="row mb-3">
                                            <div class="col-6">
                                                <strong>Take Profit:</strong>
                                            </div>
                                            <div class="col-6">
                                                ${{ number_format($trade->take_profit, 2) }}
                                            </div>
                                        </div>
                                    @endif

                                    @if($trade->interval)
                                        <div class="row mb-3">
                                            <div class="col-6">
                                                <strong>{{ $trade->market === 'stock' ? 'Expiry Interval:' : 'Execution Interval:' }}</strong>
                                            </div>
                                            <div class="col-6">
                                                <span class="badge bg-info">{{ $trade->interval_display }}</span>
                                            </div>
                                        </div>
                                    @endif

                                    @if($trade->scheduled_at)
                                        <div class="row mb-3">
                                            <div class="col-6">
                                                <strong>Scheduled For:</strong>
                                            </div>
                                            <div class="col-6">
                                                {{ $trade->scheduled_at->format('M d, Y H:i') }}
                                            </div>
                                        </div>
                                    @endif

                                    @if($trade->scheduled_at && $trade->status == 1)
                                        <div class="row mb-3">
                                            <div class="col-6">
                                                <strong>{{ $trade->market === 'stock' ? 'Time Until Expiry:' : 'Time Until Execution:' }}</strong>
                                            </div>
                                            <div class="col-6">
                                                @php
                                                    $now = now();
                                                    $scheduled = $trade->scheduled_at;
                                                    $diff = $now->diff($scheduled);
                                                    
                                                    if ($scheduled->isPast()) {
                                                        echo '<span class="badge bg-success">Ready to Execute</span>';
                                                    } else {
                                                        $timeString = '';
                                                        if ($diff->days > 0) {
                                                            $timeString .= $diff->days . 'd ';
                                                        }
                                                        if ($diff->h > 0) {
                                                            $timeString .= $diff->h . 'h ';
                                                        }
                                                        if ($diff->i > 0) {
                                                            $timeString .= $diff->i . 'm';
                                                        }
                                                        echo '<span class="badge bg-warning">' . trim($timeString) . '</span>';
                                                    }
                                                @endphp
                                            </div>
                                        </div>
                                    @endif

                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <strong>Status:</strong>
                                        </div>
                                        <div class="col-6">
                                            {!! $trade->status_badge !!}
                                        </div>
                                    </div>

                                    @if($trade->pnl !== null)
                                        <div class="row mb-3">
                                            <div class="col-6">
                                                <strong>P&L:</strong>
                                            </div>
                                            <div class="col-6">
                                                <span class="badge {{ $trade->pnl >= 0 ? 'bg-success' : 'bg-danger' }}">
                                                    ${{ number_format($trade->pnl, 2) }}
                                                </span>
                                            </div>
                                        </div>
                                    @endif

                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <strong>Created:</strong>
                                        </div>
                                        <div class="col-6">
                                            {{ $trade->created_at->format('M d, Y H:i') }}
                                        </div>
                                    </div>

                                    @if($trade->filled_at)
                                        <div class="row mb-3">
                                            <div class="col-6">
                                                <strong>Filled:</strong>
                                            </div>
                                            <div class="col-6">
                                                {{ $trade->filled_at->format('M d, Y H:i') }}
                                            </div>
                                        </div>
                                    @endif

                                    @if($trade->closed_at)
                                        <div class="row mb-3">
                                            <div class="col-6">
                                                <strong>Closed:</strong>
                                            </div>
                                            <div class="col-6">
                                                {{ $trade->closed_at->format('M d, Y H:i') }}
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <!-- Timing Information -->
                            @if($trade->interval || $trade->scheduled_at)
                            <div class="card mt-3">
                                <div class="card-header" style="background-color: #e3f2fd; border-bottom: 2px solid #2196f3;">
                                    <h6 class="mb-0 text-primary">
                                        <i class="fas fa-clock me-2"></i>{{ $trade->market === 'stock' ? 'Expiry Timing' : 'Execution Timing' }}
                                    </h6>
                                </div>
                                <div class="card-body">
                                    @if($trade->interval)
                                        <div class="row mb-3">
                                            <div class="col-6">
                                                <strong>Interval:</strong>
                                            </div>
                                            <div class="col-6">
                                                <span class="badge bg-primary fs-6">{{ $trade->interval_display }}</span>
                                            </div>
                                        </div>
                                    @endif

                                    @if($trade->scheduled_at)
                                        <div class="row mb-3">
                                            <div class="col-6">
                                                <strong>Scheduled Time:</strong>
                                            </div>
                                            <div class="col-6">
                                                <span class="fw-bold">{{ $trade->scheduled_at->format('M d, Y H:i:s') }}</span>
                                            </div>
                                        </div>
                                    @endif

                                    @if($trade->scheduled_at && $trade->status == 1)
                                        <div class="row mb-3">
                                            <div class="col-6">
                                                <strong>Status:</strong>
                                            </div>
                                            <div class="col-6">
                                                @php
                                                    $now = now();
                                                    $scheduled = $trade->scheduled_at;
                                                    
                                                    if ($scheduled->isPast()) {
                                                        echo '<span class="badge bg-success fs-6"><i class="fas fa-check me-1"></i>Ready to Execute</span>';
                                                    } else {
                                                        $diff = $now->diff($scheduled);
                                                        $timeString = '';
                                                        if ($diff->days > 0) {
                                                            $timeString .= $diff->days . 'd ';
                                                        }
                                                        if ($diff->h > 0) {
                                                            $timeString .= $diff->h . 'h ';
                                                        }
                                                        if ($diff->i > 0) {
                                                            $timeString .= $diff->i . 'm';
                                                        }
                                                        echo '<span class="badge bg-warning fs-6"><i class="fas fa-clock me-1"></i>' . trim($timeString) . ' remaining</span>';
                                                    }
                                                @endphp
                                            </div>
                                        </div>
                                    @endif

                                    @if($trade->status == 1 && $trade->scheduled_at)
                                        <div class="alert alert-info">
                                            <i class="fas fa-info-circle me-2"></i>
                                            <strong>Note:</strong> This trade will be automatically executed at the scheduled time. 
                                            You can manually execute it now if needed.
                                        </div>
                                    @endif
                                </div>
                            </div>
                            @endif

                            <!-- Admin Actions -->
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h6 class="mb-0">Admin Actions</h6>
                                </div>
                                <div class="card-body">
                                    @if($trade->canBeCancelled())
                                        <form action="{{ route('admin.trade.cancel', $trade->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="btn btn-warning w-100 mb-2" onclick="return confirm('Cancel this trade?')">
                                                <i class="fas fa-times"></i> Cancel Trade
                                            </button>
                                        </form>
                                    @endif

                                    @if($trade->isPending())
                                        <form action="{{ route('admin.trade.execute', $trade->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="btn btn-success w-100 mb-2" onclick="return confirm('Execute this trade?')">
                                                <i class="fas fa-play"></i> Execute Trade
                                            </button>
                                        </form>
                                    @endif

                                    @if($trade->canBeClosed())
                                        <form action="{{ route('admin.trade.close', $trade->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="btn btn-success w-100 mb-2" onclick="return confirm('Close this trade?')">
                                                <i class="fas fa-check"></i> Close Trade
                                            </button>
                                        </form>
                                    @endif

                                    @if(in_array($trade->status, [3, 4]))
                                        <form action="{{ route('admin.trade.destroy', $trade->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger w-100 mb-2" onclick="return confirm('Delete this trade? This action cannot be undone.')">
                                                <i class="fas fa-trash"></i> Delete Trade
                                            </button>
                                        </form>
                                    @endif
                                </div>
                            </div>

                            <!-- Profit/Loss Form -->
                            @if($trade->status == 2) <!-- Only show for active trades -->
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h6 class="mb-0">Add Profit/Loss</h6>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('admin.trade.profitLoss', $trade->id) }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="pnl_amount" class="form-label">Amount ($)</label>
                                            <input type="number" step="0.01" min="0" class="form-control" id="pnl_amount" name="pnl_amount" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Type</label>
                                            <div class="d-flex gap-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="pnl_type" id="profit" value="profit" required>
                                                    <label class="form-check-label text-success" for="profit">
                                                        <i class="fas fa-plus"></i> Profit
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="pnl_type" id="loss" value="loss">
                                                    <label class="form-check-label text-danger" for="loss">
                                                        <i class="fas fa-minus"></i> Loss
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary w-100" onclick="return confirm('Are you sure you want to add this profit/loss? The trade will remain active.')">
                                            <i class="fas fa-dollar-sign"></i> Add Profit/Loss
                                        </button>
                                    </form>
                                </div>
                            </div>
                            @endif

                            <!-- Close with PnL Button -->
                            @if($trade->status == 2 && $trade->pnl !== null) <!-- Only show for active trades with PnL set -->
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h6 class="mb-0">Close Trade with P&L</h6>
                                </div>
                                <div class="card-body">
                                    <div class="alert alert-info">
                                        <i class="fas fa-info-circle me-2"></i>
                                        <strong>Current P&L:</strong> 
                                        <span class="badge {{ $trade->pnl >= 0 ? 'bg-success' : 'bg-danger' }}">
                                            ${{ number_format($trade->pnl, 2) }}
                                        </span>
                                    </div>
                                    <form action="{{ route('admin.trade.closeWithPnL', $trade->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-success w-100" onclick="return confirm('Are you sure you want to close this trade with the current P&L? This will update the user balance.')">
                                            <i class="fas fa-check"></i> Close Trade with P&L
                                        </button>
                                    </form>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection 