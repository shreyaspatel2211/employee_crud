<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'country_code',
        'mobile_number',
        'address',
        'gender',
        'hobbies',
        'photo'
    ];

    protected $casts = [
        'hobbies' => 'array',
    ];

}
