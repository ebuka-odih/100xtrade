# Trade Module Implementation

## Overview

The Trade Module is a comprehensive trading system that allows users to place trades across multiple markets including stocks, cryptocurrencies, and forex. The module includes a complete trading interface with real-time charts, order management, and portfolio tracking.

## Features

### Core Functionality
- **Multi-Market Trading**: Support for stocks, cryptocurrencies, and forex
- **Order Types**: Market, Limit, and Stop orders
- **Risk Management**: Stop Loss and Take Profit orders
- **Real-time Charts**: TradingView integration for live price charts
- **Portfolio Management**: Track all trades and P&L
- **Order Management**: Cancel pending orders and close active positions

### Markets Supported
1. **Stocks**: All S&P 100 stocks (AAPL, MSFT, GOOGL, etc.)
2. **Cryptocurrencies**: Major crypto pairs (BTC, ETH, BNB, etc.)
3. **Forex**: Major currency pairs (EUR/USD, GBP/USD, etc.)

## Database Structure

### Trades Table
```sql
CREATE TABLE trades (
    id UUID PRIMARY KEY,
    user_id UUID REFERENCES users(id),
    market ENUM('stock', 'crypto', 'forex'),
    symbol VARCHAR(10),
    type ENUM('buy', 'sell'),
    amount DECIMAL(15,2),
    price DECIMAL(15,2),
    stop_loss DECIMAL(15,2),
    take_profit DECIMAL(15,2),
    status ENUM(1,2,3,4), -- 1=pending, 2=active, 3=closed, 4=cancelled
    pnl DECIMAL(15,2),
    entry_price DECIMAL(15,2),
    exit_price DECIMAL(15,2),
    quantity DECIMAL(15,4),
    order_type ENUM('market', 'limit', 'stop'),
    limit_price DECIMAL(15,2),
    filled_at TIMESTAMP,
    closed_at TIMESTAMP,
    notes TEXT,
    created_at TIMESTAMP,
    updated_at TIMESTAMP
);
```

## Models

### Trade Model (`app/Models/Trade.php`)
- Handles trade relationships and business logic
- Includes status badges and P&L calculations
- Supports multiple markets and order types

### User Model Updates
- Added `trades()` relationship to User model
- Enables easy access to user's trading history

## Controllers

### TradeController (`app/Http/Controllers/TradeController.php`)
Key methods:
- `index()`: Display all user trades
- `create()`: Show trade creation form
- `store()`: Execute new trades
- `show()`: Display individual trade details
- `close()`: Close active trades
- `cancel()`: Cancel pending trades
- `getSymbols()`: AJAX endpoint for symbol lists
- `getPrice()`: AJAX endpoint for current prices

## Views

### Trade Index (`resources/views/dashboard/trade/index.blade.php`)
- Lists all user trades with status and P&L
- Actions to cancel/close trades
- Pagination support

### Trade Create (`resources/views/dashboard/trade/create.blade.php`)
- Market selection (Stock/Crypto/Forex)
- Symbol selection with dynamic loading
- TradingView chart integration
- Order form with all necessary fields

### Trade Show (`resources/views/dashboard/trade/show.blade.php`)
- Detailed trade information
- Real-time chart for the traded symbol
- Action buttons for trade management

## Routes

```php
// Trade Routes
Route::get('trade', [TradeController::class, 'index'])->name('trade.index');
Route::get('trade/create', [TradeController::class, 'create'])->name('trade.create');
Route::post('trade/store', [TradeController::class, 'store'])->name('trade.store');
Route::get('trade/{trade}', [TradeController::class, 'show'])->name('trade.show');
Route::patch('trade/{trade}/close', [TradeController::class, 'close'])->name('trade.close');
Route::delete('trade/{trade}/cancel', [TradeController::class, 'cancel'])->name('trade.cancel');
Route::get('trade/get-symbols', [TradeController::class, 'getSymbols'])->name('trade.getSymbols');
Route::get('trade/get-price', [TradeController::class, 'getPrice'])->name('trade.getPrice');
```

## Navigation

Added "Trade" menu item to the sidebar navigation:
- Icon: Chart lines
- Active state for all trade routes
- Links to trade index page

## Trading Logic

### Trade Status Flow
1. **Pending (1)**: Trade is created but not yet executed
2. **Active (2)**: Trade is executed and currently running
3. **Closed (3)**: Trade is closed with final P&L calculated
4. **Cancelled (4)**: Trade is cancelled before execution

### Order Execution
1. **Market Orders**: Execute immediately and change status to Active
2. **Limit Orders**: Stay Pending until price reaches limit, then become Active
3. **Stop Orders**: Stay Pending until price hits stop level, then become Active

### Trade Management
- **Close Trade**: Only Active trades can be closed, calculates final P&L
- **Cancel Trade**: Only Pending trades can be cancelled, refunds balance
- **Automatic Processing**: Background command processes pending orders

### Balance Management
- Buy orders deduct from user balance when executed
- Sell orders add to user balance when executed
- P&L calculations update balance on trade closure
- Cancelled trades refund the balance

### Risk Management
- Stop Loss: Automatically close position at specified loss level
- Take Profit: Automatically close position at specified profit level
- Balance validation before order placement

## API Integration

### Price Data
- Stock prices from existing StockService
- Mock prices for crypto and forex (can be replaced with real APIs)
- Real-time price updates via AJAX

### Chart Integration
- TradingView widget for live charts
- Dynamic symbol loading based on market selection
- Chart updates when symbol changes

## Testing

Basic test coverage included:
- Trade creation and validation
- Balance checks
- Route accessibility
- Database operations

## Future Enhancements

1. **Real-time Price Feeds**: Integrate with live market data APIs
2. **Advanced Order Types**: Stop-limit, trailing stop orders
3. **Portfolio Analytics**: Performance metrics and charts
4. **Risk Management**: Position sizing and exposure limits
5. **Mobile Support**: Responsive design for mobile trading
6. **Notifications**: Email/SMS alerts for trade events
7. **Social Trading**: Copy trading and leaderboards

## Installation

1. Run the migration: `php artisan migrate`
2. Ensure TradingView widget is properly configured
3. Test the trade creation flow
4. Verify balance deductions and additions

## Usage

1. Navigate to "Trade" in the sidebar
2. Click "New Trade" to create a new position
3. Select market type (Stock/Crypto/Forex)
4. Choose symbol from dropdown
5. Set order parameters (amount, stop loss, take profit)
6. Review and place trade
7. Monitor positions in the trade list
8. Close or cancel trades as needed

## Security

- User authentication required for all trade operations
- Balance validation prevents overspending
- Trade ownership verification
- Input validation and sanitization
- CSRF protection on all forms

## Performance

- Database indexing on frequently queried fields
- Pagination for large trade lists
- Caching for symbol lists and prices
- Optimized queries with eager loading 