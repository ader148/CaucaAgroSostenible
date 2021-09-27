@extends('layouts.layout_home')


@section('content')

<section name="eventos" id="eventos" class="container-fluid">
    <div class="container">
        <div class="title text-center">
            <strong><h1 class="mb-4">Eventos</h1></strong>
        </div>
        <div class="row mb-5 mr-2">
            <div class="col-4">
                <div class="row mt-4 mb-4">
                    <img src="./img/imgEvento.jpg" alt="emprendimiento">
                </div>
                <div class="row">
                    <img src="./img/img1.jpg" alt="emprendimiento">
                    <h6>aqui va el mapa</h6>
                </div>
            </div>
            <div class="col-8">
                <div class="title text-justify">
                    <strong><h2 class="ml-2 mb-2 mt-0">EXPOFINCA SE HARÁ EN EL CENTRO DECONVENCIONES PLAZA MAYOR MEDELLÍN</h2></strong>
                    <h5 class="ml-2 text-left mb-4">DOMINGO, 3 1 DE OCTUBRE DEL 2021</h5>   
                    <p class="ml-2 text-justify">Conectamos inversionistas con productores desde montos mínimos, con el fin de impulsar proyectos agrícolas rentables. Creemos en el campo colombiano, por eso trabajamos para apoyar a pequeños y medianos agricultores en sus proyectos productivos con un acompañamiento continuo desde la estructuración y establecimiento, hasta la justa comercialización de su producción. Contamos con producto de exportación en diferentes regiones del país.</p> 
            </div>
            </div>
        </div>
    </div>
</section>

@endsection