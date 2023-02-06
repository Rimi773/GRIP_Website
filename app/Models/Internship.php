<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    protected $fillable = [
        'name',
        'email',
        'number',
        'job',
    ];
}
