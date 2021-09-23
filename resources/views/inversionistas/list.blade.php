@extends('layouts.dashboard')

@section('content')


<div class="container">

    <div class="row">
        <div class="col-sm-6" style="text-align: left;">
            <h2>Inversionistas</h2><br>
        </div>
        <div class="col-sm-6" style="text-align: right;">
            <a href="{{ route('/admin/crearInversionista') }}" class="btn btn-primary" style="color: white; background-color: #679133; border: none;border-radius: 20px; padding-left: 20px; padding-right: 20px;font-size: 12pt;">
                Crear Inversionista +
            </a>
        </div>
    </div>

    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">correo</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($inversionistas as $inversionista)
                <tr>
                    <th>{{ $inversionista->nombre }}</th>
                    <td>{{ $inversionista->descripcion }}</td>
                    <td>{{ $inversionista->correo }}</td>
                    <td>{{ $inversionista->telefono }}</td>
                    <td>EDITAR - ELIMINAR</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection