@extends('dashboard.layout.app')

@section('title', 'Trade History')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="card-title mb-0">Trade History</h4>
                        <a href="{{ route('user.trade.index') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> New Trade
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif

                    @if(session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session()->get('error') }}
                        </div>
                    @endif

                    <!-- Filters -->
                    <div class="row mb-4">
                        <div class="col-md-3">
                            <label for="market_filter" class="form-label">Market</label>
                            <select id="market_filter" class="form-control">
                                <option value="">All Markets</option>
                                <option value="stock">Stocks</option>
                                <option value="crypto">Crypto</option>
                                <option value="forex">Forex</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="status_filter" class="form-label">Status</label>
                            <select id="status_filter" class="form-control">
                                <option value="">All Status</option>
                                <option value="1">Pending</option>
                                <option value="2">Active</option>
                                <option value="3">Closed</option>
                                <option value="4">Cancelled</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="type_filter" class="form-label">Type</label>
                            <select id="type_filter" class="form-control">
                                <option value="">All Types</option>
                                <option value="buy">Buy</option>
                                <option value="sell">Sell</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="date_filter" class="form-label">Date Range</label>
                            <input type="date" id="date_filter" class="form-control">
                        </div>
                    </div>

                    <!-- Trades Table -->
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Symbol</th>
                                    <th>Market</th>
                                    <th>Type</th>
                                    <th>Amount</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>P&L</th>
                                    <th>Created</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($trades as $trade)
                                    <tr>
                                        <td>
                                            <small class="text-muted">{{ substr($trade->id, 0, 8) }}...</small>
                                        </td>
                                        <td>
                                            <strong>{{ $trade->symbol }}</strong>
                                            <br>
                                            <small class="text-muted">{{ $trade->tradePair->name ?? 'N/A' }}</small>
                                        </td>
                                        <td>{!! $trade->market_badge !!}</td>
                                        <td>{!! $trade->type_badge !!}</td>
                                        <td>${{ number_format($trade->amount, 2) }}</td>
                                        <td>
                                            @if($trade->entry_price)
                                                ${{ number_format($trade->entry_price, 2) }}
                                            @else
                                                <span class="text-muted">-</span>
                                            @endif
                                        </td>
                                        <td>{!! $trade->status_badge !!}</td>
                                        <td>
                                            @if($trade->pnl !== null)
                                                <span class="{{ $trade->pnl >= 0 ? 'text-success' : 'text-danger' }}">
                                                    ${{ number_format($trade->pnl, 2) }}
                                                </span>
                                            @else
                                                <span class="text-muted">-</span>
                                            @endif
                                        </td>
                                        <td>
                                            <small>{{ $trade->created_at->format('M d, Y H:i') }}</small>
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                @if($trade->canBeCancelled())
                                                    <form action="{{ route('user.trade.cancel', $trade->id) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-warning" onclick="return confirm('Are you sure you want to cancel this trade?')">
                                                            <i class="fas fa-times"></i> Cancel
                                                        </button>
                                                    </form>
                                                @endif

                                                @if($trade->canBeClosed())
                                                    <form action="{{ route('user.trade.close', $trade->id) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('PATCH')
                                                        <button type="submit" class="btn btn-sm btn-success" onclick="return confirm('Are you sure you want to close this trade?')">
                                                            <i class="fas fa-check"></i> Close
                                                        </button>
                                                    </form>
                                                @endif

                                                <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#tradeModal{{ $trade->id }}">
                                                    <i class="fas fa-eye"></i> Details
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- Trade Details Modal -->
                                    <div class="modal fade" id="tradeModal{{ $trade->id }}" tabindex="-1">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Trade Details</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <h6>Basic Information</h6>
                                                            <table class="table table-sm">
                                                                <tr>
                                                                    <td><strong>Trade ID:</strong></td>
                                                                    <td>{{ $trade->id }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>Symbol:</strong></td>
                                                                    <td>{{ $trade->symbol }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>Market:</strong></td>
                                                                    <td>{!! $trade->market_badge !!}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>Type:</strong></td>
                                                                    <td>{!! $trade->type_badge !!}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>Amount:</strong></td>
                                                                    <td>${{ number_format($trade->amount, 2) }}</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h6>Trade Details</h6>
                                                            <table class="table table-sm">
                                                                <tr>
                                                                    <td><strong>Entry Price:</strong></td>
                                                                    <td>${{ number_format($trade->entry_price ?? 0, 2) }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>Exit Price:</strong></td>
                                                                    <td>${{ number_format($trade->exit_price ?? 0, 2) }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>Quantity:</strong></td>
                                                                    <td>{{ number_format($trade->quantity ?? 0, 4) }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>P&L:</strong></td>
                                                                    <td>
                                                                        @if($trade->pnl !== null)
                                                                            <span class="{{ $trade->pnl >= 0 ? 'text-success' : 'text-danger' }}">
                                                                                ${{ number_format($trade->pnl, 2) }}
                                                                            </span>
                                                                        @else
                                                                            <span class="text-muted">-</span>
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>Status:</strong></td>
                                                                    <td>{!! $trade->status_badge !!}</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col-12">
                                                            <h6>Order Information</h6>
                                                            <table class="table table-sm">
                                                                <tr>
                                                                    <td><strong>Order Type:</strong></td>
                                                                    <td>{{ ucfirst($trade->order_type) }}</td>
                                                                </tr>
                                                                @if($trade->limit_price)
                                                                    <tr>
                                                                        <td><strong>Limit Price:</strong></td>
                                                                        <td>${{ number_format($trade->limit_price, 2) }}</td>
                                                                    </tr>
                                                                @endif
                                                                @if($trade->stop_loss)
                                                                    <tr>
                                                                        <td><strong>Stop Loss:</strong></td>
                                                                        <td>${{ number_format($trade->stop_loss, 2) }}</td>
                                                                    </tr>
                                                                @endif
                                                                @if($trade->take_profit)
                                                                    <tr>
                                                                        <td><strong>Take Profit:</strong></td>
                                                                        <td>${{ number_format($trade->take_profit, 2) }}</td>
                                                                    </tr>
                                                                @endif
                                                                <tr>
                                                                    <td><strong>Created:</strong></td>
                                                                    <td>{{ $trade->created_at->format('M d, Y H:i:s') }}</td>
                                                                </tr>
                                                                @if($trade->filled_at)
                                                                    <tr>
                                                                        <td><strong>Filled:</strong></td>
                                                                        <td>{{ $trade->filled_at->format('M d, Y H:i:s') }}</td>
                                                                    </tr>
                                                                @endif
                                                                @if($trade->closed_at)
                                                                    <tr>
                                                                        <td><strong>Closed:</strong></td>
                                                                        <td>{{ $trade->closed_at->format('M d, Y H:i:s') }}</td>
                                                                    </tr>
                                                                @endif
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <tr>
                                        <td colspan="10" class="text-center py-4">
                                            <div class="text-muted">
                                                <i class="fas fa-chart-line fa-3x mb-3"></i>
                                                <h5>No trades found</h5>
                                                <p>You haven't placed any trades yet.</p>
                                                <a href="{{ route('user.trade.index') }}" class="btn btn-primary">
                                                    <i class="fas fa-plus"></i> Start Trading
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    @if($trades->hasPages())
                        <div class="d-flex justify-content-center mt-4">
                            {{ $trades->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Filter functionality
    const filters = ['market_filter', 'status_filter', 'type_filter', 'date_filter'];
    
    filters.forEach(filterId => {
        const filter = document.getElementById(filterId);
        if (filter) {
            filter.addEventListener('change', function() {
                applyFilters();
            });
        }
    });

    function applyFilters() {
        const market = document.getElementById('market_filter').value;
        const status = document.getElementById('status_filter').value;
        const type = document.getElementById('type_filter').value;
        const date = document.getElementById('date_filter').value;

        const params = new URLSearchParams();
        if (market) params.append('market', market);
        if (status) params.append('status', status);
        if (type) params.append('type', type);
        if (date) params.append('date', date);

        window.location.href = '{{ route("user.trade.history") }}?' + params.toString();
    }
});
</script>
@endsection 