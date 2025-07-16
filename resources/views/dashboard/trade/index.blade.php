@extends('dashboard.layout.app')
@section('content')

    <div class="container-fluid main-content px-2 px-lg-4">
        <div class="row my-2 g-3 gx-lg-4 pb-3">
            <div class="col-12">
                <div class="mainchart px-3 px-md-4 py-3 py-lg-4">
                    <div class="activity">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <h5 class="mb-0">My Trades</h5>
                            </div>
                            <div class="col-md-6 text-end">
                                <a href="{{ route('user.trade.create') }}" class="btn btn-primary">
                                    <i class="fas fa-plus"></i> New Trade
                                </a>
                            </div>
                        </div>
                    </div>

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

                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead class="text-white">
                                        <tr>
                                            <th>Market</th>
                                            <th>Symbol</th>
                                            <th>Type</th>
                                            <th>Amount</th>
                                            <th>Entry Price</th>
                                            <th>Current Price</th>
                                            <th>P&L</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-white">
                                        @forelse($trades as $trade)
                                            <tr>
                                                <td>
                                                    {!! $trade->market_badge !!}
                                                </td>
                                                <td>
                                                    <strong>{{ $trade->symbol }}</strong>
                                                </td>
                                                <td>
                                                    {!! $trade->type_badge !!}
                                                </td>
                                                <td>${{ number_format($trade->amount, 2) }}</td>
                                                <td>
                                                    @if($trade->entry_price)
                                                        ${{ number_format($trade->entry_price, 2) }}
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($trade->price)
                                                        ${{ number_format($trade->price, 2) }}
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
                                                <td>
                                                    {!! $trade->status_badge !!}
                                                </td>
                                                <td>
                                                    {{ $trade->created_at->format('M d, Y H:i') }}
                                                </td>
                                                                                    <td>
                                        <div class="btn-group" role="group">
                                            @if($trade->canBeCancelled()) {{-- Pending --}}
                                                <form action="{{ route('user.trade.cancel', $trade->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to cancel this trade?')">
                                                        Cancel
                                                    </button>
                                                </form>
                                            @elseif($trade->canBeClosed()) {{-- Active --}}
                                                <form action="{{ route('user.trade.close', $trade->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button type="submit" class="btn btn-sm btn-success" onclick="return confirm('Are you sure you want to close this trade?')">
                                                        Close
                                                    </button>
                                                </form>
                                            @endif
                                            
                                            <a href="{{ route('user.trade.show', $trade->id) }}" class="btn btn-sm btn-info">
                                                View
                                            </a>
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
                                                        <a href="{{ route('user.trade.create') }}" class="btn btn-primary">
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
    </div>

@endsection 