<?php

namespace App\Http\Controllers;

use App\Models\StockLog;
use Illuminate\Http\Request;

class StockLogController extends Controller
{
    public function index()
    {
        $stock_log = StockLog::all();
        return view('stock_log.index', compact('stock_log'));
    }

    public function create()
    {
        return view('stock_log.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'item_id' => 'required|integer',
            'quantity' => 'required|integer',
        ]);
        StockLog::create($request->all());
        return redirect()->route('stock-log.index')->with('success', 'Stock Log berhasil ditambahkan.');
    }

    public function show(StockLog $log)
    {
        return view('stock_log.show', compact('log'));
    }

    public function edit(StockLog $log)
    {
        return view('stock_log.edit', compact('log'));
    }

    public function update(Request $request, StockLog $log)
    {
        $request->validate([
            'item_id' => 'required|integer',
            'quantity' => 'required|integer',
        ]);
        $log->update($request->all());
        return redirect()->route('stock-log.index')->with('success', 'Stock Log berhasil diupdate.');
    }

    public function destroy(StockLog $log)
    {
        $log->delete();
        return redirect()->route('stock-log.index')->with('success', 'Stock Log berhasil dihapus.');
    }
} 