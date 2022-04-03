<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Dashboard extends Model
{
    // Gastos de ultima gestion
    public static function spending(){
        // $year = Year::findOrFail(1);
        $year = Year::findOrFail(3);
        return $year->months;
    }
    // Gastos administrativos de ultima gestion
    public static function administrative(){
        // $year = Year::findOrFail(1);
        $year = Year::findOrFail(3);
        return $year->months;
    }
    // intereses de ultima gestion
    public static function interest(){
        // $year = Year::findOrFail(1);
        $year = Year::findOrFail(3);
        return $year->months;
    }
    // ingresos de ultima gestion
    public static function income(){
        // $year = Year::findOrFail(1);
        $year = Year::findOrFail(3);
        return $year->months;
    }
    // balance de ultima gestion
    public static function balance(){
        // $year = Year::findOrFail(1);
        $year = Year::findOrFail(3);
        return $year->months;
    }
    // indicatores de ultima gestion
    public static function indicator(){
        // $year = Year::findOrFail(1);
        $year = Year::findOrFail(3);
        return $year->months;
    }
    // indicatores consolidado de ultima gestion
    public static function consolidado(){
        // $year = Year::findOrFail(1);
        $year = Year::findOrFail(3);
        return $year->months;
    }
}
