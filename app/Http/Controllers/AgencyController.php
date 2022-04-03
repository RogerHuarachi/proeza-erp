<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use App\Models\City;
use Illuminate\Http\Request;

class AgencyController extends Controller
{
    public function index()
    {
        $agencies = Agency::get();
        return view('admin.agencies.index', compact('agencies'));
    }

    public function create()
    {
        $cities = City::get();
        return view('admin.agencies.create', compact('cities'));
    }

    public function store(Request $request)
    {
        Agency::create($request->all());

        return back()->with('confirmation','Agencia Registrado Correctamente');
    }

    public function show(Agency $agency)
    {
        return view('admin.agencies.show', compact('agency'));
    }

    public function edit(Agency $agency)
    {
        $cities = City::get();
        return view('admin.agencies.edit', compact('agency', 'cities'));
    }

    public function update(Request $request, Agency $agency)
    {
        $agency->update($request->all());

        return back()->with('confirmation','Agencia Actualizado Correctamente');
    }

    public function destroy(Agency $agency)
    {
        $agency->delete();
        return back()->with('mensaje', 'Agencia Eliminado');
    }
}
