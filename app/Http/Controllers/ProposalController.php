<?php

namespace App\Http\Controllers;

use App\Models\Proposal;
use Illuminate\Http\Request;

class ProposalController extends Controller
{
    public function index()
    {
        $proposals = Proposal::all();
        return view('proposals.index', compact('proposals'));
    }

    public function create()
    {
        return view('proposals.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'proposal_number' => 'required|string',
            'details' => 'required|string',
            'amount' => 'required|numeric',
            'status' => 'required|string',
        ]);

        Proposal::create($request->all());
        return redirect()->route('proposals.index');
    }

    public function show($id)
    {
        $proposal = Proposal::findOrFail($id);
        return view('proposals.show', compact('proposal'));
    }

    public function edit($id)
    {
        $proposal = Proposal::findOrFail($id);
        return view('proposals.edit', compact('proposal'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'proposal_number' => 'required|string',
            'details' => 'required|string',
            'amount' => 'required|numeric',
            'status' => 'required|string',
        ]);

        $proposal = Proposal::findOrFail($id);
        $proposal->update($request->all());
        return redirect()->route('proposals.show', $proposal->id);
    }

    public function destroy($id)
    {
        $proposal = Proposal::findOrFail($id);
        $proposal->delete();
        return redirect()->route('proposals.index');
    }
}
