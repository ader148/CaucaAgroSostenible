@extends('layouts.layout_home')


@section('content')
    <section name="canastaAgricola" id="canasta" class="container-fluid">
        <div class="title text-center">
            <strong><h1>Canasta Agricola</h1></strong>
        </div>
         <!--Barra de busqueda -->
        <div class="row">
            <div class="col">
                <div class="container mb-5">
                    <div class="wrap">
                        <div class="search">
                            <input type="text" class="searchTerm" placeholder=" ¿Qué deseas buscar?">
                            <button type="submit" class="searchButton">
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
                    <div class="container">
                        <div class="card-deck" style="width: 50rem;">
                            <div class="card text-center">
                                <div class="card-block">
                                    <img alt="Card image cap" class="card-img-top img-fluid" src="./img/img2.jpg">
                                    <div class="card-body">
                                        <h5 class="card-title">Titulo del producto</h5>
                                        <h6>Precio</h6>
                                        <a href="#" class="producto"> <i class=""> Añadir al carrito</i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="card text-center">
                                <div class="card-block">
                                    <img alt="Card image cap" class="card-img-top img-fluid" src="./img/img2.jpg">
                                    <div class="card-body">
                                        <h5 class="card-title">Titulo del producto</h5>
                                        <h6>Precio</h6>
                                        <a href="#" class="producto"> <i class=""> Añadir al carrito</i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="card text-center">
                                <div class="card-block">
                                    <img alt="Card image cap" class="card-img-top img-fluid" src="./img/img2.jpg">
                                    <div class="card-body">
                                        <h5 class="card-title">Titulo del producto</h5>
                                        <h6>Precio</h6>
                                        <a href="#" class="producto"> <i class=""> Añadir al carrito</i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
                <!--Fila 2 dentro de la columna 2 -->
                <div class="row ml-4">
                    <div class="container">
                        <div class="card-deck" style="width: 50rem;">
                            <div class="card text-center">
                                <div class="card-block">
                                    <img alt="Card image cap" class="card-img-top img-fluid" src="./img/img2.jpg">
                                    <div class="card-body">
                                        <h5 class="card-title">Titulo del producto</h5>
                                        <h6>Precio</h6>
                                        <a href="#" class="producto"> <i class=""> Añadir al carrito</i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="card text-center">
                                <div class="card-block">
                                    <img alt="Card image cap" class="card-img-top img-fluid" src="./img/img2.jpg">
                                    <div class="card-body">
                                        <h5 class="card-title">Titulo del producto</h5>
                                        <h6>Precio</h6>
                                        <a href="#" class="producto"> <i class=""> Añadir al carrito</i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="card text-center">
                                <div class="card-block">
                                    <img alt="Card image cap" class="card-img-top img-fluid" src="./img/img2.jpg">
                                    <div class="card-body">
                                        <h5 class="card-title">Titulo del producto</h5>
                                        <h6>Precio</h6>
                                        <a href="#" class="producto"> <i class=""> Añadir al carrito</i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 
    </section>

@endsection