<?php

namespace App\Http\Controllers;

use App\Models\Indicator;
use App\Models\Agency;
use App\Models\Year;
use Illuminate\Http\Request;

class IndicatorController extends Controller
{
    public function index()
    {
        $indicators = Indicator::get();
        return view('admin.indicators.index', compact('indicators'));
    }

    public function create()
    {
        $agencies = Agency::get();
        $years = Year::get();
        return view('admin.indicators.create', compact('years', 'agencies'));
    }

    public function store(Request $request)
    {
        Indicator::create($request->all());

        return back()->with('confirmation','Indicador Registrado Correctamente');
    }

    public function show(Indicator $indicator)
    {
        return view('admin.indicators.show', compact('indicator'));
    }

    public function edit(Indicator $indicator)
    {
        $agencies = Agency::get();
        $years = Year::get();
        return view('admin.indicators.edit', compact('indicator', 'years', 'agencies'));
    }

    public function update(Request $request, Indicator $indicator)
    {
        $indicator->update($request->all());

        return back()->with('confirmation','Indicador Actualizado Correctamente');
    }

    public function destroy(Indicator $indicator)
    {
        $indicator->delete();
        return back()->with('mensaje', 'Indicador Eliminado');
    }
}
