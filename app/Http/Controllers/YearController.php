<?php

namespace App\Http\Controllers;

use App\Models\Month;
use App\Models\Year;
use Illuminate\Http\Request;

class YearController extends Controller
{
    public function index()
    {
        $years = Year::get();
        return view('admin.years.index', compact('years'));
    }

    public function create()
    {
        return view('admin.years.create');
    }

    public function store(Request $request)
    {
        Year::create($request->all());
        return back()->with('confirmation','Gestion Registrado Correctamente');
    }

    public function show(Year $year)
    {
        return view('admin.years.show', compact('year'));
    }

    public function edit(Year $year)
    {
        return view('admin.years.edit');
    }

    public function update(Request $request, Year $year)
    {
        $year->update($request->all());
        return back()->with('confirmation','Gestion Actualizado Correctamente');
    }

    public function destroy(Year $year)
    {
        $year->delete();
        return back()->with('mensaje', 'Gestion Eliminado');
    }
}
