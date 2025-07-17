<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\FundingMail;
use App\Models\BuyStock;
use App\Models\SellStock;
use App\Models\Stock;
use App\Models\StockOrder;
use App\Models\StockHolding;
use App\Models\User;
use App\Services\StockService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class StockController extends Controller
{
    protected $stockService;

    public function __construct(StockService $stockService)
    {
        $this->stockService = $stockService;
    }

    public function index()
    {
        $stocks = Stock::all();
        return view('admin.stock.index', compact('stocks'));
    }

    public function deleteStock($id)
    {
        $data = Stock::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'Stock has been deleted');
    }

    public function tradeHistory()
    {
        try {
            // Fetch buy orders (type = 1) with relationships
            $buyOrders = StockOrder::with(['user', 'stock'])
                ->where('type', 1) // Buy orders
                ->latest()
                ->get();

            // Fetch sell orders (type = 2) with relationships
            $sellOrders = StockOrder::with(['user', 'stock'])
                ->where('type', 2) // Sell orders
                ->latest()
                ->get();

            // Fetch latest stock prices for PnL calculations
            $symbols = $buyOrders->pluck('stock.symbol')
                ->merge($sellOrders->pluck('stock.symbol'))
                ->unique()
                ->filter()
                ->toArray();

            $latestStockData = [];
            if (!empty($symbols)) {
                $latestStockData = $this->stockService->fetchStockData($symbols);
            }
            $stockPrices = collect($latestStockData)->pluck('price', 'symbol');

            // Calculate PnL for buy orders
            $buyOrders->each(function ($order) use ($stockPrices) {
                if ($order->stock && isset($stockPrices[$order->stock->symbol])) {
                    $currentPrice = $stockPrices[$order->stock->symbol];
                    if ($currentPrice && $order->price) {
                        $order->current_price = $currentPrice;
                        $order->pnl = (($currentPrice - $order->price) / $order->price) * 100;
                    } else {
                        $order->current_price = null;
                        $order->pnl = null;
                    }
                } else {
                    $order->current_price = null;
                    $order->pnl = null;
                }
            });

            // Calculate PnL for sell orders
            $sellOrders->each(function ($order) use ($stockPrices) {
                if ($order->stock && isset($stockPrices[$order->stock->symbol])) {
                    $currentPrice = $stockPrices[$order->stock->symbol];
                    if ($currentPrice && $order->price) {
                        $order->current_price = $currentPrice;
                        $order->pnl = (($order->price - $currentPrice) / $currentPrice) * 100;
                    } else {
                        $order->current_price = null;
                        $order->pnl = null;
                    }
                } else {
                    $order->current_price = null;
                    $order->pnl = null;
                }
            });

            return view('admin.stock.tradeHistory', compact('buyOrders', 'sellOrders'));
        } catch (\Exception $e) {
            \Log::error('Admin stock history error: ' . $e->getMessage());
            return back()->withErrors(['error' => 'Failed to load stock history. Please try again.']);
        }
    }

    public function addStockProfit(Request $request, $id)
    {
        $data = StockOrder::findOrFail($id);
        $data->pnl = $request->amount;
        $data->save();
        $user = User::find($data->user_id);
        $user->profit += $request->amount;
        $user->balance += $request->amount;
        $user->save();
        Mail::to($user)->send(new FundingMail($user, $request->amount));
        return redirect()->back()->with('success', 'Profit Added Successfully');
    }

    public function deleteTrade($id)
    {
        $data = StockOrder::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'Stock order has been deleted');
    }
}
