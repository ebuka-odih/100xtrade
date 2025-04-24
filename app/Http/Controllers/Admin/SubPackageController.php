<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SubPackage;
use App\Models\User;
use Illuminate\Http\Request;

class SubPackageController extends Controller
{
    public function index()
    {
        $data = SubPackage::all();
        return view('admin.package.subscription', compact('data'));
    }

    public function approveSubscription($id)
    {
        $data = SubPackage::find($id);
        $data->status = 2;
        $data->save();
        return redirect()->back()->with('success', 'Subscription Approved');
    }

    public function declineSubscription($id)
    {
        $data = SubPackage::find($id);
        $data->status = 3;
        $data->save();
        return redirect()->back()->with('success', 'Subscription declined');
    }

    public function fundSubscription(Request $request, $id)
    {
        $data = SubPackage::find($id);
        $data->profit += $request->profit;
        $data->save();
        $user = User::find($data->user_id);
        $user->profit += $request['profit'];
        $user->save();
        return redirect()->back()->with('success', 'Subscription funding');
    }
}
