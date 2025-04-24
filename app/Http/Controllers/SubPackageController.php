<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\SubPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubPackageController extends Controller
{
    //
    public function index()
    {
        $subPackage = SubPackage::all();
        $data = Package::all();
        return view('dashboard.subpackage.index', compact('subPackage', 'data'));
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        if ($request->amount > $user->balance)
        {
            return redirect()->with('error', 'insufficient balance');
        }
        $sub = new SubPackage();
        $sub->amount = $request->amount;
        $sub->status = 1;
        $sub->package_id = $request->plan_id;
        $sub->user_id = $user->id;
        $sub->save();
        return redirect()->back()->with('success', 'Subscribed successfully, awaiting approval...');
    }

    public function history()
    {
        $data = SubPackage::where('user_id', auth()->id())->latest()->get();
        return view('dashboard.subpackage.history', compact('data'));
    }
}
