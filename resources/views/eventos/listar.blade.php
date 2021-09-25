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

        <div class="card" style="width: 25rem; padding: 0px; margin: 16px;">
            <img src="{{ url($evento->imagen) }}" class="card-img-top" alt="..." style="max-height: 150px; object-fit: cover; object-position: center;">
            <div class="card-body" style="padding-bottom: 17% !important;">
                <h5 class="card-title">{{ $evento->nombre }}</h5>
                <p class="card-text">{{ $evento->descripcion }}</p>
                <p class="card-text"><Strong>fecha y hora</Strong> {{ $evento->descripcion }}</p>

                <div class="row" style="position: absolute; width: 100%; bottom: 5%; left: 3%;">
                    <div class="col-sm-3" style="padding: 0px; text-align: center;">
                    <a href="{{ route('/admin/EditarEvento') }}/{{ $evento->id }}" style="cursor: pointer; background-color: antiquewhite; border-radius: 10px; padding: 10px; margin-right: 5%;">Editar</a>
                    </div>

                    <div class="col-sm-3" style="padding: 0px; text-align: center;">
                        <a onclick="launchModal('<?php echo ($evento->nombre); ?>',<?php echo ($evento->id); ?>);" style="cursor: pointer; background-color: lightcoral;border-radius: 10px; padding: 10px; margin-right: 5%;">Eliminar</a>                        
                    </div>                      
                </div>
            </div>



            <?php
            $cordenadas = explode(",", $evento->ubicacion);
            $latitud = $cordenadas[0];
            $logitud = $cordenadas[1];
            ?>
        </div>
        @endforeach
    </div>

    
</div>


<!-- modal delete user -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="border: none;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="hidemodal();">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="text-align: center; font-size: 14pt;">
        Esta seguro que desea eliminar el evento
        <p id="nameEvent"></p>
        <input id="idEvent" type="hidden" value="">
      </div>
      <div class="modal-footer" style="border: none;">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="hidemodal();">Cancelar</button>
        <button type="button" class="btn btn-danger" onclick="deleteInver();">Eliminar</button>
      </div>
    </div>
  </div>
</div>
<!-- fin -->

<script>
    function launchModal(nameEvent,idievent){
        //seteamos el nombre del usuario a eliminar
        $('#nameEvent').text(nameEvent);
        $('#idEvent').val(idievent);
        $('#exampleModal').modal('show');
    }

    function hidemodal(){
        $('#exampleModal').modal('hide');
    }
    function deleteInver(){

        var idEvent = $('#idEvent').val();

        //console.log("este es el id de inverisonista"+ idinver);

        $.ajax({
               type:'POST',
               url:'<?php echo(route('/admin/EliminarEvento')); ?>',
               data:{"_token": "{{ csrf_token() }}",
                     "id":idEvent,
                    },
               //data:'_token = <?php echo csrf_token() ?>',
               success:function(data) {
                   //console.log(data);
                   if(data==1){
                       //agregar mensaje
                    location.reload(true);
                   }else{
                       //agregar mensaje
                    location.reload(true);
                   }
                  //$("#msg").html(data.msg);
               }
            });

    }



</script>


@endsection