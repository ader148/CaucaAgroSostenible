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


    public function vistaEditar(){

        $id_inversionista = Request('idinver');

        $inversionista = Inversionista::find($id_inversionista);

        return view('inversionistas.editar')->with('inversionista',$inversionista);
    }


    protected function delete(Request $request){
        
        $id = $request->get('id');

        try {
            $res=Inversionista::where('id',$id)->delete();    
            echo(1);

        } catch (Throwable $e) {
            echo(0);
        }
        

    }


    protected function edit(Request $request){

        
        /*$request->validate([
            'edit_file' => 'required|image'
        ]);*/

        $id_inverisonista = $request->input('id_inversionista');

        //$imagen = $request->file('edit_file')->store('public/inversionistas');
        //$url = Storage::url($imagen);

        $nombre = $request->input('edit_nombre_inversionista');
        $descripcion = $request->input('edit_descripcion_inversionista');
        $correo = $request->input('edit_email_inversionista');
        $telefono = $request->input('edit_telefono_inversionista');
        //$imagen = $url;


        //actualizamos el inversionista       
        $inversionista = Inversionista::find($id_inverisonista);

        $inversionista->nombre = $nombre;
        $inversionista->descripcion = $descripcion;
        $inversionista->correo = $correo;
        $inversionista->telefono = $telefono;

        try {
            $inversionista->save();

            Toastr::success('Inversionista actualizado correctamente', '', ["positionClass" => "toast-top-center"]);
            return redirect('/admin/listarInversionistas');

        } catch (Throwable $e) {
            Toastr::error('Error al actualizar el Inversionista', '', ["positionClass" => "toast-top-center"]);
            return redirect('/admin/listarInversionistas');
        }


    }
}
