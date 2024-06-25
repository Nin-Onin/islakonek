<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Island extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
        'area',
        'total_population',
        'island_Image',
    ];

    protected $dates = ['deleted_at'];
}
