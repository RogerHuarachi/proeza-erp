<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Investor extends Model
{
    protected $fillable = [
        'name', 'state', 'deposit', 'amount', 'money',
        'ti', 'interest', 'pay', 'expiration', 'comentary',
    ];
}
