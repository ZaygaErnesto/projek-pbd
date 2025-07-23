<?php

namespace App\Http\Controllers;

use App\Models\ItemTag;
use Illuminate\Http\Request;

class ItemTagController extends Controller
{
    public function index()
    {
        $item_tags = ItemTag::all();
        return view('item_tags.index', compact('item_tags'));
    }

    public function create()
    {
        return view('item_tags.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        ItemTag::create($request->all());
        return redirect()->route('item-tags.index')->with('success', 'Item Tag berhasil ditambahkan.');
    }

    public function show(ItemTag $item_tag)
    {
        return view('item_tags.show', compact('item_tag'));
    }

    public function edit(ItemTag $item_tag)
    {
        return view('item_tags.edit', compact('item_tag'));
    }

    public function update(Request $request, ItemTag $item_tag)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $item_tag->update($request->all());
        return redirect()->route('item-tags.index')->with('success', 'Item Tag berhasil diupdate.');
    }

    public function destroy(ItemTag $item_tag)
    {
        $item_tag->delete();
        return redirect()->route('item-tags.index')->with('success', 'Item Tag berhasil dihapus.');
    }
} 