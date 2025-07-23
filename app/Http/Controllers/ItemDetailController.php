<?php

namespace App\Http\Controllers;

use App\Models\ItemDetail;
use Illuminate\Http\Request;

class ItemDetailController extends Controller
{
    public function index()
    {
        $item_details = ItemDetail::all();
        return view('item_details.index', compact('item_details'));
    }

    public function create()
    {
        return view('item_details.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        ItemDetail::create($request->all());
        return redirect()->route('item-details.index')->with('success', 'Item Detail berhasil ditambahkan.');
    }

    public function show(ItemDetail $item_detail)
    {
        return view('item_details.show', compact('item_detail'));
    }

    public function edit(ItemDetail $item_detail)
    {
        return view('item_details.edit', compact('item_detail'));
    }

    public function update(Request $request, ItemDetail $item_detail)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $item_detail->update($request->all());
        return redirect()->route('item-details.index')->with('success', 'Item Detail berhasil diupdate.');
    }

    public function destroy(ItemDetail $item_detail)
    {
        $item_detail->delete();
        return redirect()->route('item-details.index')->with('success', 'Item Detail berhasil dihapus.');
    }
} 