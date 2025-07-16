@extends('dashboard.layout.app')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Trade History</h4>
                        <div>
                            <a href="{{ route('user.trade.index') }}" class="btn btn-primary">
                                <i class="fas fa-plus me-1"></i>New Trade
                            </a>
                        </div>
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

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Market</th>
                                    <th>Symbol</th>
                                    <th>Type</th>
                                    <th>Amount</th>
                                    <th>Entry Price</th>
                                    <th>Exit Price</th>
                                    <th>P&L</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($trades as $trade)
                                    <tr>
                                        <td>{{ $trade->created_at->format('M d, Y H:i') }}</td>
                                        <td>{!! $trade->market_badge !!}</td>
                                        <td><strong>{{ $trade->symbol }}</strong></td>
                                        <td>{!! $trade->type_badge !!}</td>
                                        <td>${{ number_format($trade->amount, 2) }}</td>
                                        <td>
                                            @if($trade->entry_price)
                                                ${{ number_format($trade->entry_price, 2) }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td>
                                            @if($trade->exit_price)
                                                ${{ number_format($trade->exit_price, 2) }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td>
                                            @if($trade->status == 3) {{-- Closed --}}
                                                <span class="badge {{ $trade->pnl >= 0 ? 'bg-success' : 'bg-danger' }}">
                                                    ${{ number_format($trade->pnl, 2) }}
                                                </span>
                                            @elseif($trade->status == 2) {{-- Active --}}
                                                <span class="badge {{ $trade->getCurrentPnlAttribute() >= 0 ? 'bg-success' : 'bg-danger' }}">
                                                    {{ number_format($trade->getCurrentPnlAttribute(), 2) }}%
                                                </span>
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td>{!! $trade->status_badge !!}</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                @if($trade->canBeCancelled())
                                                    <form action="{{ route('user.trade.cancel', $trade->id) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-outline-warning" onclick="return confirm('Cancel this trade?')">
                                                            <i class="fas fa-times me-1"></i>Cancel
                                                        </button>
                                                    </form>
                                                @endif

                                                @if($trade->canBeClosed())
                                                    <form action="{{ route('user.trade.close', $trade->id) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('PATCH')
                                                        <button type="submit" class="btn btn-sm btn-outline-success" onclick="return confirm('Close this trade?')">
                                                            <i class="fas fa-check me-1"></i>Close
                                                        </button>
                                                    </form>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="10" class="text-center">
                                            <div class="py-4">
                                                <i class="fas fa-chart-line fa-3x text-muted mb-3"></i>
                                                <h6 class="text-muted">No trades found</h6>
                                                <p class="text-muted">Start trading by placing your first order.</p>
                                                <a href="{{ route('user.trade.index') }}" class="btn btn-primary">
                                                    Place Your First Trade
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

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

@endsection 