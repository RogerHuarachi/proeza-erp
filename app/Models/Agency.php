<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    protected $fillable = [
        'id', 'name', 'city_id'
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function administratives()
    {
        return $this->hasMany(Administrative::class);
    }

    public function interest()
    {
        return $this->hasOne(Interest::class);
    }

    public function indicators()
    {
        return $this->hasMany(Indicator::class);
    }
}
