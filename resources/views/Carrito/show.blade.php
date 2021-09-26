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
                    <th scope="col">Nombre</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">precio</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>producto 1</th>
                    <td>1</td>
                    <td>10000</td>
                    <td>
                        <a onclick="launchModal('producto 1',2);" style="cursor: pointer; background-color: lightcoral;border-radius: 10px; padding: 10px; margin-right: 5%;">Eliminar</a>
                    </td>
                </tr>
                <tr>
                    <th>producto 2</th>
                    <td>1</td>
                    <td>20000</td>
                    <td>
                        <a onclick="launchModal('producto 2',3);" style="cursor: pointer; background-color: lightcoral;border-radius: 10px; padding: 10px; margin-right: 5%;">Eliminar</a>
                    </td>
                </tr>
                <tr>
                    <th>producto 3</th>
                    <td>1</td>
                    <td>30000</td>
                    <td>
                        <a onclick="launchModal('producto 3',4);" style="cursor: pointer; background-color: lightcoral;border-radius: 10px; padding: 10px; margin-right: 5%;">Eliminar</a>
                    </td>
                </tr>

                <!-- fila de total -->
                <tr>
                    <td>
                        <h2>Total:</h2>
                    </td>
                    <td></td>
                    <td>
                        <h2>$250.000</h2>
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

@endsection