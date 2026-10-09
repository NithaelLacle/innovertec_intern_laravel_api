<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Intern extends Model
{

    protected $fillable = [
        'pseudo_name',
        'email',
        'phone',
        'address',
        'university',
        'year_of_study',
        'resume',
    ];
}
