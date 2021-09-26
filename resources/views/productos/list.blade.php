@extends('layouts.dashboard')

@section('content')


<div class="container">

    <div class="row">
        <div class="col-sm-6" style="text-align: left;">
            <h2>Productos</h2><br>
        </div>
        <div class="col-sm-6" style="text-align: right;">
            <a href="{{ route('/admin/crearProducto') }}" class="btn btn-primary" style="color: white; background-color: #679133; border: none;border-radius: 20px; padding-left: 20px; padding-right: 20px;font-size: 12pt;">
                Agregar nuevo producto +
            </a>
        </div>
    </div>

    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">precio</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                <tr>
                    <th>{{ $producto->nombre }}</th>
                    <td>{{ $producto->cantidad }}</td>
                    <td>{{ $producto->precio }}</td>                    
                    <td>
                        <a href="{{ route('/admin/EditarProducto') }}/{{ $producto->id }}" style="cursor: pointer; background-color: antiquewhite; border-radius: 10px; padding: 10px; margin-right: 5%;">Editar</a>
                         <a onclick="launchModal('<?php echo ($producto->nombre); ?>',<?php echo ($producto->id); ?>);" style="cursor: pointer; background-color: lightcoral;border-radius: 10px; padding: 10px; margin-right: 5%;">Eliminar</a>
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
        Esta seguro que desea eliminar el producto
        <p id="nameProd"></p>
        <input id="idProd" type="hidden" value="">
      </div>
      <div class="modal-footer" style="border: none;">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="hidemodal();">Cancelar</button>
        <button type="button" class="btn btn-danger" onclick="deleteUsr();">Eliminar</button>
      </div>
    </div>
  </div>
</div>
<!-- fin -->

<script>
    function launchModal(nameprod,idprod){
        //seteamos el nombre del usuario a eliminar
        $('#nameProd').text(nameprod);
        $('#idProd').val(idprod);
        $('#exampleModal').modal('show');
    }

    function hidemodal(){
        $('#exampleModal').modal('hide');
    }
    function deleteUsr(){

        var idProd = $('#idProd').val();

        
        $.ajax({
               type:'POST',
               url:'<?php echo(route('/admin/EliminarProducto')); ?>',
               data:{"_token": "{{ csrf_token() }}",
                     "id":idProd,
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