@extends('dashboard.layout.app')
@section('content')

<style>
body {
    background-color: #080909 !important;
}
.container-fluid {
    margin-top: 100px;
}
.card {
    background-color: #1e2634;
    border: 1px solid #2d3748;
}
.card-header {
    background-color: #2d3748;
    border-bottom: 1px solid #4a5568;
    color: #e2e8f0;
}
.card-body {
    background-color: #1e2634;
    color: #e2e8f0;
}
.table {
    color: #e2e8f0;
}
.table thead th {
    background-color: #2d3748;
    border-bottom: 1px solid #4a5568;
    color: #e2e8f0;
}
.table tbody tr {
    border-bottom: 1px solid #4a5568;
}
.table tbody tr:hover {
    background-color: #2d3748;
}
.nav-tabs {
    border-bottom: 1px solid #4a5568;
}
.nav-tabs .nav-link {
    color: #a0aec0;
    border: 1px solid transparent;
    background-color: transparent;
}
.nav-tabs .nav-link:hover {
    color: #e2e8f0;
    border-color: #4a5568;
}
.nav-tabs .nav-link.active {
    color: #e2e8f0;
    background-color: #2d3748;
    border-color: #4a5568;
}
.btn-outline-primary {
    color: #63b3ed;
    border-color: #63b3ed;
}
.btn-outline-primary:hover {
    color: #fff;
    background-color: #63b3ed;
    border-color: #63b3ed;
}
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Trade Markets</h4>
                </div>
                <div class="card-body">
                    <!-- Market Tabs -->
                    <ul class="nav nav-tabs" id="marketTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="stocks-tab" data-bs-toggle="tab" data-bs-target="#stocks" type="button" role="tab">
                                <i class="fas fa-chart-line me-2"></i>Stocks ({{ $stocks->count() }})
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="crypto-tab" data-bs-toggle="tab" data-bs-target="#crypto" type="button" role="tab">
                                <i class="fas fa-bitcoin me-2"></i>Crypto ({{ $cryptos->count() }})
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="forex-tab" data-bs-toggle="tab" data-bs-target="#forex" type="button" role="tab">
                                <i class="fas fa-dollar-sign me-2"></i>Forex ({{ $forexes->count() }})
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content" id="marketTabsContent">
                        <!-- Stocks Tab -->
                        <div class="tab-pane fade show active" id="stocks" role="tabpanel">
                            <div class="table-responsive mt-3">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Symbol</th>
                                            <th>Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($stocks as $stock)
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ asset('img/stock/' . strtolower($stock->symbol) . '.png') }}" 
                                                             alt="{{ $stock->symbol }}" 
                                                             class="me-2" 
                                                             style="width: 30px; height: 30px; border-radius: 50%;"
                                                             onerror="this.src='{{ asset('img/stock/default.png') }}'">
                                                        <strong>{{ $stock->symbol }}</strong>
                                                    </div>
                                                </td>
                                                <td>{{ $stock->name }}</td>
                                                <td>
                                                    <a href="{{ route('user.trade.show', $stock) }}" class="btn btn-sm btn-outline-primary">
                                                        <i class="fas fa-chart-line me-1"></i>Trade
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Crypto Tab -->
                        <div class="tab-pane fade" id="crypto" role="tabpanel">
                            <div class="table-responsive mt-3">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Symbol</th>
                                            <th>Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($cryptos as $crypto)
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="bg-warning text-dark rounded-circle d-flex align-items-center justify-content-center me-2" 
                                                             style="width: 30px; height: 30px;">
                                                            <i class="fas fa-coins"></i>
                                                        </div>
                                                        <strong>{{ $crypto->symbol }}</strong>
                                                    </div>
                                                </td>
                                                <td>{{ $crypto->name }}</td>
                                                <td>
                                                    <a href="{{ route('user.trade.show', $crypto) }}" class="btn btn-sm btn-outline-primary">
                                                        <i class="fas fa-chart-line me-1"></i>Trade
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Forex Tab -->
                        <div class="tab-pane fade" id="forex" role="tabpanel">
                            <div class="table-responsive mt-3">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Symbol</th>
                                            <th>Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($forexes as $forex)
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="bg-info text-white rounded-circle d-flex align-items-center justify-content-center me-2" 
                                                             style="width: 30px; height: 30px;">
                                                            <i class="fas fa-dollar-sign"></i>
                                                        </div>
                                                        <strong>{{ $forex->symbol }}</strong>
                                                    </div>
                                                </td>
                                                <td>{{ $forex->name }}</td>
                                                <td>
                                                    <a href="{{ route('user.trade.show', $forex) }}" class="btn btn-sm btn-outline-primary">
                                                        <i class="fas fa-chart-line me-1"></i>Trade
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection 