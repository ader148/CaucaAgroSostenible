@extends('layouts.layout_home')


@section('content')

<section name="inversionistas" id="inversionistas" class="container-fluid">
    <div class="container">
        <div class="title text-center">
            <strong><h1 class="mb-5">Inversionistas</h1></strong>
            <p class="text-justify">Conectamos inversionistas con productores desde montos mínimos, con el fin de impulsar proyectos agrícolas rentables. Creemos en el campo colombiano, por eso trabajamos para apoyar a pequeños y medianos agricultores en sus proyectos productivos con un acompañamiento continuo desde la estructuración y establecimiento, hasta la justa comercialización de su producción. Contamos con producto de exportación en diferentes regiones del país.</p> 
        </div>

        <div class="row">    
            <div class="title text-center bg-img">
                <strong><h3 class="mb-4">Comunidad de Inversionistas</h3></strong>
            </div>


                        <div class="col mt-5">
                        <button type="submit" class="btn btn-primary" style="color: white; background-color: #679133; border: none; border-radius: 20px; padding-left: 40px; padding-right: 40px;font-size: 14pt;">{{ __('Leer más') }}</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card card-01">
                    <div class="profile-box">
                        <img class="card-img-top rounded-circle" src="https://avatars0.githubusercontent.com/u/2575262?s=460&v=4" alt="Card image cap">
                        <br>
                        <h4 class="card-title mt-5">Caroline Rodrigues</h4>
                        <p class="card-text text-justify ml-3 mr-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <span class="social-box">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </span>

                        <div class="col mt-5">
                        <button type="submit" class="btn btn-primary" style="color: white; background-color: #679133; border: none; border-radius: 20px; padding-left: 40px; padding-right: 40px;font-size: 14pt;">{{ __('Leer más') }}</button>
                        </div>
                    </div>
                </div>
            </div>

            @foreach ($inversionistas as $inversionista)
            <!-- inicio inversionista -->

            <div class="col-md-4">
                <div class="card card-01">
                    <div class="profile-box">
                        <img class="card-img-top rounded-circle" src="{{ URL::asset($inversionista->imagen) }}" alt="Card image cap">
                        <br>
                        <h4 class="card-title mt-5">{{ $inversionista->nombre }}</h4>
                        <p class="card-text text-justify ml-3 mr-3">{{ $inversionista->descripcion }}</p>
                        <span class="social-box">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </span>

                        <div class="col mt-5">
                        <button type="submit" class="btn btn-primary" style="color: white; background-color: #679133; border: none; border-radius: 20px; padding-left: 40px; padding-right: 40px;font-size: 14pt;">{{ __('Leer más') }}</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- fin -->
            @endforeach
            
        </div>
    </div>
</section>

@endsection