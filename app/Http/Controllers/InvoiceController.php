<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoices = Invoice::all();
        return view('invoices.index', compact('invoices'));
    }

    public function create()
    {
        return view('invoices.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'invoice_number' => 'required|string',
            'details' => 'required|string',
            'amount' => 'required|numeric',
            'status' => 'required|string',
        ]);

        Invoice::create($request->all());
        return redirect()->route('invoices.index');
    }

    public function show($id)
    {
        $invoice = Invoice::findOrFail($id);
        return view('invoices.show', compact('invoice'));
    }

    public function edit($id)
    {
        $invoice = Invoice::findOrFail($id);
        return view('invoices.edit', compact('invoice'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'invoice_number' => 'required|string',
            'details' => 'required|string',
            'amount' => 'required|numeric',
            'status' => 'required|string',
        ]);

        $invoice = Invoice::findOrFail($id);
        $invoice->update($request->all());
        return redirect()->route('invoices.show', $invoice->id);
    }

    public function destroy($id)
    {
        $invoice = Invoice::findOrFail($id);
        $invoice->delete();
        return redirect()->route('invoices.index');
    }
}
