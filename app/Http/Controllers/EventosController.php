<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\File;
use App\Models\Evento;
use Brian2694\Toastr\Facades\Toastr;
use DateTime;
use Illuminate\Support\Facades\Storage;
use Throwable;

class EventosController extends Controller
{
    public function index()
    {
        return view('eventos.home');
    }

    public function list(){
        $eventos = Evento::all();

        return view('eventos.listar')->with('eventos',$eventos);
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

        $posicion = $latitud.','.$longitud;

        try {
            Evento::create([
                'nombre' => $nombre,
                'descripcion' => $descripcion,
                'ubicacion' => $posicion,
                'fecha' => $fecha_formateada,
                'imagen' => $url,
            ]);

            Toastr::success('Evento agregado correctamente', '', ["positionClass" => "toast-top-center"]);

            //return redirect()->back();
            return redirect('/admin/listarEventos');

        } catch (Throwable $e) {
            Toastr::error('Error al crear el Evento', '', ["positionClass" => "toast-top-center"]);
            //return redirect()->back();
            return redirect('/admin/listarEventos');
        }

    }
}

//correr este comendo
//php artisan storage:link