@extends('layouts.dashboard')

@section('content')


<div class="container">

    <div class="row">
        <div class="col-sm-12" style="text-align: left;">
            <h2>Editar Producto</h2><br>
        </div>
        
    </div>

    <div class="row">
    <form action="{{ route('/admin/EditarProducto') }}" method="post" enctype="multipart/form-data">

@csrf

    <input type="hidden" id="id_producto" name="id_producto" value="{{ Request('idProd') }}">

    <div class="form-group">
        <label for="nombre_evento">Nombre</label>
        <input type="text" name="edit_nombre_producto" id="edit_nombre_producto" class="form-control" id="" value="{{ $producto->nombre }}">
    </div>

    <div class="form-group">
        <label for="descripcion_evento">Precio</label>
        <input type="number" class="form-control" id="edit_precio_producto" name="edit_precio_producto" value="{{ $producto->precio }}">
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label for="fecha_evento">Cantidad</label>
                <input type="number" class="form-control" id="edit_cantidad_producto" name="edit_cantidad_producto" value="{{ $producto->cantidad }}">
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