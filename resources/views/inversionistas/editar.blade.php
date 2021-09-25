@extends('layouts.dashboard')

@section('content')


<div class="container">

    <div class="row">
        <div class="col-sm-12" style="text-align: left;">
            <h2>Editar Inversionista</h2><br>
        </div>
        
    </div>



    <div class="row">

    

    <form action="{{ route('/admin/EditarInversionista') }}" method="post" enctype="multipart/form-data">

@csrf

    <input type="hidden" name="id_inversionista" id="id_inversionista" value="{{ Request('idinver') }}">

    <div class="form-group">
        <label for="nombre_evento">Nombre</label>
        <input type="text" name="edit_nombre_inversionista" id="edit_nombre_inversionista" class="form-control" id="" value="{{ $inversionista->nombre }}">
    </div>

    <div class="form-group">
        <label for="descripcion_evento">Descripcion</label>
        <textarea class="form-control" id="edit_descripcion_inversionista" name="edit_descripcion_inversionista" rows="3">{{ $inversionista->descripcion }}</textarea>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="fecha_evento">Correo</label>
                <input type="email" class="form-control" id="edit_email_inversionista" name="edit_email_inversionista" value="{{ $inversionista->correo }}">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="hora_evento">Telefono</label>
                <input type="text" class="form-control" id="edit_telefono_inversionista" name="edit_telefono_inversionista" value="{{ $inversionista->telefono }}">
            </div>
        </div>
    </div>

    <div class="row">
    <label for="exampleFormControlInput1">Imagen</label>
    <input type="file" name="edi_tfile" id="edi_tfile" accept="image/*">
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