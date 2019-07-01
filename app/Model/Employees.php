<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $table = 'employees';

    protected $fillable = ['email', 'phone'];
}
