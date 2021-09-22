@extends('layouts.dashboard')

@section('content')

<!-- MAPA -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmBOapzbZrXsU0-bR7mpjhgdt1blPv9j0"></script>


<div class="container">

    <div class="row">
        <div class="col-sm-6" style="text-align: left;">
        <h2>Eventos</h2><br>
        </div>
        <div class="col-sm-6" style="text-align: right;">
        <a href="{{ route('/admin/crearEvento') }}" class="btn btn-primary" style="color: white; background-color: #679133; border: none;border-radius: 20px; padding-left: 20px; padding-right: 20px;font-size: 12pt;">
            Crear Evento +
        </a>
        </div>
    </div>

    <div class="row">

        @foreach ($eventos as $evento)

        <div class="card" style="width: 30rem;padding: 0px;">
            <img src="{{ url($evento->imagen) }}" class="card-img-top" alt="..." style="max-height: 200px; object-fit: cover; object-position: center;">
            <div class="card-body">
                <h5 class="card-title">{{ $evento->nombre }}</h5>
                <p class="card-text">{{ $evento->descripcion }}</p>
                <p class="card-text"><Strong>fecha y hora</Strong> {{ $evento->descripcion }}</p>
            </div>

            <?php 
             $cordenadas = explode(",", $evento->ubicacion);
             $latitud = $cordenadas[0];
             $logitud = $cordenadas[1];
            ?>

            <div class="card-footer" style="padding: 0px;">
                <!-- inicio mapa -->
                <script type="text/javascript">
                function initialize() {
                    // Creating map object
                    var map = new google.maps.Map(document.getElementById('map_canvas{{ $loop->index }}'), {
                        zoom: 16,
                        center: new google.maps.LatLng(<?php echo $latitud ?>, <?php echo $logitud ?>, 17),
                        mapTypeId: google.maps.MapTypeId.ROADMAP,
                        mapTypeControl: false,
                        rotateControl:false,
                        fullscreenControl:false,
                    });

                    // creates a draggable marker to the given coords
                    var vMarker = new google.maps.Marker({
                        position: new google.maps.LatLng(<?php echo $latitud ?>, <?php echo $logitud ?>, 17),
                        draggable: true
                    });

                    // centers the map on markers coords
                    map.setCenter(vMarker.position);

                    // adds the marker on the map
                    vMarker.setMap(map);
                }
                initialize();
            </script>
            
            <div id="map_canvas{{ $loop->index  }}" style="width: auto; height: 200px;"></div>
                <!-- fin mapa -->
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection