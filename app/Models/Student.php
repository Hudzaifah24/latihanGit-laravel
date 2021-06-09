<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

class Student extends Model
{
    protected $fillable = [
        'name',
        'age',
        'class',
        'address',
        'gender',
        'status',
        'religion'
    ];
}
