@extends('layouts.layout_home')


@section('content')

<section name="canastaAgricola" id="canasta" class="container-fluid" style="margin-bottom: 7%;">
    <div class="title text-center">
        <strong>
            <h1>Eventos</h1>
        </strong>
    </div>

    

    <div class="row" style="padding-left: 10%; padding-right: 10%;">
    @foreach ($eventos as $evento)
        <!-- inicio evento -->
        <div class="col-lg-4">
            <div class="container" style="margin-top: 0px;">
                <div class="content">
                    <a href="{{ url('/detalleEvento/') }}{{'/'}}{{ $evento->id }} " >  
                    <div class="content-overlay">
                    </div>
                    <img class="content-image" src="{{ URL::asset($evento->imagen) }}" style="margin-bottom: 71px;">
                    <div class="content-details fadeIn" style="text-align: left; top: 35%;">
                        <?php  
                                
                                $fecha_parcial = explode(" ",$evento->fecha);
                                
                        ?>
                        <h3 class="content-title" style="margin: 0px;font-size: 14pt;">{{ $evento->nombre  }}</h3>
                        <h2 class="content-title" style="font-size: 14pt;font-weight: 200; margin: 0px;">{{  $fecha_parcial[0] }}</h2>                         
                    </div>
                    </a>                    
            </div>
            <p style="color: black; margin-top: -12%; margin-left: 0px;     text-align: justify;">{{ $evento->descripcion }}</p>         
            </div>
        </div>
        <!-- fin evento -->
    @endforeach
        

    </div>
    
</section>

@endsection