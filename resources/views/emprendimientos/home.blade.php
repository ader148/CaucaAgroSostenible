@extends('layouts.layout_home')


@section('content')

<div class="text-center pt-5 mb-4 font-weight-bold ">
        <strong><h1>Emprendimientos y Asociaciones</h1></strong>
        <br>
    </div>
    
    <section name="emprendimientos" id="galeria" class="container-fluid">
        <div class="row" style="padding-right: 4%; padding-left: 4%;">
        @foreach ($emprendimientos as $emprendimiento)   
            <!-- inicio emprendimiento -->
            <div class="col-lg-4 col-md-6 col-sm-1">
                <div class="text-left pt-1 font-weight-bold">
                    <h3 style="color: black; margin: 0px;">#{{ $emprendimiento->nombre }}</h3>
                </div>
                <div class="text-justify pt-2">
                    <p>{{ $emprendimiento->descripcion }}</p>
                </div>
                <img src="{{ URL::asset($emprendimiento->imagen) }}" alt="emprendimiento">
                
                <div class="container-redes text-left pt-2">
                    <a href="https://www.instagram.com/{{ $emprendimiento->redes }}" class="instagram"> <i class="fa fa-instagram"> @<?php echo  $emprendimiento->redes; ?></i></a>
                </div>
            </div>
            <!-- fin emprendimiento -->
            @endforeach
            

           
            
    </section>

@endsection