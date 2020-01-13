<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'user_id',
        'package_id',
        'booking_date',
        'branch',
        'treatment',
        'gender',
        'status',
    ];

    public static function getValidationRules(string $id = null)
    {
       return [];
    }
}
