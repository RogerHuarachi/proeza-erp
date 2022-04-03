<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Income extends Model
{
    protected $fillable = [
        'agency', 'interest', 'comision', 'result'
    ];

    public static function totalInt($month_id){
        $interests = DB::table('agencies')
        ->join('interests', 'interests.agency_id', '=', 'agencies.id')
        ->where('interests.month_id', $month_id)
        // ->select('agencies.name', 'interests.money')
        ->select('agencies.name', DB::raw('SUM(interests.money) as interest'))
        ->groupBy('agencies.name', 'agencies.id')
        ->get();

        return $interests;
    }
    public static function totalAdm($month_id){

        $administratives = DB::table('agencies')
        ->join('administratives', 'administratives.agency_id', '=', 'agencies.id')
        ->where('administratives.month_id', $month_id)
        // ->select('agencies.name', 'administratives.comision')
        ->select('agencies.name', DB::raw('SUM(administratives.comision) as comision'))
        ->groupBy('agencies.name', 'agencies.id')
        ->get();

        return $administratives;
    }

    public static function totalInc($month_id){
        $interests = DB::table('agencies')
        ->join('interests', 'interests.agency_id', '=', 'agencies.id')
        ->where('interests.month_id', $month_id)
        // ->select('agencies.name', 'interests.money')
        ->select('agencies.name', DB::raw('SUM(interests.money) as interest'))
        ->groupBy('agencies.name', 'agencies.id')
        ->get();

        $administratives = DB::table('agencies')
        ->join('administratives', 'administratives.agency_id', '=', 'agencies.id')
        ->where('administratives.month_id', $month_id)
        // ->select('agencies.name', 'administratives.comision')
        ->select('agencies.name', DB::raw('SUM(administratives.comision) as comision'))
        ->groupBy('agencies.name', 'agencies.id')
        ->get();

        // $incomes = $interests->merge($administratives);

        // $incomes = DB::table('agencies')
        // ->join('interests', 'interests.agency_id', '=', 'agencies.id')
        // ->join('administratives', 'administratives.agency_id', '=', 'agencies.id')
        // ->where('administratives.month_id', $month_id)
        // ->where('interests.month_id', $month_id)
        // ->select('agencies.name', 'interests.money')
        // ->select('agencies.name', DB::raw('SUM(interests.money) as interest'), DB::raw('SUM(administratives.comision) as comision'))
        // ->groupBy('agencies.name', 'agencies.id')
        // ->get();

        return $interests;
    }
}
