@extends('layouts.dashboard')

@section('content')


<div class="container">

    <div class="row">
        <div class="col-sm-6" style="text-align: left;">
            <h2>Inversionistas</h2><br>
        </div>
        <div class="col-sm-6" style="text-align: right;">
            <a href="{{ route('/admin/crearInversionista') }}" class="btn btn-primary" style="color: white; background-color: #679133; border: none;border-radius: 20px; padding-left: 20px; padding-right: 20px;font-size: 12pt;">
                Crear Inversionista +
            </a>
        </div>
    </div>

    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">correo</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($inversionistas as $inversionista)
                <tr>
                    <th>{{ $inversionista->nombre }}</th>
                    <td>{{ $inversionista->descripcion }}</td>
                    <td>{{ $inversionista->correo }}</td>
                    <td>{{ $inversionista->telefono }}</td>
                    <td> 
                         <a href="{{ route('/admin/EditarInversionista') }}/{{ $inversionista->id }}" style="cursor: pointer; background-color: antiquewhite; border-radius: 10px; padding: 10px; margin-right: 5%;">Editar</a>
                         <a onclick="launchModal('<?php echo ($inversionista->nombre); ?>',<?php echo ($inversionista->id); ?>);" style="cursor: pointer; background-color: lightcoral;border-radius: 10px; padding: 10px; margin-right: 5%;">Eliminar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
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
        Esta seguro que desea eliminar el usuario
        <p id="nameUSR"></p>
        <input id="idinver" type="hidden" value="">
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
    function launchModal(nameuser,idinver){
        //seteamos el nombre del usuario a eliminar
        $('#nameUSR').text(nameuser);
        $('#idinver').val(idinver);
        $('#exampleModal').modal('show');
    }

    function hidemodal(){
        $('#exampleModal').modal('hide');
    }
    function deleteInver(){

        var idinver = $('#idinver').val();

        //console.log("este es el id de inverisonista"+ idinver);

        $.ajax({
               type:'POST',
               url:'<?php echo(route('/admin/EliminarInvesionista')); ?>',
               data:{"_token": "{{ csrf_token() }}",
                     "id":idinver,
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