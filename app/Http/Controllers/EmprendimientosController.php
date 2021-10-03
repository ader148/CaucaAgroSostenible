<?php

namespace App\Http\Controllers;

use App\Models\Emprendimiento;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Throwable;
use Brian2694\Toastr\Facades\Toastr;

class EmprendimientosController extends Controller
{
    public function index(){

        $emprendimientos = Emprendimiento::all();

        return view('emprendimientos.home')->with('emprendimientos',$emprendimientos);
    }

    public function list(){
        //dd("dojsd");
        $emprendimientos = Emprendimiento::all();

        return view('emprendimientos.listar')->with('emprendimientos',$emprendimientos);
    }


    public function create(Request $request){
        
        $request->validate([
            'file' => 'required|image'
        ]);

        $imagen = $request->file('file')->store('public/emprendimientos');
        $url = Storage::url($imagen);

        $nombre = $request->input('nombre_emprendimiento');
        $descripcion = $request->input('descripcion_emprendimiento');
        $redes = $request->input('red_social');  

        try {
            Emprendimiento::create([
                'nombre' => $nombre,
                'descripcion' => $descripcion,
                'imagen' => $url,
                'redes' => $redes,
            ]);

            Toastr::success('Emprendimiento agregado correctamente', '', ["positionClass" => "toast-top-center"]);

            //return redirect()->back();
            return redirect('/admin/listaEmprendimientos');

        } catch (Throwable $e) {
            Toastr::error('Error al crear el Emprendimiento', '', ["positionClass" => "toast-top-center"]);

            //dd($e);
            //return redirect()->back();
            return redirect('/admin/listaEmprendimientos');
        }

    }


    protected function vistaEditar(){
        $id_emprendimiento = Request('idEmpr');

        $emprendimiento = Emprendimiento::find($id_emprendimiento);

        return view('emprendimientos.editar')->with('emprendimiento',$emprendimiento);
    }


    protected function edit(Request $request){

        $id_emprendimiento = $request->input('id_emprendimiento');
        
        $nombre = $request->input('edit_nombre_emprendimiento');
        $descripcion = $request->input('edit_descripcion_emprendimiento');
        $redes = $request->input('edit_red_social');
        

        //buscamos el emprendimiento
        $emprendimiento = Emprendimiento::find($id_emprendimiento);

        //dd($emprendimiento);

        $emprendimiento->nombre = $nombre;
        $emprendimiento->descripcion = $descripcion;
        $emprendimiento->redes = $redes;

        
        try {
            $emprendimiento->save();

            Toastr::success('Emprendimiento actualizado correctamente', '', ["positionClass" => "toast-top-center"]);
            return redirect('/admin/listaEmprendimientos');

        } catch (Throwable $e) {
            Toastr::error('Error al actualizar emprendimiento', '', ["positionClass" => "toast-top-center"]);
            return redirect('/admin/listaEmprendimientos');
        }
    }


    protected function delete(Request $request){
        $id = $request->get('id');
        
        try {
            $res=Emprendimiento::where('id',$id)->delete();    
            echo(1);

        } catch (Throwable $e) {
            echo(0);
        }

    }
}
