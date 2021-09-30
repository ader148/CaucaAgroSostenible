@extends('layouts.layout_home')




@section('content')
<section name="canastaAgricola" id="canasta" class="container-fluid" style="margin-bottom: 7%;">
    <div class="title text-center">
        <strong>
            <h1>Canasta Agricola</h1>
        </strong>
    </div>
    <!--Barra de busqueda -->
    <div class="row">
        <div class="col">
            <div class="container mb-5">
                <div class="wrap">
                    <div class="search">
                        <input type="text" id="searchTerm" class="searchTerm" placeholder=" ¿Qué deseas buscar?">
                        <button type="submit" id="buttonSearch"class="searchButton">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Fila principal -->
    <div class="row ml-3 mt-3">
        <!--Columna 1 -->
        <div class="col-3 mr-5 mt-3">
            <div class="list-group list-group-flush">
                <a class="list-group-item disabled">Categoría de Productos</a>
                <a href="#" class="list-group-item list-group-item-action">Cereales</a>
                <a href="#" class="list-group-item list-group-item-action">Hortalizas</a>
                <a href="#" class="list-group-item list-group-item-action">Frutales</a>
                <a href="#" class="list-group-item list-group-item-action">Raices y Tuberculos</a>
                <a href="#" class="list-group-item list-group-item-action">Leguminosas</a>
            </div>
        </div>

        <!--Columna 2 -->
        <div class="col-8">
            <!--Fila 1 dentro de la columna 2 -->
            <div class="row ml-4">
                @foreach ($productos as $producto)
                <div class="card-deck col-sm-4" style="width: 50rem;" href="#">
                    <!-- inicio producto -->
                    <div class="card text-center">
                        <input type="hidden" value="producto_id" name="producto_id" value="{{ $producto->id }}">
                        <div class="card-block">
                            <img alt="Card image cap" class="card-img-top img-fluid" src="{{ URL::asset($producto->imagen) }}">
                            <div class="card-body">
                                <h5 class="card-title">{{$producto->nombre }}</h5>
                                <h6>$ {{ $producto->precio }}</h6>
                                <br>
                                <a href="#" class="producto"> <i class="" onclick="addProductoCarrito(<?php echo $producto->id ?>)"> Añadir al carrito</i></a>
                                <a onclick="launchModal('<?php echo ($producto->nombre); ?>','<?php echo ($producto->cantidad); ?>','<?php echo ($producto->precio); ?>',<?php echo ($producto->id); ?>);" type="button" class="btn button" data-bs-toggle="modal" data-bs-target="#myModal"><i>Más Detalles</i></a>
                            </div>
                        </div>
                    </div>
                    <!-- fin del producto -->
                </div>
                @endforeach
                </div>
                </div>
            </div>
        </div>
        
        <!-- The Modal -->
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
            <!-- Modal Header -->
                    <div class="modal-header">
                        <h5 class="modal-title">Descripción del Producto</h5>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body text-center mt-4">
                        <h4 id="nameProd"></h4>
                        <h4> x </h4>
                        <h4 id="cantidadProd"></h4>
                        <br>
                        <h4>$ </h4>
                        <h4 id="precioProd"></h4>
                        <input id="idProd" type="hidden" value="">
                            
                        
                        <p class="text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur distinctio praesentium sit dolores, eligendi dolorem fugit! Asperiores eveniet reprehenderit distinctio aliquam, quas ullam, eligendi, et eum in iste accusantium! Ipsum?
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius porro cum quaerat unde vero, nulla voluptate autem? Ipsum sunt animi saepe officiis. Necessitatibus tempore harum iusto. Laboriosam dignissimos aspernatur praesentium!
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis vel inventore voluptas praesentium, error quisquam placeat nihil explicabo quibusdam dolorem enim dignissimos laudantium velit sit eius possimus voluptate harum nulla!.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
                </div>
            </div>
        </div>
    </div>

</section>


<script>
    function addProductoCarrito(id_producto) {

        $.ajax({
            type: 'POST',
            url: '<?php echo (route('/agregarProductoCarrito')); ?>',
            data: {
                "_token": "{{ csrf_token() }}",
                "id_producto": id_producto,
            },
            //data:'_token = <?php echo csrf_token() ?>',
            success: function(data) {
                toastr["success"]("Producto agregado al carrito");
            }
        });
    }

    function launchModal(nameprod,cantidadProd,precioprod,idprod){
        //seteamos el nombre del usuario a eliminar
        $('#nameProd').text(nameprod);
        $('#cantidadProd').text(cantidadProd);
        $('#precioProd').text(precioprod);
        $('#idProd').val(idprod);
        $('#myModal').modal('show');
    }

</script>
@endsection