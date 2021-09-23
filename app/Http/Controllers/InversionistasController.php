<?php

namespace App\Http\Controllers;

use App\Models\Inversionista;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Brian2694\Toastr\Facades\Toastr;
use Throwable;

class InversionistasController extends Controller
{
    public function index(){
        return view('inversionistas.home');
    }


    public function list(){
        $inversionistas = Inversionista::all();
        return view('inversionistas.list')->with('inversionistas',$inversionistas);
    }

    protected function create(Request $request){

        $request->validate([
            'file' => 'required|image'
        ]);

        $imagen = $request->file('file')->store('public/inversionistas');
        $url = Storage::url($imagen);
        
        $nombre = $request->input('nombre_inversionista');
        $descripcion = $request->input('descripcion_inversionista');
        $correo = $request->input('email_inversionista');
        $telefono = $request->input('telefono_inversionista');
        $imagen = $url;
        
        try {
            Inversionista::create([
                'nombre' => $nombre,
                'imagen' => $imagen,
                'descripcion' => $descripcion,
                'correo' => $correo,
                'telefono' => $telefono,                
            ]);

            Toastr::success('Inversionista creado correctamente', '', ["positionClass" => "toast-top-center"]);

            //return redirect()->back();
            return redirect('/admin/listarInversionistas');

        } catch (Throwable $e) {
            Toastr::error('Error al crear el Inversionista', '', ["positionClass" => "toast-top-center"]);
            //return redirect()->back();
            return redirect('/admin/listarInversionistas');
        }

    }
}
