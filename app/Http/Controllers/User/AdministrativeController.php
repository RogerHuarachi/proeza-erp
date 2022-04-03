<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Year;
use App\Models\Month;
use Illuminate\Support\Facades\Auth;
use App\Models\Spending;
use App\Models\Administrative;

class AdministrativeController extends Controller
{
    public function index()
    {
        //
    }

    public function create(Month $month)
    {
        return view('users.administratives.create', compact('month'));
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $role = $user->roles->first();
        $request["comision"]=$request->money*0.04;
        $request["agency_id"]=$user->agency->id;
        Administrative::create($request->all());

        return back()->with('confirmation','Departamento Registrado Correctamente');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function year()
    {
        $years = Year::get();
        return view('users.administratives.filter.year', compact('years'));
    }

    public function month(Year $year)
    {
        $months = $year->months;
        return view('users.administratives.filter.month', compact('months'));
    }

    public function administrative(Month $month)
    {
        $agency = Auth::user()->agency;
        $administratives = $month->administratives->where('agency_id', '=', $agency->id);
        $totalMoney = $administratives->sum('money');
        $totalComision = $administratives->sum('comision');
        return view('users.administratives.filter.spending', compact('administratives', 'totalMoney', 'totalComision', 'month'));
    }
}
