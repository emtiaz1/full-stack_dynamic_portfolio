<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'category',
        'title',
        'description',
        'tags',
        'image',
        'githublink',
    ];

    protected $casts = [
        'tags' => 'array',
    ];
}
