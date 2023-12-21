<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tabla_suscripciones extends Model
{
    protected $table = 'tabla_suscripciones';

    protected $fillable = [
        'email'
    ];
}
