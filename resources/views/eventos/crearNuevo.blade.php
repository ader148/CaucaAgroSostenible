@extends('layouts.dashboard')

@section('content')


<div class="container">
    <h2>Crear Evento</h2>

    <div class="row">
        <form>

            <div class="form-group">
                <label for="exampleFormControlInput1">Nombre del evento</label>
                <input type="text" class="form-control" id="" placeholder="Nombre del evento">
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Descripcion</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Por favor introduce la decripcion del evento"></textarea>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Descripcion</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Por favor introduce la decripcion del evento"></textarea>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Fecha</label>
                        <input type="date" class="form-control" id="" placeholder="Latitud,Logitud">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Hora</label>
                        <input type="time" class="form-control" id="" placeholder="Latitud,Logitud">
                    </div>
                </div>
            </div>

            <div class="row">
            <label for="exampleFormControlInput1">Ubicacion</label>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Latitud</label>
                        <input type="text" id="txtLat" class="form-control" style="color:red" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Longitud</label>
                        <input type="text" id="txtLng" class="form-control" style="color:red" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>
            </div>


            <!-- MAPA -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmBOapzbZrXsU0-bR7mpjhgdt1blPv9j0"></script>
    <script type="text/javascript">
        function initialize() {
            // Creating map object
            var map = new google.maps.Map(document.getElementById('map_canvas'), {
                zoom: 16,
                center: new google.maps.LatLng(2.442417, -76.6082392,17),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });

            // creates a draggable marker to the given coords
            var vMarker = new google.maps.Marker({
                position: new google.maps.LatLng(2.442417, -76.6082392,17),
                draggable: true
            });

            // adds a listener to the marker
            // gets the coords when drag event ends
            // then updates the input with the new coords
            google.maps.event.addListener(vMarker, 'dragend', function (evt) {
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
            <!-- FIN MAPA -->



        </form>
    </div>
</div>


@endsection