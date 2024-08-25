<?php

namespace App\Http\Controllers;

use App\Models\Estimate;
use Illuminate\Http\Request;

class EstimateController extends Controller
{
    public function index()
    {
        $estimates = Estimate::all();
        return view('estimates.index', compact('estimates'));
    }

    public function create()
    {
        return view('estimates.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'estimate_number' => 'required|string|max:255',
            'details' => 'required|string',
            'estimated_amount' => 'required|numeric',
        ]);

        Estimate::create($request->all());
        return redirect()->route('estimates.index')->with('success', 'Estimate created successfully.');
    }

    public function show($id)
    {
        $estimate = Estimate::findOrFail($id);
        return view('estimates.show', compact('estimate'));
    }

    public function edit($id)
    {
        $estimate = Estimate::findOrFail($id);
        return view('estimates.edit', compact('estimate'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'estimate_number' => 'required|string|max:255',
            'details' => 'required|string',
            'estimated_amount' => 'required|numeric',
        ]);

        $estimate = Estimate::findOrFail($id);
        $estimate->update($request->all());
        return redirect()->route('estimates.show', $estimate->id)->with('success', 'Estimate updated successfully.');
    }

    public function destroy($id)
    {
        $estimate = Estimate::findOrFail($id);
        $estimate->delete();
        return redirect()->route('estimates.index')->with('success', 'Estimate deleted successfully.');
    }
}
