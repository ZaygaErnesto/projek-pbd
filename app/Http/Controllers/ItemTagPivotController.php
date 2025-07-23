<?php

namespace App\Http\Controllers;

use App\Models\ItemTagPivot;
use Illuminate\Http\Request;

class ItemTagPivotController extends Controller
{
    public function index()
    {
        $item_tag_pivot = ItemTagPivot::all();
        return view('item_tag_pivot.index', compact('item_tag_pivot'));
    }

    public function create()
    {
        return view('item_tag_pivot.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'item_id' => 'required|integer',
            'item_tag_id' => 'required|integer',
        ]);
        ItemTagPivot::create($request->all());
        return redirect()->route('item-tag-pivot.index')->with('success', 'Item Tag Pivot berhasil ditambahkan.');
    }

    public function show(ItemTagPivot $pivot)
    {
        return view('item_tag_pivot.show', compact('pivot'));
    }

    public function edit(ItemTagPivot $pivot)
    {
        return view('item_tag_pivot.edit', compact('pivot'));
    }

    public function update(Request $request, ItemTagPivot $pivot)
    {
        $request->validate([
            'item_id' => 'required|integer',
            'item_tag_id' => 'required|integer',
        ]);
        $pivot->update($request->all());
        return redirect()->route('item-tag-pivot.index')->with('success', 'Item Tag Pivot berhasil diupdate.');
    }

    public function destroy(ItemTagPivot $pivot)
    {
        $pivot->delete();
        return redirect()->route('item-tag-pivot.index')->with('success', 'Item Tag Pivot berhasil dihapus.');
    }
} 