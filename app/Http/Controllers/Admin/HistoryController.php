<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CopiedTrade;
use App\Models\User;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function copiedTrades()
    {
        $data = CopiedTrade::all();
        return view('admin.history.copiedTrades', compact('data'));
    }

    public function fundCopiedTrade(Request $request, $id)
    {
        $data = CopiedTrade::find($id);
        $data->profit = $request->amount;
        $data->save();
        $user = User::find($data->user_id);
        $user->balance += $data->amount;
        $user->save();
        return redirect()->back()->with('success', 'Copied trade successfully');
    }

    public function closeCopiedTrade($id)
    {
        $data = CopiedTrade::find($id);
        $data->status = 2;
        $data->save();
        return redirect()->back()->with('success', 'close trade successfully');
    }
}
