<?php

namespace App\Http\Controllers;

use App\Models\CopiedTrade;
use App\Models\CopyTrader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CopyTradeController extends Controller
{
   public function index()
    {
        $traders = CopyTrader::latest()->get();
        $copiedTrades = CopiedTrade::where('user_id', auth()->id())->get();
        return view('dashboard.copy-trade.index', compact('traders', 'copiedTrades'));
    }

    public function store(Request $request)
    {
        $traderId = $request->input('trader_id');
        $data = CopyTrader::find($traderId);
        if($request->amount > auth()->user()->balance)
        {
            return redirect()->back()->with('error', 'Insufficient Balance, Kindly fund your wallet');
        }
        if($request->amount < $data->min_amount)
        {
            return redirect()->back()->with('error', 'Entered amount is below minimum');
        }
        $data = new CopiedTrade();
        $data->copy_trader_id = $traderId;
        $data->user_id = Auth::id();
        $data->amount = $request->input('amount');
        $data->status = 1;
        $data->save();
        return redirect()->back()->with('success', 'Copied Trade Successful');
    }

    public function history()
    {
        $data = CopiedTrade::where('user_id', auth()->id())->get();
        return view('dashboard.copy-trade.history', compact('data'));
    }

}
