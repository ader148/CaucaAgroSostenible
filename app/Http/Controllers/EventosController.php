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
        $eventos = Evento::all();


        return view('eventos.home')->with('eventos',$eventos);
    }

    public function list(){
        $eventos = Evento::all();

        return view('eventos.listar')->with('eventos',$eventos);
    }


    protected function delete(Request $request){
        $id = $request->get('id');
        
        try {
            $res=Evento::where('id',$id)->delete();    
            echo(1);

        } catch (Throwable $e) {
            echo(0);
        }

    }


    public function vistaEditar(){
        $id_evento = Request('idEvent');

        $evento = Evento::find($id_evento);

        return view('eventos.editar')->with('evento',$evento);
    }

    public function detail(){
        $id_evento = Request('idEvento');

        //dd($id_evento);
        $evento = Evento::find($id_evento);

        return view('eventos.detalleEvento')->with('evento',$evento);
    }

    protected function edit(Request $request){

        $id_evento = $request->input('id_evento');
        
        $nombre = $request->input('edit_nombre_evento');
        $descripcion = $request->input('edit_descripcion_evento');
        $latitud = $request->input('edit_txtLat');
        $longitud = $request->input('edit_txtLng');
        $fecha = $request->input('edit_fecha_evento');
        $hora = $request->input('edit_hora_evento');

        $time_input = strtotime("$fecha $hora");

        $fecha_formateada = date("Y-m-d H:i:s", $time_input);

        $posicion = $latitud.','.$longitud;

        //buscamos el evento
        $evento = Evento::find($id_evento);

        $evento->nombre = $nombre;
        $evento->descripcion = $descripcion;
        $evento->ubicacion = $posicion;
        $evento->fecha = $fecha_formateada;

        try {
            $evento->save();

            Toastr::success('Evento actualizado correctamente', '', ["positionClass" => "toast-top-center"]);
            return redirect('/admin/listarEventos');

        } catch (Throwable $e) {
            Toastr::error('Error al actualizar el Evento', '', ["positionClass" => "toast-top-center"]);
            return redirect('/admin/listarEventos');
        }

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