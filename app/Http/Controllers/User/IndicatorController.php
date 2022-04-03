<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Indicator;
use App\Models\Agency;
use App\Models\Month;
use App\Models\Year;
use Illuminate\Http\Request;

class IndicatorController extends Controller
{
    public function index()
    {
        //
    }

    public function create(Month $month)
    {
        $agencies = Agency::get();
        return view('users.indicators.create', compact('month', 'agencies'));
    }

    public function store(Request $request)
    {
        $valid = Indicator::where('month_id','=', $request->month_id)->where('agency_id','=', $request->agency_id)->doesntExist();
        if ($valid) {
            Indicator::create($request->all());
            return back()->with('confirmation','Indicador Registrado Correctamente');
        } else {
            return back()->with('validation','Indicador Ya Registrado Anteriormente');
        }
    }

    public function show(Indicator $indicator)
    {
        //
    }

    public function edit(Indicator $indicator)
    {
        $month = $indicator->month;
        return view('users.indicators.edit', compact('indicator','month' ));
    }

    public function update(Request $request, Indicator $indicator)
    {
        $indicator->update($request->all());

        return back()->with('confirmation','Indicador Actualizado Correctamente');
    }

    public function destroy(Indicator $indicator)
    {
        //
    }

    public function year()
    {
        $years = Year::get();
        return view('users.indicators.filter.year', compact('years'));
    }

    public function month(Year $year)
    {
        $months = $year->months;
        return view('users.indicators.filter.month', compact('months'));
    }

    public function indicator(Month $month)
    {
        $indicators = $month->indicators;
        $total = $indicators->sum('money');
        return view('users.indicators.filter.indicator', compact('indicators', 'month', 'total'));
    }
}
