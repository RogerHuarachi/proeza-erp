<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        $roles = Role::get();
        return view('admin.categories.create', compact('roles'));
    }

    public function store(Request $request)
    {
        Category::create($request->all());

        return back()->with('confirmation','Categoria Registrado Correctamente');
    }

    public function show(Category $category)
    {
        return view('admin.categories.show', compact('category'));
    }

    public function edit(Category $category)
    {
        $roles = Role::get();
        return view('admin.categories.edit', compact('category', 'roles'));
    }

    public function update(Request $request, Category $category)
    {
        $category->update($request->all());

        return back()->with('confirmation','Categoria Actualizado Correctamente');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return back()->with('mensaje', 'Categoria Eliminado');
    }
}
