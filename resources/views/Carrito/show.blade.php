@extends('layouts.layout_home')


@section('content')

<section name="canastaAgricola" id="canasta" class="container-fluid" style="margin-bottom: 7%;">
    <div class="title text-center">
        <strong>
            <h1>Carrito de compras</h1>
        </strong>
    </div>


    <div class="row" style="padding-left: 6%;padding-right: 6%;">



        <table class="table" style="text-align: center;">
            <thead>
                <tr>
                    <th></th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">precio</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($shopping_cart->shopping_cart_details as $shopping_cart_detail )
                <tr>
                    <th><img src="{{ url($shopping_cart_detail->product->imagen) }}" alt="" style="height: 100px; width: auto;"></th>
                    <th>{{ $shopping_cart_detail->product->nombre }}</th>
                    <td>{{ $shopping_cart_detail->product->cantidad }}</td>
                    <td>{{ $shopping_cart_detail->product->precio }}</td>
                    <td>
                        <a onclick="deleteProductoCarrito(<?php echo $shopping_cart_detail->product->id  ?>);" style="cursor: pointer; background-color: lightcoral;border-radius: 10px; padding: 10px; margin-right: 5%;">Eliminar</a>
                    </td>


                </tr>
                @endforeach


                <!-- fila de total -->
                <tr>
                    <td>
                        <h2>Total:</h2>
                    </td>
                    <td></td>
                    <td>
                        <h2>$ {{ $shopping_cart->total_price()}} </h2>
                    </td>
                    <td></td>
                </tr>
                <!-- fin -->
            </tbody>
        </table>

        <div class="row" style="text-align: center; padding-left: 40%; padding-right: 40%; margin-top: 3%;">
            <button type="submit" class="btn btn-primary" style="color: white; background-color: #679133; border: none;border-radius: 20px; padding-left: 60px; padding-right: 60px;font-size: 14pt;">
                {{ __('Ir a pagar') }}
            </button>
        </div>

    </div>
</section>

<style>
    th{
        vertical-align: middle !important;
    }

    td{
        vertical-align: middle !important;
    }
</style>

<script>
    function deleteProductoCarrito(id_shopping_detail) {

        //var idEvent = $('#idEvent').val();

        //console.log("este es el id de inverisonista"+ idinver);

        $.ajax({
            type: 'POST',
            url: '<?php echo (route('/EliminarProductoCarrito')); ?>',
            data: {
                "_token": "{{ csrf_token() }}",
                "id": id_shopping_detail,
            },
            //data:'_token = <?php echo csrf_token() ?>',
            success: function(data) {
                //console.log(data);
                if (data == 1) {
                    //agregar mensaje
                    location.reload(true);
                } else {
                    //agregar mensaje
                    location.reload(true);
                }
                //$("#msg").html(data.msg);
            }
        });

    }
</script>

@endsection