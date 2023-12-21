<?php

namespace App\Http\Controllers;

use App\Models\piezas;
use App\Models\marcas;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class piezasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $piezas = piezas::all();
        $user = \Auth::user();
        return view('piezas.index', ['piezas' => $piezas], ['user'=> $user]); //Viene a partir de las vistas
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('piezas.create', ['marcas' => marcas::all()]);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:255|unique:piezas',
            'numero_serie' => 'required|unique:piezas|max:10',
            'fecha_salida' => 'required|date',
            'precio' => 'required',
            'stock' => 'nullable|max:255',
            'marcas' => 'required'
        ]);
        $piezas = new piezas();
        $piezas->nombre = $request->input('nombre');
        $piezas->numero_serie = $request->input('numero_serie');
        $piezas->fecha_salida = $request->input('fecha_salida');
        $piezas->precio = $request->input('precio');
        $piezas->stock = $request->input('stock');
        $piezas->marca_id = $request->input('marcas');
        $piezas->save();

        return redirect()->route('piezas.index')->with('msg', 'Registro guardado');
    }

    /**
     * Display the specified resource.
     */
    public function show(piezas $piezas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    //public function edit(piezas $piezas)
    public function edit($id)
    {
        $pieza = piezas::find($id);
        return view('piezas.edit', ['pieza' => $pieza, 'marcas' => marcas::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|max:255|unique:piezas,nombre'.$id,
            'numero_serie' => 'required|max:10|unique:piezas,numero_serie,'.$id,
            'fecha_salida' => 'required|date',
            'precio' => 'required',
            'stock' => 'nullable|max:255',
            'marcas' => 'required'
        ],);
        $piezas =  piezas::find($id);
        $piezas->nombre = $request->input('nombre');
        $piezas->numero_serie = $request->input('numero_serie');
        $piezas->fecha_salida = $request->input('fecha_salida');
        $piezas->precio = $request->input('precio');
        $piezas->stock = $request->input('stock');
        $piezas->marca_id = $request->input('marcas');
        $piezas->save();

        return redirect()->route('piezas.index')->with('msg', 'Pieza modificada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $piezas = piezas::find($id);
        $piezas->delete();

        return redirect("piezas");
    }
}
