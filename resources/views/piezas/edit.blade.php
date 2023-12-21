@extends('layouts/template')

@section('title', 'Editar pieza | Stock')

@section('contenido')


<main>
    <div class="container py-4">
        <h2>Editar pieza</h2>

            @if ($errors->any())

                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach                   
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

            @endif

        <form action="{{url('piezas/'.$pieza->id)}}" method="post">
            @method("PUT")
            @csrf
            <div class="mb-3 row">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre:</labe>
                <div>
                    <input type="text" class="form-control"name="nombre" id="nombre" value="{{ $pieza->nombre }}" >
                </div>
            </div>

            <div class="mb-3 row">
                <label for="numero_serie" class="col-sm-2 col-form-label">Numero de serie:</labe>
                <div>
                    <input type="text" class="form-control"name="numero_serie" id="numero_serie" value="{{$pieza->numero_serie}}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="fecha_salida" class="col-sm-2 col-form-label">Fecha de salida:</labe>
                <div>
                    <input type="date" class="form-control"name="fecha_salida" id="fecha_salida" value="{{$pieza->fecha_salida}}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="precio" class="col-sm-2 col-form-label">Precio:</labe>
                <div>
                    <input type="text" class="form-control"name="precio" id="precio" value="{{$pieza->precio}}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="stock" class="col-sm-2 col-form-label">Stock:</labe>
                <div>
                    <input type="text" class="form-control"name="stock" id="stock" value="{{$pieza->stock}}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <select name="marcas" id="marcas" class="form-select" required>
                    <option value="">Selecciona una marca</option>
                    @foreach($marcas as $marca)
                    <option value="{{$marca->id}}" @if($marca->id==$pieza->marca_id) {{'selected'}} @endif >{{$marca->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <a href="{{url ('piezas')}}" class="btn btn-secondary">Regresar</a>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>

</main>
