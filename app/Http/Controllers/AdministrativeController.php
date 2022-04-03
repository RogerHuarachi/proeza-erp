<?php

namespace App\Http\Controllers;

use App\Models\Administrative;
use App\Models\Agency;
use App\Models\Year;
use Illuminate\Http\Request;

class AdministrativeController extends Controller
{
    public function index()
    {
        $administratives = Administrative::get();
        return view('admin.administratives.index', compact('administratives'));
    }

    public function create()
    {
        $agencies = Agency::get();
        $years = Year::get();
        return view('admin.administratives.create', compact('years', 'agencies'));
    }

    public function store(Request $request)
    {
        $request["comision"]=$request->money*0.04;
        Administrative::create($request->all());

        return back()->with('confirmation','Departamento Registrado Correctamente');
    }

    public function show(Administrative $administrative)
    {
        return view('admin.administratives.show', compact('administrative'));
    }

    public function edit(Administrative $administrative)
    {
        $agencies = Agency::get();
        $years = Year::get();
        return view('admin.administratives.edit', compact('administrative', 'years', 'agencies'));
    }

    public function update(Request $request, Administrative $administrative)
    {
        $administrative->update($request->all());

        return back()->with('confirmation','Departamento Actualizado Correctamente');
    }

    public function destroy(Administrative $administrative)
    {
        $administrative->delete();
        return back()->with('mensaje', 'Departamento Eliminado');
    }
}
