<?php

namespace App\Http\Controllers;

use App\Models\Month;
use App\Models\Year;
use Illuminate\Http\Request;

class MonthController extends Controller
{
    public function index()
    {
        $months = Month::get();
        return view('admin.months.index', compact('months'));
    }

    public function create()
    {
        $years = Year::get();
        return view('admin.months.create', compact('years'));
    }

    public function store(Request $request)
    {
        Month::create($request->all());

        return back()->with('confirmation','Mes Registrado Correctamente');
    }

    public function show(Month $month)
    {
        return view('admin.months.show', compact('month'));
    }

    public function edit(Month $month)
    {
        $years = Year::get();
        return view('admin.months.edit', compact('month', 'years'));
    }

    public function update(Request $request, Month $month)
    {
        $month->update($request->all());

        return back()->with('confirmation','Mes Actualizado Correctamente');
    }

    public function destroy(Month $month)
    {
        $month->delete();
        return back()->with('mensaje', 'Mes Eliminado');
    }
}
