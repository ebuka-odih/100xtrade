<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{

    public function index()
    {
        $data = Package::all();
        return view('admin.package.index', compact('data'));
    }

    public function store(Request $request)
    {
        // 1. Validate incoming data
        $data = $request->validate([
            'name'       => 'required|string|max:255',
            'min_amount' => 'required|numeric|min:0',
            'term'       => 'nullable|numeric',
            'pnl'        => 'nullable|numeric',
        ]);

        // 2. Create the model
        $resource = Package::create($data);

        // 3. Redirect or return JSON
        return redirect()
            ->back()
            ->with('success', 'Resource created successfully.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Package $yourModel)
    {
        // 1. Validate incoming data
        $data = $request->validate([
            'name'       => 'required|string|max:255',
            'min_amount' => 'required|numeric|min:0',
            'term'       => 'nullable|numeric',
            'pnl'        => 'nullable|numeric',
        ]);

        // 2. Update the model
        $yourModel->update($data);

        // 3. Redirect or return JSON
        return redirect()
            ->route('package.index', $yourModel)
            ->with('success', 'Resource updated successfully.');
    }

    public function destroy($id)
    {
        $data = Package::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'package deleted successfully.');
    }
}
