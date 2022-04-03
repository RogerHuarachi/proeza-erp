<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Month extends Model
{
    protected $fillable = [
        'name', 'year_id'
    ];

    public function year()
    {
        return $this->belongsTo(Year::class);
    }

    public function spendings()
    {
        return $this->hasMany(Spending::class);
    }

    public function administratives()
    {
        return $this->hasMany(Administrative::class);
    }

    public function interests()
    {
        return $this->hasMany(Interest::class);
    }

    public function indicators()
    {
        return $this->hasMany(Indicator::class);
    }

    public function hasYearTo($id){
        $months = $this->months()->find($id);
        if ($months) {
            return true;
        } else {
            return false;
        }

    }


    public static function monthVerifo($name)
    {
        if ($name == 'enero') {
            return 'January';
        }
        elseif ($name == 'febrero') {
            return 'February';
        }
        elseif ($name == 'marzo') {
            return 'March';
        }
        elseif ($name == 'abril') {
            return 'April';
        }
        elseif ($name == 'mayo') {
            return 'May';
        }
        elseif ($name == 'junio') {
            return 'June';
        }
        elseif ($name == 'julio') {
            return 'July';
        }
        elseif ($name == 'agosto') {
            return 'August';
        }
        elseif ($name == 'septiembre') {
            return 'September';
        }
        elseif ($name == 'octubre') {
            return 'October';
        }
        elseif ($name == 'noviembre') {
            return 'November';
        }
        elseif ($name == 'diciembre') {
            return 'December';
        }
        else {
            return null;
        }

    }
}
