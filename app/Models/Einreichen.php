<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Einreichen extends Model
{

    protected $fillable = [
        'email',
        'username',
        'url',
    ];

}
