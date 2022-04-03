<?php

namespace App\Http\Controllers\Report;

use App\Http\Controllers\Controller;
use App\Models\Interest;
use App\Models\Month;
use App\Models\Year;
use Illuminate\Http\Request;

class InterestController extends Controller
{
    public function year()
    {
        $years = Year::get();
        return view('report.interest.filter.year', compact('years'));
    }

    public function month(Year $year)
    {
        $months = $year->months;
        return view('report.interest.filter.month', compact('months', 'year'));
    }

    public function interest(Month $month)
    {
        $year = $month->year;
        $interests = Interest::totalInter($month->id);
        $total = $interests->sum('total');
        return view('report.interest.filter.interest', compact('interests', 'total', 'month', 'year'));
    }
}
