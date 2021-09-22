@extends('layouts.layout_home')


@section('content')

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

@endsection