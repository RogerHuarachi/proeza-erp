<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Interest extends Model
{
    protected $fillable = [
        'money', 'agency_id', 'month_id'
    ];

    public function agency()
    {
        return $this->belongsTo(Agency::class);
    }

    public function month()
    {
        return $this->belongsTo(Month::class);
    }


    public static function totalInter($month_id){
        $interests = DB::table('interests')
        ->join('agencies', 'interests.agency_id', '=', 'agencies.id')
        ->where('interests.month_id', $month_id)
        ->select('agencies.name', DB::raw('SUM(interests.money) as total'))
        ->groupBy('agencies.name')
        ->get();
        return $interests;
    }
}
