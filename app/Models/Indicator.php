<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Indicator extends Model
{
    protected $fillable = [
        'ct', 'pa', 'ren', 'roe', 'roa', 'mora', 'month_id', 'agency_id'
    ];

    public function month()
    {
        return $this->belongsTo(Month::class);
    }

    public function agency()
    {
        return $this->belongsTo(Agency::class);
    }
}
