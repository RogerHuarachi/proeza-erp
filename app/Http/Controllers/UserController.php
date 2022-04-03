<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get();
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        $roles = Role::get();
        $agencies = Agency::get();
        return view('admin.users.create', compact('roles', 'agencies'));
    }

    public function store(Request $request)
    {
        $user = User::where('email','=', $request->email)->exists();
        if (!$user) {
            if ($request->password == $request->password_confirmation) {
                $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                    'agency_id' => $request->agency_id
                ]);
                $role = $request->role;
                $user->assignRole($role);
                return back()->with('confirmation','Usuario Registrado Correctamente');
            } else {
                return back()->with('validation','Contraseña diferente Correctamente');
            }
        } else {
            return back()->with('validation','Usuario ya Registrado');
        }
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('admin.users.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::get();
        $agencies = Agency::get();
        return view('admin.users.edit', compact('user', 'roles', 'agencies'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $role = $request->role;
        $user->syncRoles($role);

        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = bcrypt($request->password);
        }
        $user->agency_id = $request->agency_id;
        $user->save();

        return back()->with('confirmation','Usuario Actualizado Correctamente');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('mensaje', 'Usuario Eliminado');
    }

    public function state(User $user)
    {
        if ($user->active()) {
            $remplace = str_replace("gmail", "null", $user->email);

            $user->state = false;
            $user->email = $remplace;
            $user->save();
            return back()->with('confirmation','Usuario Desabilitado Correctamente');
        } else {
            $remplace = str_replace("null", "gmail", $user->email);

            $user->state = true;
            $user->email = $remplace;
            $user->save();
            return back()->with('confirmation','Usuario Habilitado Correctamente');
        }
    }


    public function updateProfile(Request $request, $id)
    {
        $user = User::where('id','=', $id)->firstOrFail();
        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $user->save();

        return back()->with('confirmation','Usuario Actualizado Correctamente');
    }
}
