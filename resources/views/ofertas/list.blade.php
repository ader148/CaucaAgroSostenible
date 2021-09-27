@extends('layouts.dashboard')

@section('content')


<div class="container">

    <div class="row">
        <div class="col-sm-6" style="text-align: left;">
            <h2>Ofertas</h2><br>
        </div>
        <div class="col-sm-6" style="text-align: right;">
            <a href="{{ route('/admin/crearOferta') }}" class="btn btn-primary" style="color: white; background-color: #679133; border: none;border-radius: 20px; padding-left: 20px; padding-right: 20px;font-size: 12pt;">
                Agregar nueva oferta +
            </a>
        </div>
    </div>

    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th></th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Tipo Descuento</th>
                    <th scope="col">Descuento</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ofertas as $oferta)
                <tr>
                    <th><img src="{{ url($oferta->imagen) }}" alt="" style="height: auto; width: 100px;"></th>
                    <th>{{ $oferta->nombre }}</th>
                    <td>{{ $oferta->cantidad }}</td>
                    <td>{{ $oferta->tipo_descuento }}</td>
                    <td>{{ $oferta->descuento }}</td>
                    <td>
                        <a href="{{ route('/admin/EditarOferta') }}/{{ $oferta->id }}" style="cursor: pointer; background-color: antiquewhite; border-radius: 10px; padding: 10px; margin-right: 5%;">Editar</a>
                        <a onclick="launchModal('<?php echo ($oferta->nombre); ?>',<?php echo ($oferta->id); ?>);" style="cursor: pointer; background-color: lightcoral;border-radius: 10px; padding: 10px; margin-right: 5%;">Eliminar</a>
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
        Esta seguro que desea eliminar la oferta
        <p id="nameOfer"></p>
        <input id="idOfer" type="hidden" value="">
      </div>
      <div class="modal-footer" style="border: none;">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="hidemodal();">Cancelar</button>
        <button type="button" class="btn btn-danger" onclick="deleteOfert();">Eliminar</button>
      </div>
    </div>
  </div>
</div>
<!-- fin -->


<script>
    function launchModal(nameuser,idinver){
        //seteamos el nombre del usuario a eliminar
        $('#nameOfer').text(nameuser);
        $('#idOfer').val(idinver);
        $('#exampleModal').modal('show');
    }

    function hidemodal(){
        $('#exampleModal').modal('hide');
    }
    function deleteOfert(){

        var idOfer = $('#idOfer').val();

        $.ajax({
               type:'POST',
               url:'<?php echo(route('/admin/EliminarOferta')); ?>',
               data:{"_token": "{{ csrf_token() }}",
                     "id":idOfer,
                    },
               success:function(data) {
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