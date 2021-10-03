@extends('layouts.dashboard')

@section('content')


<div class="container">

    <div class="row">
        <div class="col-sm-12" style="text-align: left;">
            <h2>Crear Producto</h2><br>
        </div>

    </div>

    <div class="row">
        <form action="{{ route('/admin/crearProducto') }}" method="post" enctype="multipart/form-data">

            @csrf
            <div class="form-group">
                <label for="nombre_evento">Nombre</label>
                <input type="text" name="nombre_producto" id="nombre_producto" class="form-control" id="" placeholder="Nombre del producto">
            </div>

            <div class="form-group">
                <label for="">Precio</label>
                <input type="number" class="form-control" id="precio_producto" name="precio_producto" placeholder="20000">
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="fecha_evento">Cantidad</label>
                        <input type="number" class="form-control" id="cantidad_producto" name="cantidad_producto" placeholder="">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="descripcion_evento">Descripcion</label>
                <textarea class="form-control" id="descripcion_producto" name="descripcion_producto" rows="3" placeholder="Por favor introduce la decripcion del producto"></textarea>
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