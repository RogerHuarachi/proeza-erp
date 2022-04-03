<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role;

class Category extends Model
{
    protected $fillable = [
        'name', 'role_id'
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
