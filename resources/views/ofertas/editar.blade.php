@extends('layouts.dashboard')

@section('content')


<div class="container">
    <h2>Editar Oferta</h2>

    <div class="row">
        <form action="{{ route('/admin/EditarOferta') }}" method="post" enctype="multipart/form-data">

            @csrf

            <input type="hidden" id="id_oferta" name="id_oferta" value="{{ $oferta->id }}">
            <div class="form-group">
                <label for="nombre_evento">Nombre de la oferta</label>
                <input type="text" name="edit_nombre_oferta" id="edit_nombre_oferta" class="form-control" id="" value="{{ $oferta->nombre }}">
            </div>

            <div class="form-group">
                <label for="descripcion_evento">Cantidad</label>
                <input type="number" class="form-control" id="edit_cantidad_oferta" name="edit_cantidad_oferta" rows="3" value="{{ $oferta->cantidad }}"></input>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="fecha_evento">Descuento</label>
                        <input type="number" class="form-control" id="edit_descuento_oferta" name="edit_descuento_oferta" value="{{ $oferta->descuento }}">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="hora_evento">Tipo Descuento</label><br>
                        <select id="edit_tipo_descuento_oferta" name="edit_tipo_descuento_oferta" class="form-control" required>
                            <option value="0">Seleccione una Opción</option>
                            <option value="porcentaje" {{$oferta->tipo_descuento == 'porcentaje'  ? 'selected' : ''}}>porcentaje</option>
                            <option value="precio" {{$oferta->tipo_descuento == 'precio'  ? 'selected' : ''}}>precio</option>
                        </select>
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

<style>
    div.toast-success {
        margin-top: 5% !important;
    }
</style>


@endsection