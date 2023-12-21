<?php

namespace App\Http\Controllers;

use App\Models\ayuda_tecnico;
use Illuminate\Http\Request;


class ayuda_tecnicosController extends Controller
{
    public function index()
    {
        return view('ayuda_tecnicos');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'telefono' => 'required',
            'fecha' => 'required|date',
            'error' => 'required',
        ]);

        ayuda_tecnico::create($data);

        return redirect('/ayuda_tecnicos')->with('success', 'Datos guardados correctamente.');
    }
}