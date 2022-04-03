<?php

namespace App\Http\Controllers\Report;

use App\Http\Controllers\Controller;
use App\Models\Income;
use App\Models\Month;
use App\Models\Year;
use Illuminate\Http\Request;

class BalanceController extends Controller
{
    public function year()
    {
        $years = Year::get();
        return view('report.balance.filter.year', compact('years'));
    }

    public function month(Year $year)
    {
        $months = $year->months;
        return view('report.balance.filter.month', compact('months', 'year'));
    }
}
