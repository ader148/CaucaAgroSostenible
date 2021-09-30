@extends('layouts.layout_home')


@section('content')
<!--Inicia sección Agro oferta-->
<section name="agroOferta" id="oferta" class="container-fluid">
    <div class="title text-center">
        <strong>
            <h1>Agro Ofertas</h1>
        </strong>
    </div>
    <!--Barra de busqueda -->
    <div class="row">
        <div class="col">
            <div class="container">
                <div class="wrap">
                    <div class="search">
                        <input type="text" id="searchTerm" class="searchTerm" placeholder=" ¿Qué deseas buscar?">
                        <button type="submit" id="buttonSearch" class="searchButton">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Fin Barra de busqueda -->

    <div class="row ml-5 mr-5">
        <div class="col-lg-4">
            
            <div class="container">
                <div class="content">
                    <a href="#" target="_blank">  
                    <div class="content-overlay">
                    </div>
                    <img class="content-image" src="./img/potato.jpg">
                    <div class="content-details fadeIn">
                        <h3 class="content-title">Hasta 20% OFF</h3>
                        <h2 class="content-title">en Verduras</h2> 
                        <p class="content-description">Ver oferta</p>
                    </div>
                    </a>
                </div>
            </div>

        </div>
        <div class="col-lg-4">
            <div class="container">
                <div class="content">
                    <a href="#" target="_blank">  
                    <div class="content-overlay">
                    </div>
                    <img class="content-image" src="./img/fruit.jpg">
                    <div class="content-details fadeIn">
                        <h3 class="content-title">Hasta 20% OFF</h3>
                        <h2 class="content-title">en Verduras</h2> 
                        <p class="content-description">Ver oferta</p>
                    </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="container">
                <div class="content">
                    <a href="#" target="_blank">  
                    <div class="content-overlay">
                    </div>
                    <img class="content-image" src="./img/cereal2.jpg">
                    <div class="content-details fadeIn">
                        <h3 class="content-title">Hasta 20% OFF</h3>
                        <h2 class="content-title">en Verduras</h2> 
                        <p class="content-description">Ver oferta</p>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row ml-5 mr-5 mb-5">
        <div class="col-lg-6">
            <div class="container">
                <div class="content">
                    <a href="#" target="_blank">  
                    <div class="content-overlay">
                    </div>
                    <img class="content-image" src="./img/oferta1.png">
                    <div class="content-details fadeIn">
                        <h3 class="content-title">Hasta 20% OFF</h3>
                        <h2 class="content-title">en Verduras</h2> 
                    </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="container">
                <div class="content">
                    <a href="#" target="_blank">  
                    <div class="content-overlay">
                    </div>
                    <img class="content-image" src="./img/oferta2.png">
                    <div class="content-details fadeIn">
                        <h3 class="content-title">Hasta 20% OFF</h3>
                        <h2 class="content-title">en Verduras</h2> 
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--termina sección Agro oferta-->
@endsection