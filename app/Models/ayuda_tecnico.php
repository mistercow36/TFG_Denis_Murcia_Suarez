<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ayuda_tecnico extends Model
{
    protected $table = 'ayuda_tecnicos';

    protected $fillable = [
        'nombre',
        'email',
        'telefono',
        'fecha',
        'error'
    ];
}
