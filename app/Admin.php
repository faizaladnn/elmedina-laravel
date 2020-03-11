<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;
    
    protected $fillable = [
        'username', 'email', 'password', 'branch',
    ];

    public static function getValidationRules(string $id = null)
    {
        return [
            'email' => 'required|unique:admins,email,'.$id,
            'username' => 'required',
            'password' => 'required|min:6',
            'branch' => 'required',
        ];
    }
}
