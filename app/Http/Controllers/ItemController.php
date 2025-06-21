<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    // Tampilkan daftar semua barang
    public function index()
    {
        $items = Item::all();
        return view('items.index', compact('items'));
    }

    // Form tambah barang
    public function create()
    {
        return view('items.create');
    }

    // Simpan barang baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:items',
            'quantity' => 'required|integer|min:1',
            'notes' => 'nullable|string',
        ]);

        Item::create($validated);
        return redirect()->route('items.index')->with('success', 'Barang berhasil ditambahkan!');
    }

    // Form edit barang
    public function edit($id)
    {
        $item = Item::findOrFail($id);
        return view('items.edit', compact('item'));
    }

    // Update barang
    public function update(Request $request, $id)
    {
        $item = Item::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'required|unique:items,name,' . $item->id,
            'quantity' => 'required|integer|min:1',
            'notes' => 'nullable|string',
        ]);

        $item->update($validated);
        return redirect()->route('items.index')->with('success', 'Barang berhasil diupdate!');
    }

    // Hapus barang
    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();
        return redirect()->route('items.index')->with('success', 'Barang berhasil dihapus!');
    }
}
