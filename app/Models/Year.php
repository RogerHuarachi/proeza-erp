<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Year extends Model
{
    protected $fillable = [
        'name'
    ];

    public function months()
    {
        return $this->hasMany(Month::class);
    }
}
