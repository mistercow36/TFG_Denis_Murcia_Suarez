@extends('layouts/template')

@section('title', 'Piezas | Stock')

@section('contenido')

<main>
    <div class="container py-4">
        
        <header>
    <!-- LOGO -->
    <div class="logo">
        <img src="{{ asset('img/logoWTP.png') }}" alt="Logo" width="120px">
    </div>
    <!-- LOGO -->

    <!-- NAVBAR -->
    <div class="nav-container">
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Inicio</a></li>
                <li><a href="{{ route('piezas.index') }}" style="color:#cb2821;">Gestión</a></li>
                <li><a href="{{ route('nosotros') }}">Sobre nosotros</a></li>
                <li><a href="{{ route('ayuda_tecnicos') }}">Soporte</a></li>
                
            </ul>
        </nav>
    </div>
    <!-- NAVBAR -->
</header>
<br>

@if(session('msg'))
    <div class="alert alert-success" role="alert">
        {{ session('msg') }}
    </div>
@endif
<h2>Listado de piezas</h2>
<br>
        <a href="{{url('piezas/create')}}" class="btn btn-sm" id="boton"><b>Registrar piezas</b></a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Numero de serie</th>
                    <th>Fecha de salida</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Marca</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($piezas as $pieza)
                <tr>
                    <td>{{$pieza->nombre}}</td>
                    <td>{{$pieza->numero_serie}}</td>
                    <td>{{$pieza->fecha_salida}}</td>
                    <td>{{$pieza->precio}}</td>
                    <td>{{$pieza->stock}}</td>
                    <td>{{$pieza->marcas->nombre}}</td>
                    <td><a href="{{url('piezas/' .$pieza->id.'/edit')}}"class="btn btn-warning btn-sm">Editar</a></td>
                    <td>
                        <form action="{{ url('piezas/'.$pieza->id) }}" method="post">
                            @method("DELETE")
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>    
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>

</main>
