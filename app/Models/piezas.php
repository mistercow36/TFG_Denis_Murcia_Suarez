<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class piezas extends Model
{
    use HasFactory;

    //Usar la clave foranea
    public function marcas(){
        return $this->belongsTo(marcas::class, 'marca_id', 'id');
    }
}
