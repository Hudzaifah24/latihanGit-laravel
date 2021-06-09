<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'name',
        'age',
        'address',
        'gender',
        'religion',
        'phone',
        'email',
        'birth_date',
        'description'
    ];
}
