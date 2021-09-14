<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\File;
use Brian2694\Toastr\Facades\Toastr;
use DateTime;
use Illuminate\Support\Facades\Storage;

class EventosController extends Controller
{
    public function index()
    {
        return view('eventos.home');
    }

    protected function create(Request $request)
    {
        $request->validate([
            'file' => 'required|image'
        ]);

        $imagen = $request->file('file')->store('public/eventos');
        $url = Storage::url($imagen);

        $nombre = $request->input('nombre_evento');
        $descripcion = $request->input('descripcion_evento');
        $latitud = $request->input('txtLat');
        $longitud = $request->input('txtLng');
        $fecha = $request->input('fecha_evento');
        $hora = $request->input('hora_evento');

        $time_input = strtotime("$fecha $hora");

        //$date_input = getDate($time_input);
        $fecha_formateada = date("Y-m-d H:i:s", $time_input);

        $posicion = $latitud + ',' + $longitud;


        /*EventosController::create([
            '' => '',
        ]);*/

        Toastr::success('Panal agregado correctamente', '', ["positionClass" => "toast-top-center"]);
        //return $url;
        return redirect()->back();
    }
}

//correr este comendo
//php artisan storage:link