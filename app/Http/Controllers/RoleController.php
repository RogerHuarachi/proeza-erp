<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::get();
        return view('admin.roles.index', compact('roles'));
    }

    public function create()
    {
        $permissions = Permission::get();
        return view('admin.roles.create', compact('permissions'));
    }

    public function store(Request $request)
    {
        $role = Role::create(['name' => $request->name, 'slug' => $request->slug]);
        $permissions = $request->permissions;
        $role->givePermissionTo($permissions);

        return back()->with('confirmation','Rol Registrado Correctamente');
    }
    
    public function show($id)
    {
        $role = Role::find($id);
        return view('admin.roles.show', compact('role'));
    }
    
    public function edit($id)
    {
        $role = Role::find($id);
        $permissions = Permission::get();
        return view('admin.roles.edit', compact('role', 'permissions'));
    }
    
    public function update(Request $request, $id)
    {
        $role = Role::where('id','=', $id)->firstOrFail();
        
        $role->name = $request->name;
        $role->slug = $request->slug;
        $role->save();
        $permissions = $request->permissions;
        $role->syncPermissions($permissions);

        return back()->with('confirmation','Rol Actualizado Correctamente');
    }
    
    public function destroy($id)
    {
        $role = Role::find($id);
        $role->delete();
        return back()->with('mensaje', 'Rol Eliminado');
    }
}
