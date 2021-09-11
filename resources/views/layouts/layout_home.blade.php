<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/body.css') }}" rel="stylesheet">
    

</head>
<body>
    @include('header')
    <div class="text-center pt-5 font-weight-bold ">
        <strong><h1>Emprendimientos y Asociaciones</h1></strong>
        <br>
    </div>
    
    <section name="emprendimientos" id="galeria" class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-1">
                <div class="text-left pt-1 font-weight-bold">
                    <h3>#HéroesDelAgro</h3>
                </div>
                <div class="text-justify pt-2">
                    <p>Matilde es hija de la pandemia,la emergencia sanitaria obligó aLina a reinventar suemprendimiento y a descubriren las redes una nuevaplataforma para generar ventas,pero la alejó de una de la cosasque más le gusta: el contacto con la gente.</p>
                </div>
                <img src="./img/img1.jpg" alt="emprendimiento">
                
                <div class="container-redes text-left pt-2">
                    <a href="https://www.instagram.com/" class="instagram"> <i class="fa fa-instagram"> @instagram</i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-1">
                <img src="./img/coffe.jpg" alt="emprendimiento">
                <div class="text-left pt-1 font-weight-bold">
                    <h3>Cerro Brujo</h3>
                </div>
                <div class="text-justify pt-2">
                    <p>Iniciativa proba con más de 8 años de trayectoria y que impulsa losemprendimientos de la Caficultura Caucana. Aún estás a tiempo deconocer y disfrutar de los cafés de nuestro departamento. Ubicados enCalle 8N #8 -11 del barrio Santa Clara en Popayán.</p>
                </div>
                <div class="container-redes text-left pt-2">
                    <a href="https://www.instagram.com/" class="instagram"> <i class="fa fa-instagram"> @instagram</i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-1">
                <div class="container-redes text-left pt-1 font-weight-bold ">
                    <h3>#DelCaucaATuMesa</h3>
                </div>
                <div class="text-justify pt-2">
                    <p>En nuestro campo se cosechanproductos de excelente calidad,por eso desde #DelCaucaATuMesa llegamoshasta la puerta sus hogares concombos llenos de sabor Caucano.</p>
                    <p>¡Este jueves 15 de septiembrecompra Caucano, apoya a nuestrosagricultores y haz parte de lareactivación económica deldepartamento! Domicilios y pedidos al 313 5357470.</p>
                </div>
                <img src="./img/img2.jpg" alt="emprendimiento">
                <div class="container-redes text-left pt-2">
                    <a href="https://www.instagram.com/" class="instagram"> <i class="fa fa-instagram"> @instagram</i></a>
                </div>
            </div>
        </div>
            
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="bootstrap.bundle.min.js"></script>
</body>
@include('canasta')
@include('footer')
</html>