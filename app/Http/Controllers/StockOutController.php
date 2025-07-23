<?php

namespace App\Http\Controllers;

use App\Models\StockOut;
use Illuminate\Http\Request;

class StockOutController extends Controller
{
    public function index()
    {
        $stock_out = StockOut::all();
        return view('stock_out.index', compact('stock_out'));
    }

    public function create()
    {
        return view('stock_out.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'item_id' => 'required|integer',
            'quantity' => 'required|integer',
        ]);
        StockOut::create($request->all());
        return redirect()->route('stock-out.index')->with('success', 'Stock Out berhasil ditambahkan.');
    }

    public function show(StockOut $out)
    {
        return view('stock_out.show', compact('out'));
    }

    public function edit(StockOut $out)
    {
        return view('stock_out.edit', compact('out'));
    }

    public function update(Request $request, StockOut $out)
    {
        $request->validate([
            'item_id' => 'required|integer',
            'quantity' => 'required|integer',
        ]);
        $out->update($request->all());
        return redirect()->route('stock-out.index')->with('success', 'Stock Out berhasil diupdate.');
    }

    public function destroy(StockOut $out)
    {
        $out->delete();
        return redirect()->route('stock-out.index')->with('success', 'Stock Out berhasil dihapus.');
    }
} 