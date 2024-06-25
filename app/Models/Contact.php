<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'age',
        'sex',
        'religion',
        'civil_status',
        'date_of_birth',
        'location',
        'phone_number',
    ];

    protected $dates = ['deleted_at'];
}