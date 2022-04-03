<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class Spending extends Model
{
    protected $fillable = [
        'money', 'item_id', 'month_id', 'role_id'
    ];

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function month()
    {
        return $this->belongsTo(Month::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }


    public static function totalSpen($month_id){
        $spendings = DB::table('spendings')
        ->join('roles', 'spendings.role_id', '=', 'roles.id')
        ->where('spendings.month_id', $month_id)
        ->select('roles.name', DB::raw('SUM(spendings.money) as total'))
        ->groupBy('roles.name')
        ->get();
        return $spendings;
    }



    public static function monthVerifo($name)
    {
        if ($name == 'enero') {
            return 'january';
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
