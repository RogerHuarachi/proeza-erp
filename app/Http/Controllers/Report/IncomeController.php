<?php

namespace App\Http\Controllers\Report;

use App\Http\Controllers\Controller;
use App\Models\Administrative;
use App\Models\Income;
use App\Models\Interest;
use App\Models\Month;
use App\Models\Year;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    public function year()
    {
        $years = Year::get();
        return view('report.income.filter.year', compact('years'));
    }

    public function month(Year $year)
    {
        $months = $year->months;
        return view('report.income.filter.month', compact('months', 'year'));
    }

    public function income(Month $month)
    {
        $year = $month->year;
        $interests = Income::totalInt($month->id);
        $administratives = Income::totalAdm($month->id);
        $incomes = collect();
        if ($interests->count() > $administratives->count()) {
            foreach ($interests as $interest){
                $income = new Income();
                $income->agency = $interest->name;
                $income->interest = $interest->interest;
                foreach ($administratives as $administrative){
                    if ($interest->name == $administrative->name) {
                        $income->comision = $administrative->comision;
                    }
                }
                $income->result = $income->interest + $income->comision;
                $incomes->push($income);
            }
        } else {
            foreach ($administratives as $administrative){
                $income = new Income();
                $income->agency = $administrative->name;
                $income->comision = $administrative->comision;
                foreach ($interests as $interest){
                    if ($interest->name == $administrative->name){
                        $income->interest =$interest->interest;
                    }
                }
                $income->result = $income->interest + $income->comision;
                $incomes->push($income);
            }
        }
        $totalI = $interests->sum('interest');
        $totalC = $administratives->sum('comision');
        return view('report.income.filter.income', compact('incomes', 'totalI', 'totalC', 'month', 'year'));
    }
}
