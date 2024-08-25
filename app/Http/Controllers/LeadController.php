<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function index()
    {
        $leads = Lead::all();
        return view('leads.index', compact('leads'));
    }

    public function create()
    {
        return view('leads.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'lead_number' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'details' => 'required|string',
            'status' => 'required|string',
        ]);

        Lead::create($request->all());
        return redirect()->route('leads.index')->with('success', 'Lead created successfully.');
    }

    public function show($id)
    {
        $lead = Lead::findOrFail($id);
        return view('leads.show', compact('lead'));
    }

    public function edit($id)
    {
        $lead = Lead::findOrFail($id);
        return view('leads.edit', compact('lead'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'lead_number' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'details' => 'required|string',
            'status' => 'required|string',
        ]);

        $lead = Lead::findOrFail($id);
        $lead->update($request->all());
        return redirect()->route('leads.show', $lead->id)->with('success', 'Lead updated successfully.');
    }

    public function destroy($id)
    {
        $lead = Lead::findOrFail($id);
        $lead->delete();
        return redirect()->route('leads.index')->with('success', 'Lead deleted successfully.');
    }
}
