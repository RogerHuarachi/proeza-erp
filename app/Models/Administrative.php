<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Administrative extends Model
{
    protected $fillable = [
        'name', 'money', 'comision', 'month_id', 'agency_id'
    ];

    public function month()
    {
        return $this->belongsTo(Month::class);
    }

    public function agency()
    {
        return $this->belongsTo(Agency::class);
    }


    public static function totalAdm($month_id){
        $administratives = DB::table('administratives')
        ->join('agencies', 'administratives.agency_id', '=', 'agencies.id')
        ->where('administratives.month_id', $month_id)
        ->select('agencies.name', 'agencies.id', DB::raw('SUM(administratives.money) as money'), DB::raw('SUM(administratives.comision) as comision'))
        ->groupBy('agencies.name', 'agencies.id')
        ->get();
        return $administratives;
    }
}
