<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'company',
        'name',
        'phone',
        'mail',
        'birthday',
        'sex',
        'job',
        'contact',
        'status',
        'remarks',
    ];
}
