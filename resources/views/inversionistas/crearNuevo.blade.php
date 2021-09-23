@extends('layouts.dashboard')

@section('content')


<div class="container">

    <div class="row">
        <div class="col-sm-12" style="text-align: left;">
            <h2>Crear Inversionista</h2><br>
        </div>
        
    </div>

    <div class="row">
    <form action="{{ route('/admin/crearInversionista') }}" method="post" enctype="multipart/form-data">

@csrf
    <div class="form-group">
        <label for="nombre_evento">Nombre</label>
        <input type="text" name="nombre_inversionista" id="nombre_inversionista" class="form-control" id="" placeholder="Nombre del inversionista">
    </div>

    <div class="form-group">
        <label for="descripcion_evento">Descripcion</label>
        <textarea class="form-control" id="descripcion_inversionista" name="descripcion_inversionista" rows="3" placeholder="Por favor introduce una decripcion"></textarea>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="fecha_evento">Correo</label>
                <input type="email" class="form-control" id="email_inversionista" name="email_inversionista" placeholder="tes@mail.com">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="hora_evento">Telefono</label>
                <input type="text" class="form-control" id="telefono_inversionista" name="telefono_inversionista" placeholder="3174554377">
            </div>
        </div>
    </div>

    <div class="row">
    <label for="exampleFormControlInput1">Imagen</label>
    <input type="file" name="file" id="file" accept="image/*">
    </div>

    <div class="" style="text-align: center; margin-top: 5%; margin-bottom: 5%;">
        <button type="submit" class="btn btn-primary" style="color: white; background-color: #679133; border: none;border-radius: 20px; padding-left: 60px; padding-right: 60px;font-size: 14pt;">
            Guardar
        </button>
    </div>

</form>
    </div>
</div>
@endsection