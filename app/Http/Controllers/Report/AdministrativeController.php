<?php

namespace App\Http\Controllers\Report;

use App\Http\Controllers\Controller;
use App\Models\Administrative;
use App\Models\Agency;
use App\Models\Month;
use App\Models\Year;
use Illuminate\Http\Request;

class AdministrativeController extends Controller
{
    public function year()
    {
        $years = Year::get();
        return view('report.administratives.filter.year', compact('years'));
    }

    public function month(Year $year)
    {
        $months = $year->months;
        return view('report.administratives.filter.month', compact('months', 'year'));
    }

    public function agencies(Month $month)
    {
        $year = $month->year;
        $administratives = Administrative::totalAdm($month->id);
        $money = $administratives->sum('money');
        $comision = $administratives->sum('comision');
        return view('report.administratives.filter.agency', compact('administratives', 'month', 'money', 'comision', 'year'));
    }

    public function administrative(Month $month, Agency $agency)
    {
        $year = $month->year;
        $administratives = Administrative::where('month_id', $month->id)
        ->where('agency_id', $agency->id)
        ->get();
        $money = $administratives->sum('money');
        $comision = $administratives->sum('comision');
        return view('report.administratives.filter.administrative', compact('administratives', 'month', 'money', 'comision', 'agency', 'year'));
    }
}
