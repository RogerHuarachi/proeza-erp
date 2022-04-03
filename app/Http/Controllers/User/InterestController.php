<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Agency;
use App\Models\Interest;
use App\Models\Month;
use App\Models\Year;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InterestController extends Controller
{
    public function index()
    {
        //
    }
    public function create(Month $month)
    {
        $agencies = Agency::get();
        return view('users.interests.create', compact('month', 'agencies'));
    }
    public function store(Request $request)
    {
        $valid = Interest::where('month_id','=', $request->month_id)->where('agency_id','=', $request->agency_id)->doesntExist();
        if ($valid) {
            Interest::create($request->all());
            return back()->with('confirmation','Departamento Registrado Correctamente');
        } else {
            return back()->with('validation','Departamento Ya Registrado Anteriormente');
        }
    }
    public function show($id)
    {
        //
    }

    public function edit(Interest $interest)
    {
        $month = $interest->month;
        return view('users.interests.edit', compact('interest','month' ));
    }

    public function update(Request $request, Interest $interest)
    {
        $interest->update($request->all());

        return back()->with('confirmation','Departamento Actualizado Correctamente');
    }

    public function destroy(Interest $interest)
    {
        $interest->delete();
        return back()->with('mensaje', 'Departamento Eliminado');
    }




    public function sum(Request $request, Interest $interest)
    {
        $moneynew = $interest->money + $request->money;
        $interest->money = $moneynew;

        $interest->save();
        return back()->with('confirmation','Interes Actualizado Correctamente');
        // return $moneynew;
    }





    public function year()
    {
        $years = Year::get();
        return view('users.interests.filter.year', compact('years'));
    }

    public function month(Year $year)
    {
        $months = $year->months;
        return view('users.interests.filter.month', compact('months'));
    }

    public function interest(Month $month)
    {
        $interests = $month->interests;
        $total = $interests->sum('money');
        return view('users.interests.filter.interest', compact('interests', 'month', 'total'));
    }
}
