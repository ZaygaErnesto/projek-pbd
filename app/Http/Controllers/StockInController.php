<?php

namespace App\Http\Controllers;

use App\Models\StockIn;
use App\Models\Item;
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
            'item_id' => 'required|exists:items,id',
            'quantity' => 'required|integer|min:1',
        ]);

        // Tambah record stock_in
        StockIn::create([
            'item_id' => $request->item_id,
            'quantity' => $request->quantity,
            'date' => now()->toDateString(),
        ]);

        // Tambah stok pada tabel items
        $item = Item::find($request->item_id);
        $item->stock += $request->quantity;
        $item->save();

        return redirect()->route('stock-in.index')->with('success', 'Stock in berhasil ditambahkan dan stok barang bertambah.');
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