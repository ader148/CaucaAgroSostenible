@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2>Crear Emprendimiento o Asociacion</h2>

    <div class="row">
        <form action="{{ route('/admin/CrearEmprendimiento') }}" method="post" enctype="multipart/form-data">

            @csrf
            <div class="form-group">
                <label for="nombre_evento">Nombre del emprendimiento o asociacion</label>
                <input type="text" name="nombre_emprendimiento" id="nombre_evento" class="form-control" id="" placeholder="Nombre del evento">
            </div>

            <div class="form-group">
                <label for="descripcion_evento">Descripcion</label>
                <textarea class="form-control" id="descripcion_emprendimiento" name="descripcion_emprendimiento" rows="3" placeholder="Por favor introduce la decripcion del evento"></textarea>
            </div>

            <div class="form-group">
                <label for="descripcion_evento">Red Social (por el momento solo instagran proximamente se agregara nuevas redes) </label>
                <input type="text" class="form-control" name="red_social" id="red_social">
            </div>

            <div class="row">
                <label for="exampleFormControlInput1">Imagen</label>
                <input type="file" name="file" id="file" accept="image/*">
            </div>

            <div class="row" style="text-align: center; margin-top: 4%; padding-left: 35%; padding-right: 35%;">
                <button type="submit" class="btn btn-primary" style="color: white; background-color: #679133; border: none;border-radius: 20px; padding-left: 60px; padding-right: 60px;font-size: 14pt;">
                    Guardar
                </button>
            </div>


        </form>
    </div>
</div>
@endsection