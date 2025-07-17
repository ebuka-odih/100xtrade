@extends('dashboard.layout.app')
@section('content')

<style>

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

/* Search input styling */
.input-group-text {
    background-color: #2d3748 !important;
    border-color: #4a5568 !important;
    color: #e2e8f0 !important;
}

.form-control {
    background-color: #1e2634 !important;
    border-color: #4a5568 !important;
    color: #e2e8f0 !important;
}

.form-control:focus {
    background-color: #1e2634 !important;
    border-color: #63b3ed !important;
    color: #e2e8f0 !important;
    box-shadow: 0 0 0 0.2rem rgba(99, 179, 237, 0.25) !important;
}

.form-control::placeholder {
    color: #a0aec0 !important;
}

.btn-outline-secondary {
    color: #a0aec0;
    border-color: #4a5568;
}

.btn-outline-secondary:hover {
    color: #e2e8f0;
    background-color: #4a5568;
    border-color: #4a5568;
}

/* Highlight search results */
.highlight {
    background-color: rgba(99, 179, 237, 0.2);
    padding: 2px 4px;
    border-radius: 3px;
}
</style>

<div style="margin-top: 100px;" class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Trade Markets</h4>
                </div>
                <div class="card-body">
                    <!-- Search Input -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-text bg-dark border-secondary">
                                    <i class="fas fa-search text-light"></i>
                                </span>
                                <input type="text" class="form-control bg-dark border-secondary text-light" 
                                       id="searchInput" 
                                       placeholder="Search stocks, crypto, or forex by symbol or name..."
                                       style="color: #e2e8f0 !important;">
                                <button class="btn btn-outline-secondary" type="button" id="clearSearch">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6 text-end">
                            <span class="text-muted" id="searchResults">
                                Showing all items
                            </span>
                        </div>
                    </div>

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
                                            <th>Price</th>
                                            <th>24h Change</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($stocks as $stock)
                                            <tr data-symbol="{{ strtolower($stock->symbol) }}" data-name="{{ strtolower($stock->name ?? $stock->symbol) }}" data-market="stock">
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
                                                <td>{{ $stock->name ?? $stock->symbol }}</td>
                                                <td>
                                                    @if(isset($stock->current_price))
                                                        <strong>${{ number_format($stock->current_price, 2) }}</strong>
                                                    @else
                                                        <span class="text-muted">-</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if(isset($stock->change_24h))
                                                        <span class="{{ $stock->change_24h >= 0 ? 'text-success' : 'text-danger' }}">
                                                            {{ $stock->change_24h >= 0 ? '+' : '' }}{{ number_format($stock->change_24h, 2) }}%
                                                        </span>
                                                    @else
                                                        <span class="text-muted">-</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('user.trade.show', $stock->symbol) }}" class="btn btn-sm btn-outline-primary">
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
                                            <tr data-symbol="{{ strtolower($crypto->symbol) }}" data-name="{{ strtolower($crypto->name) }}" data-market="crypto">
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
                                            <tr data-symbol="{{ strtolower($forex->symbol) }}" data-name="{{ strtolower($forex->name) }}" data-market="forex">
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

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const clearSearchBtn = document.getElementById('clearSearch');
    const searchResults = document.getElementById('searchResults');
    const allRows = document.querySelectorAll('tbody tr[data-symbol]');
    
    // Store original counts
    const originalCounts = {
        stock: document.querySelectorAll('tr[data-market="stock"]').length,
        crypto: document.querySelectorAll('tr[data-market="crypto"]').length,
        forex: document.querySelectorAll('tr[data-market="forex"]').length
    };
    
    function updateSearchResults() {
        const query = searchInput.value.toLowerCase().trim();
        let visibleCount = 0;
        let totalCount = allRows.length;
        
        allRows.forEach(row => {
            const symbol = row.getAttribute('data-symbol');
            const name = row.getAttribute('data-name');
            const market = row.getAttribute('data-market');
            
            if (query === '' || symbol.includes(query) || name.includes(query)) {
                row.style.display = '';
                visibleCount++;
                
                // Highlight search terms if query exists
                if (query !== '') {
                    highlightSearchTerms(row, query);
                } else {
                    removeHighlights(row);
                }
            } else {
                row.style.display = 'none';
                removeHighlights(row);
            }
        });
        
        // Update search results text
        if (query === '') {
            searchResults.textContent = 'Showing all items';
        } else {
            searchResults.textContent = `Showing ${visibleCount} of ${totalCount} items`;
        }
        
        // Update tab counts
        updateTabCounts();
    }
    
    function highlightSearchTerms(row, query) {
        const symbolCell = row.querySelector('td:first-child strong');
        const nameCell = row.querySelector('td:nth-child(2)');
        
        if (symbolCell) {
            const symbolText = symbolCell.textContent;
            const highlightedSymbol = symbolText.replace(new RegExp(query, 'gi'), match => `<span class="highlight">${match}</span>`);
            symbolCell.innerHTML = highlightedSymbol;
        }
        
        if (nameCell) {
            const nameText = nameCell.textContent;
            const highlightedName = nameText.replace(new RegExp(query, 'gi'), match => `<span class="highlight">${match}</span>`);
            nameCell.innerHTML = highlightedName;
        }
    }
    
    function removeHighlights(row) {
        const symbolCell = row.querySelector('td:first-child strong');
        const nameCell = row.querySelector('td:nth-child(2)');
        
        if (symbolCell) {
            symbolCell.innerHTML = symbolCell.textContent;
        }
        
        if (nameCell) {
            nameCell.innerHTML = nameCell.textContent;
        }
    }
    
    function updateTabCounts() {
        const query = searchInput.value.toLowerCase().trim();
        
        ['stock', 'crypto', 'forex'].forEach(market => {
            const tab = document.querySelector(`#${market}-tab`);
            const rows = document.querySelectorAll(`tr[data-market="${market}"]`);
            let visibleCount = 0;
            
            rows.forEach(row => {
                if (row.style.display !== 'none') {
                    visibleCount++;
                }
            });
            
            // Update tab text
            const icon = market === 'stock' ? 'fas fa-chart-line' : 
                        market === 'crypto' ? 'fas fa-bitcoin' : 'fas fa-dollar-sign';
            const marketName = market === 'stock' ? 'Stocks' : 
                              market === 'crypto' ? 'Crypto' : 'Forex';
            
            tab.innerHTML = `<i class="${icon} me-2"></i>${marketName} (${visibleCount})`;
        });
    }
    
    // Search input event listener
    searchInput.addEventListener('input', function() {
        updateSearchResults();
    });
    
    // Clear search button
    clearSearchBtn.addEventListener('click', function() {
        searchInput.value = '';
        updateSearchResults();
        searchInput.focus();
    });
    
    // Keyboard shortcuts
    searchInput.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            searchInput.value = '';
            updateSearchResults();
        }
    });
    
    // Initialize
    updateTabCounts();
});
</script>

@endsection 