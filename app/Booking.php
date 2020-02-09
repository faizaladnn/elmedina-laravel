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

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function package()
    {
        return $this->hasOne(Package::class, 'id', 'package_id');
    }
}
