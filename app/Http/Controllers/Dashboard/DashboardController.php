<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Dashboard;
use App\Models\Month;
use App\Models\Spending;
use App\Models\Administrative;
use App\Models\Interest;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.dashboard');
    }
    public function spending()
    {
        $months = Dashboard::spending();
        $array = array();
        foreach($months as $month){
            $array += [$month->name => $month->spendings->sum('money')];
        }
        return $array;
    }
    public function administrative()
    {
        $months = Dashboard::administrative();
        $array = array();
        foreach($months as $month){
            $array += [$month->name => $month->administratives->sum('comision')];
        }
        return $array;
    }
    public function interest()
    {
        $months = Dashboard::interest();
        $array = array();
        foreach($months as $month){
            $array += [$month->name => $month->interests->sum('money')];
        }
        return $array;
    }
    public function income()
    {
        $months = Dashboard::income();
        $array = array();
        foreach($months as $month){
            $array += [$month->name => $month->interests->sum('money')+$month->administratives->sum('comision')];
        }
        return $array;
    }
    public function balance()
    {
        $months = Dashboard::balance();
        $array = array();
        foreach($months as $month){
            $array += [$month->name => ($month->interests->sum('money')+$month->administratives->sum('comision'))-$month->spendings->sum('money')];
        }
        return $array;
    }
    public function ct()
    {
        $months = Dashboard::consolidado();
        $mes = array();
        $nacional = array();
        $cc = array();
        $ep = array();
        $pu = array();
        $cv = array();
        $rs = array();
        foreach ($months as $month) {
            $indicators = $month->indicators;
            $a1 = $indicators->where('agency_id','=', '1')->first();
            $a2 = $indicators->where('agency_id','=', '2')->first();
            $a3 = $indicators->where('agency_id','=', '3')->first();
            $a4 = $indicators->where('agency_id','=', '4')->first();
            $a5 = $indicators->where('agency_id','=', '5')->first();
            $a6 = $indicators->where('agency_id','=', '6')->first();
            array_push($mes, $month->name);
            if ($a1) {
                array_push($nacional, $a1->ct);
            } else {
                array_push($nacional, 0);
            }
            if ($a2) {
                array_push($cc, $a2->ct);
            } else {
                array_push($cc, 0);
            }
            if ($a3) {
                array_push($ep, $a3->ct);
            } else {
                array_push($ep, 0);
            }
            if ($a4) {
                array_push($pu, $a4->ct);
            } else {
                array_push($pu, 0);
            }
            if ($a5) {
                array_push($cv, $a5->ct);
            } else {
                array_push($cv, 0);
            }
            if ($a6) {
                array_push($rs, $a6->ct);
            } else {
                array_push($rs, 0);
            }
        }
        $date = array($mes, $nacional, $cc, $ep, $pu, $cv, $rs);
        return $date;
    }
    public function pa()
    {
        $months = Dashboard::consolidado();
        $mes = array();
        $nacional = array();
        $cc = array();
        $ep = array();
        $pu = array();
        $cv = array();
        $rs = array();
        foreach ($months as $month) {
            $indicators = $month->indicators;
            $a1 = $indicators->where('agency_id','=', '1')->first();
            $a2 = $indicators->where('agency_id','=', '2')->first();
            $a3 = $indicators->where('agency_id','=', '3')->first();
            $a4 = $indicators->where('agency_id','=', '4')->first();
            $a5 = $indicators->where('agency_id','=', '5')->first();
            $a6 = $indicators->where('agency_id','=', '6')->first();
            array_push($mes, $month->name);
            if ($a1) {
                array_push($nacional, $a1->pa);
            } else {
                array_push($nacional, 0);
            }
            if ($a2) {
                array_push($cc, $a2->pa);
            } else {
                array_push($cc, 0);
            }
            if ($a3) {
                array_push($ep, $a3->pa);
            } else {
                array_push($ep, 0);
            }
            if ($a4) {
                array_push($pu, $a4->pa);
            } else {
                array_push($pu, 0);
            }
            if ($a5) {
                array_push($cv, $a5->pa);
            } else {
                array_push($cv, 0);
            }
            if ($a6) {
                array_push($rs, $a6->pa);
            } else {
                array_push($rs, 0);
            }
        }
        $date = array($mes, $nacional, $cc, $ep, $pu, $cv, $rs);
        return $date;
    }
    public function ren()
    {
        $months = Dashboard::consolidado();
        $mes = array();
        $nacional = array();
        $cc = array();
        $ep = array();
        $pu = array();
        $cv = array();
        $rs = array();
        foreach ($months as $month) {
            $indicators = $month->indicators;
            $a1 = $indicators->where('agency_id','=', '1')->first();
            $a2 = $indicators->where('agency_id','=', '2')->first();
            $a3 = $indicators->where('agency_id','=', '3')->first();
            $a4 = $indicators->where('agency_id','=', '4')->first();
            $a5 = $indicators->where('agency_id','=', '5')->first();
            $a6 = $indicators->where('agency_id','=', '6')->first();
            array_push($mes, $month->name);
            if ($a1) {
                array_push($nacional, $a1->ren);
            } else {
                array_push($nacional, 0);
            }
            if ($a2) {
                array_push($cc, $a2->ren);
            } else {
                array_push($cc, 0);
            }
            if ($a3) {
                array_push($ep, $a3->ren);
            } else {
                array_push($ep, 0);
            }
            if ($a4) {
                array_push($pu, $a4->ren);
            } else {
                array_push($pu, 0);
            }
            if ($a5) {
                array_push($cv, $a5->ren);
            } else {
                array_push($cv, 0);
            }
            if ($a6) {
                array_push($rs, $a6->ren);
            } else {
                array_push($rs, 0);
            }
        }
        $date = array($mes, $nacional, $cc, $ep, $pu, $cv, $rs);
        return $date;
    }
    public function roe()
    {
        $months = Dashboard::consolidado();
        $mes = array();
        $nacional = array();
        $cc = array();
        $ep = array();
        $pu = array();
        $cv = array();
        $rs = array();
        foreach ($months as $month) {
            $indicators = $month->indicators;
            $a1 = $indicators->where('agency_id','=', '1')->first();
            $a2 = $indicators->where('agency_id','=', '2')->first();
            $a3 = $indicators->where('agency_id','=', '3')->first();
            $a4 = $indicators->where('agency_id','=', '4')->first();
            $a5 = $indicators->where('agency_id','=', '5')->first();
            $a6 = $indicators->where('agency_id','=', '6')->first();
            array_push($mes, $month->name);
            if ($a1) {
                array_push($nacional, $a1->roe);
            } else {
                array_push($nacional, 0);
            }
            if ($a2) {
                array_push($cc, $a2->roe);
            } else {
                array_push($cc, 0);
            }
            if ($a3) {
                array_push($ep, $a3->roe);
            } else {
                array_push($ep, 0);
            }
            if ($a4) {
                array_push($pu, $a4->roe);
            } else {
                array_push($pu, 0);
            }
            if ($a5) {
                array_push($cv, $a5->roe);
            } else {
                array_push($cv, 0);
            }
            if ($a6) {
                array_push($rs, $a6->roe);
            } else {
                array_push($rs, 0);
            }
        }
        $date = array($mes, $nacional, $cc, $ep, $pu, $cv, $rs);
        return $date;
    }
    public function roa()
    {
        $months = Dashboard::consolidado();
        $mes = array();
        $nacional = array();
        $cc = array();
        $ep = array();
        $pu = array();
        $cv = array();
        $rs = array();
        foreach ($months as $month) {
            $indicators = $month->indicators;
            $a1 = $indicators->where('agency_id','=', '1')->first();
            $a2 = $indicators->where('agency_id','=', '2')->first();
            $a3 = $indicators->where('agency_id','=', '3')->first();
            $a4 = $indicators->where('agency_id','=', '4')->first();
            $a5 = $indicators->where('agency_id','=', '5')->first();
            $a6 = $indicators->where('agency_id','=', '6')->first();
            array_push($mes, $month->name);
            if ($a1) {
                array_push($nacional, $a1->roa);
            } else {
                array_push($nacional, 0);
            }
            if ($a2) {
                array_push($cc, $a2->roa);
            } else {
                array_push($cc, 0);
            }
            if ($a3) {
                array_push($ep, $a3->roa);
            } else {
                array_push($ep, 0);
            }
            if ($a4) {
                array_push($pu, $a4->roa);
            } else {
                array_push($pu, 0);
            }
            if ($a5) {
                array_push($cv, $a5->roa);
            } else {
                array_push($cv, 0);
            }
            if ($a6) {
                array_push($rs, $a6->roa);
            } else {
                array_push($rs, 0);
            }
        }
        $date = array($mes, $nacional, $cc, $ep, $pu, $cv, $rs);
        return $date;
    }
    public function mora()
    {
        $months = Dashboard::consolidado();
        $mes = array();
        $nacional = array();
        $cc = array();
        $ep = array();
        $pu = array();
        $cv = array();
        $rs = array();
        foreach ($months as $month) {
            $indicators = $month->indicators;
            $a1 = $indicators->where('agency_id','=', '1')->first();
            $a2 = $indicators->where('agency_id','=', '2')->first();
            $a3 = $indicators->where('agency_id','=', '3')->first();
            $a4 = $indicators->where('agency_id','=', '4')->first();
            $a5 = $indicators->where('agency_id','=', '5')->first();
            $a6 = $indicators->where('agency_id','=', '6')->first();
            array_push($mes, $month->name);
            if ($a1) {
                array_push($nacional, $a1->mora);
            } else {
                array_push($nacional, 0);
            }
            if ($a2) {
                array_push($cc, $a2->mora);
            } else {
                array_push($cc, 0);
            }
            if ($a3) {
                array_push($ep, $a3->mora);
            } else {
                array_push($ep, 0);
            }
            if ($a4) {
                array_push($pu, $a4->mora);
            } else {
                array_push($pu, 0);
            }
            if ($a5) {
                array_push($cv, $a5->mora);
            } else {
                array_push($cv, 0);
            }
            if ($a6) {
                array_push($rs, $a6->mora);
            } else {
                array_push($rs, 0);
            }
        }
        $date = array($mes, $nacional, $cc, $ep, $pu, $cv, $rs);
        return $date;
    }


    public function reportgastos()
    {
        $spendingsgg1 = Spending::where('role_id', '=', 2)->where('month_id', '=', 1)->get();
        $spendingsrrhh1 = Spending::where('role_id', '=', 3)->where('month_id', '=', 1)->get();
        $spendingscon1 = Spending::where('role_id', '=', 4)->where('month_id', '=', 1)->get();
        $spendingsope1 = Spending::where('role_id', '=', 7)->where('month_id', '=', 1)->get();

        $spendingsgg2 = Spending::where('role_id', '=', 2)->where('month_id', '=', 2)->get();
        $spendingsrrhh2 = Spending::where('role_id', '=', 3)->where('month_id', '=', 2)->get();
        $spendingscon2 = Spending::where('role_id', '=', 4)->where('month_id', '=', 2)->get();
        $spendingsope2 = Spending::where('role_id', '=', 7)->where('month_id', '=', 2)->get();

        $spendingsgg3 = Spending::where('role_id', '=', 2)->where('month_id', '=', 3)->get();
        $spendingsrrhh3 = Spending::where('role_id', '=', 3)->where('month_id', '=', 3)->get();
        $spendingscon3 = Spending::where('role_id', '=', 4)->where('month_id', '=', 3)->get();
        $spendingsope3 = Spending::where('role_id', '=', 7)->where('month_id', '=', 3)->get();

        $spendingsgg4 = Spending::where('role_id', '=', 2)->where('month_id', '=', 4)->get();
        $spendingsrrhh4 = Spending::where('role_id', '=', 3)->where('month_id', '=', 4)->get();
        $spendingscon4 = Spending::where('role_id', '=', 4)->where('month_id', '=', 4)->get();
        $spendingsope4 = Spending::where('role_id', '=', 7)->where('month_id', '=', 4)->get();

        $spendingsgg5 = Spending::where('role_id', '=', 2)->where('month_id', '=', 5)->get();
        $spendingsrrhh5 = Spending::where('role_id', '=', 3)->where('month_id', '=', 5)->get();
        $spendingscon5 = Spending::where('role_id', '=', 4)->where('month_id', '=', 5)->get();
        $spendingsope5 = Spending::where('role_id', '=', 7)->where('month_id', '=', 5)->get();

        $spendingsgg6 = Spending::where('role_id', '=', 2)->where('month_id', '=', 6)->get();
        $spendingsrrhh6 = Spending::where('role_id', '=', 3)->where('month_id', '=', 6)->get();
        $spendingscon6 = Spending::where('role_id', '=', 4)->where('month_id', '=', 6)->get();
        $spendingsope6 = Spending::where('role_id', '=', 7)->where('month_id', '=', 6)->get();

        $spendingsgg7 = Spending::where('role_id', '=', 2)->where('month_id', '=', 7)->get();
        $spendingsrrhh7 = Spending::where('role_id', '=', 3)->where('month_id', '=', 7)->get();
        $spendingscon7 = Spending::where('role_id', '=', 4)->where('month_id', '=', 7)->get();
        $spendingsope7 = Spending::where('role_id', '=', 7)->where('month_id', '=', 7)->get();

        $spendingsgg8 = Spending::where('role_id', '=', 2)->where('month_id', '=', 8)->get();
        $spendingsrrhh8 = Spending::where('role_id', '=', 3)->where('month_id', '=', 8)->get();
        $spendingscon8 = Spending::where('role_id', '=', 4)->where('month_id', '=', 8)->get();
        $spendingsope8 = Spending::where('role_id', '=', 7)->where('month_id', '=', 8)->get();

        $spendingsgg9 = Spending::where('role_id', '=', 2)->where('month_id', '=', 9)->get();
        $spendingsrrhh9 = Spending::where('role_id', '=', 3)->where('month_id', '=', 9)->get();
        $spendingscon9 = Spending::where('role_id', '=', 4)->where('month_id', '=', 9)->get();
        $spendingsope9 = Spending::where('role_id', '=', 7)->where('month_id', '=', 9)->get();

        $spendingsgg10 = Spending::where('role_id', '=', 2)->where('month_id', '=', 10)->get();
        $spendingsrrhh10 = Spending::where('role_id', '=', 3)->where('month_id', '=', 10)->get();
        $spendingscon10 = Spending::where('role_id', '=', 4)->where('month_id', '=', 10)->get();
        $spendingsope10 = Spending::where('role_id', '=', 7)->where('month_id', '=', 10)->get();

        $spendingsgg11 = Spending::where('role_id', '=', 2)->where('month_id', '=', 11)->get();
        $spendingsrrhh11 = Spending::where('role_id', '=', 3)->where('month_id', '=', 11)->get();
        $spendingscon11 = Spending::where('role_id', '=', 4)->where('month_id', '=', 11)->get();
        $spendingsope11 = Spending::where('role_id', '=', 7)->where('month_id', '=', 11)->get();

        $spendingsgg12 = Spending::where('role_id', '=', 2)->where('month_id', '=', 12)->get();
        $spendingsrrhh12 = Spending::where('role_id', '=', 3)->where('month_id', '=', 12)->get();
        $spendingscon12 = Spending::where('role_id', '=', 4)->where('month_id', '=', 12)->get();
        $spendingsope12 = Spending::where('role_id', '=', 7)->where('month_id', '=', 12)->get();

        // return $spendingsea;
        return view('dashboard.gastos', compact('spendingsgg1', 'spendingsrrhh1', 'spendingscon1', 'spendingsope1',
        'spendingsgg2', 'spendingsrrhh2', 'spendingscon2', 'spendingsope2',
        'spendingsgg3', 'spendingsrrhh3', 'spendingscon3', 'spendingsope3',
        'spendingsgg4', 'spendingsrrhh4', 'spendingscon4', 'spendingsope4',
        'spendingsgg5', 'spendingsrrhh5', 'spendingscon5', 'spendingsope5',
        'spendingsgg6', 'spendingsrrhh6', 'spendingscon6', 'spendingsope6',
        'spendingsgg7', 'spendingsrrhh7', 'spendingscon7', 'spendingsope7',
        'spendingsgg8', 'spendingsrrhh8', 'spendingscon8', 'spendingsope8',
        'spendingsgg9', 'spendingsrrhh9', 'spendingscon9', 'spendingsope9',
        'spendingsgg10', 'spendingsrrhh10', 'spendingscon10', 'spendingsope10',
        'spendingsgg11', 'spendingsrrhh11', 'spendingscon11', 'spendingsope11',
        'spendingsgg12', 'spendingsrrhh12', 'spendingscon12', 'spendingsope12',

        ));
    }
    public function reportadministrativos()
    {
        $administrativescc1 = Administrative::where('month_id', '=', 1)->where('agency_id', '=', 2)->get();
        $administrativesep1 = Administrative::where('month_id', '=', 1)->where('agency_id', '=', 3)->get();
        $administrativespu1 = Administrative::where('month_id', '=', 1)->where('agency_id', '=', 4)->get();
        $administrativescv1 = Administrative::where('month_id', '=', 1)->where('agency_id', '=', 5)->get();
        $administrativesrs1 = Administrative::where('month_id', '=', 1)->where('agency_id', '=', 6)->get();

        $administrativescc2 = Administrative::where('month_id', '=', 2)->where('agency_id', '=', 2)->get();
        $administrativesep2 = Administrative::where('month_id', '=', 2)->where('agency_id', '=', 3)->get();
        $administrativespu2 = Administrative::where('month_id', '=', 2)->where('agency_id', '=', 4)->get();
        $administrativescv2 = Administrative::where('month_id', '=', 2)->where('agency_id', '=', 5)->get();
        $administrativesrs2 = Administrative::where('month_id', '=', 2)->where('agency_id', '=', 6)->get();

        $administrativescc3 = Administrative::where('month_id', '=', 3)->where('agency_id', '=', 2)->get();
        $administrativesep3 = Administrative::where('month_id', '=', 3)->where('agency_id', '=', 3)->get();
        $administrativespu3 = Administrative::where('month_id', '=', 3)->where('agency_id', '=', 4)->get();
        $administrativescv3 = Administrative::where('month_id', '=', 3)->where('agency_id', '=', 5)->get();
        $administrativesrs3 = Administrative::where('month_id', '=', 3)->where('agency_id', '=', 6)->get();

        $administrativescc4 = Administrative::where('month_id', '=', 4)->where('agency_id', '=', 2)->get();
        $administrativesep4 = Administrative::where('month_id', '=', 4)->where('agency_id', '=', 3)->get();
        $administrativespu4 = Administrative::where('month_id', '=', 4)->where('agency_id', '=', 4)->get();
        $administrativescv4 = Administrative::where('month_id', '=', 4)->where('agency_id', '=', 5)->get();
        $administrativesrs4 = Administrative::where('month_id', '=', 4)->where('agency_id', '=', 6)->get();

        $administrativescc5 = Administrative::where('month_id', '=', 5)->where('agency_id', '=', 2)->get();
        $administrativesep5 = Administrative::where('month_id', '=', 5)->where('agency_id', '=', 3)->get();
        $administrativespu5 = Administrative::where('month_id', '=', 5)->where('agency_id', '=', 4)->get();
        $administrativescv5 = Administrative::where('month_id', '=', 5)->where('agency_id', '=', 5)->get();
        $administrativesrs5 = Administrative::where('month_id', '=', 5)->where('agency_id', '=', 6)->get();

        $administrativescc6 = Administrative::where('month_id', '=', 6)->where('agency_id', '=', 2)->get();
        $administrativesep6 = Administrative::where('month_id', '=', 6)->where('agency_id', '=', 3)->get();
        $administrativespu6 = Administrative::where('month_id', '=', 6)->where('agency_id', '=', 4)->get();
        $administrativescv6 = Administrative::where('month_id', '=', 6)->where('agency_id', '=', 5)->get();
        $administrativesrs6 = Administrative::where('month_id', '=', 6)->where('agency_id', '=', 6)->get();

        $administrativescc7 = Administrative::where('month_id', '=', 7)->where('agency_id', '=', 2)->get();
        $administrativesep7 = Administrative::where('month_id', '=', 7)->where('agency_id', '=', 3)->get();
        $administrativespu7 = Administrative::where('month_id', '=', 7)->where('agency_id', '=', 4)->get();
        $administrativescv7 = Administrative::where('month_id', '=', 7)->where('agency_id', '=', 5)->get();
        $administrativesrs7 = Administrative::where('month_id', '=', 7)->where('agency_id', '=', 6)->get();

        $administrativescc8 = Administrative::where('month_id', '=', 8)->where('agency_id', '=', 2)->get();
        $administrativesep8 = Administrative::where('month_id', '=', 8)->where('agency_id', '=', 3)->get();
        $administrativespu8 = Administrative::where('month_id', '=', 8)->where('agency_id', '=', 4)->get();
        $administrativescv8 = Administrative::where('month_id', '=', 8)->where('agency_id', '=', 5)->get();
        $administrativesrs8 = Administrative::where('month_id', '=', 8)->where('agency_id', '=', 6)->get();

        $administrativescc9 = Administrative::where('month_id', '=', 9)->where('agency_id', '=', 2)->get();
        $administrativesep9 = Administrative::where('month_id', '=', 9)->where('agency_id', '=', 3)->get();
        $administrativespu9 = Administrative::where('month_id', '=', 9)->where('agency_id', '=', 4)->get();
        $administrativescv9 = Administrative::where('month_id', '=', 9)->where('agency_id', '=', 5)->get();
        $administrativesrs9 = Administrative::where('month_id', '=', 9)->where('agency_id', '=', 6)->get();

        $administrativescc10 = Administrative::where('month_id', '=', 10)->where('agency_id', '=', 2)->get();
        $administrativesep10 = Administrative::where('month_id', '=', 10)->where('agency_id', '=', 3)->get();
        $administrativespu10 = Administrative::where('month_id', '=', 10)->where('agency_id', '=', 4)->get();
        $administrativescv10 = Administrative::where('month_id', '=', 10)->where('agency_id', '=', 5)->get();
        $administrativesrs10 = Administrative::where('month_id', '=', 10)->where('agency_id', '=', 6)->get();

        $administrativescc11 = Administrative::where('month_id', '=', 11)->where('agency_id', '=', 2)->get();
        $administrativesep11 = Administrative::where('month_id', '=', 11)->where('agency_id', '=', 3)->get();
        $administrativespu11 = Administrative::where('month_id', '=', 11)->where('agency_id', '=', 4)->get();
        $administrativescv11 = Administrative::where('month_id', '=', 11)->where('agency_id', '=', 5)->get();
        $administrativesrs11 = Administrative::where('month_id', '=', 11)->where('agency_id', '=', 6)->get();

        $administrativescc12 = Administrative::where('month_id', '=', 12)->where('agency_id', '=', 2)->get();
        $administrativesep12 = Administrative::where('month_id', '=', 12)->where('agency_id', '=', 3)->get();
        $administrativespu12 = Administrative::where('month_id', '=', 12)->where('agency_id', '=', 4)->get();
        $administrativescv12 = Administrative::where('month_id', '=', 12)->where('agency_id', '=', 5)->get();
        $administrativesrs12 = Administrative::where('month_id', '=', 12)->where('agency_id', '=', 6)->get();

        // return $administrativesea;
        return view('dashboard.administrativos', compact('administrativescc1', 'administrativesep1', 'administrativespu1', 'administrativescv1', 'administrativesrs1',
        'administrativescc2', 'administrativesep2', 'administrativespu2', 'administrativescv2', 'administrativesrs2',
        'administrativescc3', 'administrativesep3', 'administrativespu3', 'administrativescv3', 'administrativesrs3',
        'administrativescc4', 'administrativesep4', 'administrativespu4', 'administrativescv4', 'administrativesrs4',
        'administrativescc5', 'administrativesep5', 'administrativespu5', 'administrativescv5', 'administrativesrs5',
        'administrativescc6', 'administrativesep6', 'administrativespu6', 'administrativescv6', 'administrativesrs6',
        'administrativescc7', 'administrativesep7', 'administrativespu7', 'administrativescv7', 'administrativesrs7',
        'administrativescc8', 'administrativesep8', 'administrativespu8', 'administrativescv8', 'administrativesrs8',
        'administrativescc9', 'administrativesep9', 'administrativespu9', 'administrativescv9', 'administrativesrs9',
        'administrativescc10', 'administrativesep10', 'administrativespu10', 'administrativescv10', 'administrativesrs10',
        'administrativescc11', 'administrativesep11', 'administrativespu11', 'administrativescv11', 'administrativesrs11',
        'administrativescc12', 'administrativesep12', 'administrativespu12', 'administrativescv12', 'administrativesrs12',

        ));
    }
    public function reportintereses()
    {
        $interestscc1 = Interest::where('month_id', '=', 1)->where('agency_id', '=', 2)->get();
        $interestsep1 = Interest::where('month_id', '=', 1)->where('agency_id', '=', 3)->get();
        $interestspu1 = Interest::where('month_id', '=', 1)->where('agency_id', '=', 4)->get();
        $interestscv1 = Interest::where('month_id', '=', 1)->where('agency_id', '=', 5)->get();
        $interestsrs1 = Interest::where('month_id', '=', 1)->where('agency_id', '=', 6)->get();

        $interestscc2 = Interest::where('month_id', '=', 2)->where('agency_id', '=', 2)->get();
        $interestsep2 = Interest::where('month_id', '=', 2)->where('agency_id', '=', 3)->get();
        $interestspu2 = Interest::where('month_id', '=', 2)->where('agency_id', '=', 4)->get();
        $interestscv2 = Interest::where('month_id', '=', 2)->where('agency_id', '=', 5)->get();
        $interestsrs2 = Interest::where('month_id', '=', 2)->where('agency_id', '=', 6)->get();

        $interestscc3 = Interest::where('month_id', '=', 3)->where('agency_id', '=', 2)->get();
        $interestsep3 = Interest::where('month_id', '=', 3)->where('agency_id', '=', 3)->get();
        $interestspu3 = Interest::where('month_id', '=', 3)->where('agency_id', '=', 4)->get();
        $interestscv3 = Interest::where('month_id', '=', 3)->where('agency_id', '=', 5)->get();
        $interestsrs3 = Interest::where('month_id', '=', 3)->where('agency_id', '=', 6)->get();

        $interestscc4 = Interest::where('month_id', '=', 4)->where('agency_id', '=', 2)->get();
        $interestsep4 = Interest::where('month_id', '=', 4)->where('agency_id', '=', 3)->get();
        $interestspu4 = Interest::where('month_id', '=', 4)->where('agency_id', '=', 4)->get();
        $interestscv4 = Interest::where('month_id', '=', 4)->where('agency_id', '=', 5)->get();
        $interestsrs4 = Interest::where('month_id', '=', 4)->where('agency_id', '=', 6)->get();

        $interestscc5 = Interest::where('month_id', '=', 5)->where('agency_id', '=', 2)->get();
        $interestsep5 = Interest::where('month_id', '=', 5)->where('agency_id', '=', 3)->get();
        $interestspu5 = Interest::where('month_id', '=', 5)->where('agency_id', '=', 4)->get();
        $interestscv5 = Interest::where('month_id', '=', 5)->where('agency_id', '=', 5)->get();
        $interestsrs5 = Interest::where('month_id', '=', 5)->where('agency_id', '=', 6)->get();

        $interestscc6 = Interest::where('month_id', '=', 6)->where('agency_id', '=', 2)->get();
        $interestsep6 = Interest::where('month_id', '=', 6)->where('agency_id', '=', 3)->get();
        $interestspu6 = Interest::where('month_id', '=', 6)->where('agency_id', '=', 4)->get();
        $interestscv6 = Interest::where('month_id', '=', 6)->where('agency_id', '=', 5)->get();
        $interestsrs6 = Interest::where('month_id', '=', 6)->where('agency_id', '=', 6)->get();

        $interestscc7 = Interest::where('month_id', '=', 7)->where('agency_id', '=', 2)->get();
        $interestsep7 = Interest::where('month_id', '=', 7)->where('agency_id', '=', 3)->get();
        $interestspu7 = Interest::where('month_id', '=', 7)->where('agency_id', '=', 4)->get();
        $interestscv7 = Interest::where('month_id', '=', 7)->where('agency_id', '=', 5)->get();
        $interestsrs7 = Interest::where('month_id', '=', 7)->where('agency_id', '=', 6)->get();

        $interestscc8 = Interest::where('month_id', '=', 8)->where('agency_id', '=', 2)->get();
        $interestsep8 = Interest::where('month_id', '=', 8)->where('agency_id', '=', 3)->get();
        $interestspu8 = Interest::where('month_id', '=', 8)->where('agency_id', '=', 4)->get();
        $interestscv8 = Interest::where('month_id', '=', 8)->where('agency_id', '=', 5)->get();
        $interestsrs8 = Interest::where('month_id', '=', 8)->where('agency_id', '=', 6)->get();

        $interestscc9 = Interest::where('month_id', '=', 9)->where('agency_id', '=', 2)->get();
        $interestsep9 = Interest::where('month_id', '=', 9)->where('agency_id', '=', 3)->get();
        $interestspu9 = Interest::where('month_id', '=', 9)->where('agency_id', '=', 4)->get();
        $interestscv9 = Interest::where('month_id', '=', 9)->where('agency_id', '=', 5)->get();
        $interestsrs9 = Interest::where('month_id', '=', 9)->where('agency_id', '=', 6)->get();

        $interestscc10 = Interest::where('month_id', '=', 10)->where('agency_id', '=', 2)->get();
        $interestsep10 = Interest::where('month_id', '=', 10)->where('agency_id', '=', 3)->get();
        $interestspu10 = Interest::where('month_id', '=', 10)->where('agency_id', '=', 4)->get();
        $interestscv10 = Interest::where('month_id', '=', 10)->where('agency_id', '=', 5)->get();
        $interestsrs10 = Interest::where('month_id', '=', 10)->where('agency_id', '=', 6)->get();

        $interestscc11 = Interest::where('month_id', '=', 11)->where('agency_id', '=', 2)->get();
        $interestsep11 = Interest::where('month_id', '=', 11)->where('agency_id', '=', 3)->get();
        $interestspu11 = Interest::where('month_id', '=', 11)->where('agency_id', '=', 4)->get();
        $interestscv11 = Interest::where('month_id', '=', 11)->where('agency_id', '=', 5)->get();
        $interestsrs11 = Interest::where('month_id', '=', 11)->where('agency_id', '=', 6)->get();

        $interestscc12 = Interest::where('month_id', '=', 12)->where('agency_id', '=', 2)->get();
        $interestsep12 = Interest::where('month_id', '=', 12)->where('agency_id', '=', 3)->get();
        $interestspu12 = Interest::where('month_id', '=', 12)->where('agency_id', '=', 4)->get();
        $interestscv12 = Interest::where('month_id', '=', 12)->where('agency_id', '=', 5)->get();
        $interestsrs12 = Interest::where('month_id', '=', 12)->where('agency_id', '=', 6)->get();

        // return $interestsea;
        return view('dashboard.intereses', compact('interestscc1', 'interestsep1', 'interestspu1', 'interestscv1', 'interestsrs1',
        'interestscc2', 'interestsep2', 'interestspu2', 'interestscv2', 'interestsrs2',
        'interestscc3', 'interestsep3', 'interestspu3', 'interestscv3', 'interestsrs3',
        'interestscc4', 'interestsep4', 'interestspu4', 'interestscv4', 'interestsrs4',
        'interestscc5', 'interestsep5', 'interestspu5', 'interestscv5', 'interestsrs5',
        'interestscc6', 'interestsep6', 'interestspu6', 'interestscv6', 'interestsrs6',
        'interestscc7', 'interestsep7', 'interestspu7', 'interestscv7', 'interestsrs7',
        'interestscc8', 'interestsep8', 'interestspu8', 'interestscv8', 'interestsrs8',
        'interestscc9', 'interestsep9', 'interestspu9', 'interestscv9', 'interestsrs9',
        'interestscc10', 'interestsep10', 'interestspu10', 'interestscv10', 'interestsrs10',
        'interestscc11', 'interestsep11', 'interestspu11', 'interestscv11', 'interestsrs11',
        'interestscc12', 'interestsep12', 'interestspu12', 'interestscv12', 'interestsrs12',

        ));
    }



    public function excelgastos()
    {
        $months = Dashboard::spending();
        return view('dashboard.excel.gastos', compact('months'));
    }
    public function exceladministrativos()
    {
        $months = Dashboard::spending();
        return view('dashboard.excel.administrativos', compact('months'));
    }
    public function excelintereses()
    {
        $months = Dashboard::spending();
        return view('dashboard.excel.intereses', compact('months'));
    }
}
