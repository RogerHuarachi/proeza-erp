<?php

namespace App\Http\Controllers\Report;

use App\Http\Controllers\Controller;
use App\Models\Month;
use App\Models\Spending;
use App\Models\Year;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Spatie\Permission\Models\Role;

class SpendingController extends Controller
{
    public function year()
    {
        $years = Year::get();
        return view('report.spendings.filter.year', compact('years'));
    }

    public function month(Year $year)
    {
        $months = $year->months;
        return view('report.spendings.filter.month', compact('months', 'year'));
    }

    public function role(Month $month)
    {
        $year = $month->year;
        $spendings = Spending::totalSpen($month->id);
        $total = $spendings->sum('total');
        // return $spendings;
        return view('report.spendings.filter.role', compact('spendings', 'month', 'total', 'year'));
    }

    public function spending(Month $month, $name)
    {
        $year = $month->year;
        $role = Role::findByName($name);
        $spendings = Spending::where('month_id', $month->id)
        ->where('role_id', $role->id)
        ->get();
        $total = $spendings->sum('money');
        // return $money;
        return view('report.spendings.filter.spending', compact('spendings', 'month', 'total', 'year', 'role'));
    }
}
