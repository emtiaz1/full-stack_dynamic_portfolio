<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'about';
    protected $fillable = [
        'title',
        'description',
        'name',
        'email',
        'phone',
        'degree',
        'experience',
        'freelance',
        'skills', // JSON array
        'experiences', // JSON array
    ];

    protected $casts = [
        'skills' => 'array',
        'experiences' => 'array',
    ];
}
