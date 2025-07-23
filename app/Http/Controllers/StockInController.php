<?php

namespace App\Http\Controllers;

use App\Models\StockIn;
use Illuminate\Http\Request;

class StockInController extends Controller
{
    public function index()
    {
        $stock_in = StockIn::all();
        return view('stock_in.index', compact('stock_in'));
    }

    public function create()
    {
        return view('stock_in.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'item_id' => 'required|integer',
            'quantity' => 'required|integer',
        ]);
        StockIn::create($request->all());
        return redirect()->route('stock-in.index')->with('success', 'Stock In berhasil ditambahkan.');
    }

    public function show(StockIn $in)
    {
        return view('stock_in.show', compact('in'));
    }

    public function edit(StockIn $in)
    {
        return view('stock_in.edit', compact('in'));
    }

    public function update(Request $request, StockIn $in)
    {
        $request->validate([
            'item_id' => 'required|integer',
            'quantity' => 'required|integer',
        ]);
        $in->update($request->all());
        return redirect()->route('stock-in.index')->with('success', 'Stock In berhasil diupdate.');
    }

    public function destroy(StockIn $in)
    {
        $in->delete();
        return redirect()->route('stock-in.index')->with('success', 'Stock In berhasil dihapus.');
    }
} 