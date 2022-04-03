<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::get();
        return view('admin.permissions.index', compact('permissions'));
    }

    public function create()
    {
        return view('admin.permissions.create');
    }

    public function store(Request $request)
    {
        $permission = Permission::create(['name' => $request->name, 'slug' => $request->slug]);

        return back()->with('confirmation','Permiso Registrado Correctamente');
    }

    public function show($id)
    {
        $permission = Permission::find($id);
        return view('admin.permissions.show', compact('permission'));
    }

    public function edit($id)
    {
        $permission = Permission::find($id);
        return view('admin.permissions.edit', compact('permission'));
    }

    public function update(Request $request, $id)
    {
        $permission = Permission::find($id);
        $permission->update($request->all());
        $permission->save();

        return back()->with('confirmation','Permiso Actualizado Correctamente');
    }

    public function destroy($id)
    {
        $permission = Permission::find($id);
        $permission->delete();
        return back()->with('mensaje', 'Permiso Eliminado');
    }
}
