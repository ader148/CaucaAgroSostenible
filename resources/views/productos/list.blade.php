@extends('layouts.dashboard')

@section('content')


<div class="container">

    <div class="row">
        <div class="col-sm-6" style="text-align: left;">
            <h2>Productos</h2><br>
        </div>
        <div class="col-sm-6" style="text-align: right;">
            <a href="{{ route('/admin/crearProducto') }}" class="btn btn-primary" style="color: white; background-color: #679133; border: none;border-radius: 20px; padding-left: 20px; padding-right: 20px;font-size: 12pt;">
                Agregar nuevo producto +
            </a>
        </div>
    </div>

    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">precio</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                <tr>
                    <th>{{ $producto->nombre }}</th>
                    <td>{{ $producto->cantidad }}</td>
                    <td>{{ $producto->precio }}</td>                    
                    <td>EDITAR - ELIMINAR</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection