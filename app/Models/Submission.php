<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    protected $fillable = [
        'email',
        'phone',
        'vorname',
        'nachname',
        'schule',
        'url',
        'partners', // neu
    ];

    protected $casts = [
        'partners' => 'array', // JSON <-> Array
    ];
}

