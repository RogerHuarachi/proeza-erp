<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::get();
        return view('admin.items.index', compact('items'));
    }

    public function create()
    {
        $categories = Category::get();
        return view('admin.items.create', compact('categories'));
    }

    public function store(Request $request)
    {
        Item::create($request->all());

        return back()->with('confirmation','Artículo Registrado Correctamente');
    }

    public function show(Item $item)
    {
        return view('admin.items.show', compact('item'));
    }

    public function edit(Item $item)
    {
        $categories = Category::get();
        return view('admin.items.edit', compact('item', 'categories'));
    }

    public function update(Request $request, Item $item)
    {
        $item->update($request->all());

        return back()->with('confirmation','Artículo Actualizado Correctamente');
    }

    public function destroy(Item $item)
    {
        $item->delete();
        return back()->with('mensaje', 'Artículo Eliminado');
    }
}
