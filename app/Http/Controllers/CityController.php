<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::get();
        return view('admin.cities.index', compact('cities'));
    }

    public function create()
    {
        return view('admin.cities.create');
    }

    public function store(Request $request)
    {
        City::create($request->all());

        return back()->with('confirmation','Departamento Registrado Correctamente');
    }

    public function show(City $city)
    {
        return view('admin.cities.show', compact('city'));
    }

    public function edit(City $city)
    {
        return view('admin.cities.edit', compact('city'));
    }

    public function update(Request $request, City $city)
    {
        $city->update($request->all());

        return back()->with('confirmation','Departamento Actualizado Correctamente');
    }

    public function destroy(City $city)
    {
        $city->delete();
        return back()->with('mensaje', 'Departamento Eliminado');
    }
}
