@extends('layouts.layout_home')


@section('content')

<section name="canastaAgricola" id="canasta" class="container-fluid" style="margin-bottom: 7%;">
    <div class="title text-center">
        <strong>
            <h1>Evento</h1>
        </strong>
    </div>

    <?php 
                $ubicacion_completa = explode(",", $evento->ubicacion);
                $latitud= $ubicacion_completa[0];
                $lonjitud= $ubicacion_completa[1];            
            ?>

    <div class="row" style="padding-left: 10%; padding-right: 10%; text-align: center;">
        <div class="col-sm-6">
            <img src="http://localhost/caucaAgroSostenible/public/storage/inversionistas/3X3UoTMWsGbNyECQFp0Tu9GaBUDD552C4bbcDNcK.jpg" alt="" style="max-width: 200px;margin-bottom: 12%;">

            <!-- inicio mapa -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
            <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmBOapzbZrXsU0-bR7mpjhgdt1blPv9j0"></script>
            <script type="text/javascript">
                function initialize() {
                    // Creating map object
                    var map = new google.maps.Map(document.getElementById('map_canvas'), {
                        zoom: 16,
                        center: new google.maps.LatLng(<?php echo($latitud); ?>, <?php echo($lonjitud); ?>, 17),
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    });

                    // creates a draggable marker to the given coords
                    var vMarker = new google.maps.Marker({
                        position: new google.maps.LatLng(<?php echo($latitud); ?>, <?php echo($lonjitud); ?>, 17),
                        draggable: true
                    });

                    // adds a listener to the marker
                    // gets the coords when drag event ends
                    // then updates the input with the new coords
                    google.maps.event.addListener(vMarker, 'dragend', function(evt) {
                        $("#txtLat").val(evt.latLng.lat().toFixed(6));
                        $("#txtLng").val(evt.latLng.lng().toFixed(6));

                        map.panTo(evt.latLng);
                    });

                    // centers the map on markers coords
                    map.setCenter(vMarker.position);

                    // adds the marker on the map
                    vMarker.setMap(map);
                }
            </script>
            <div id="map_canvas" style="width: auto; height: 500px;"></div>
            <!-- fin mapa -->
        </div>
        <div class="col-sm-6">
            <h1>{{ $evento->nombre }}</h1>
            <h4 style="color: gray;">{{ $evento->fecha }}</h4>
            <br>
            <p>
                {{ $evento->descripcion }}
            </p>
        </div>
    </div>

</section>


<script>

initialize();

</script>

@endsection