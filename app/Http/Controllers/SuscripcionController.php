<?php

namespace App\Http\Controllers;

use App\Models\tabla_suscripciones;
use Illuminate\Http\Request;

class SuscripcionController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:tabla_suscripciones,email',
            'deacuerdo' => 'accepted',
        ]);

        tabla_suscripciones::create([
            'email' => $request->input('email'),
        ]);

        return redirect()->route('home')->with('success', 'Te has suscrito exitosamente.');
    }

}
