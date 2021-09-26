<?php

namespace App\Http\Controllers;

use App\Models\Oferta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Brian2694\Toastr\Facades\Toastr;
use Throwable;

class OfertasController extends Controller
{
    public function index(){
        return view('ofertas.home');
    }

    public function list(){
        $ofertas = Oferta::all();
        return view('ofertas.list')->with('ofertas',$ofertas);
    }


    protected function create(Request $request){

        $request->validate([
            'file' => 'required|image'
        ]);

        $imagen = $request->file('file')->store('public/ofertas');
        $url = Storage::url($imagen);
        

        $nombre = $request->input('nombre_oferta');
        $cantidad = $request->input('cantidad_oferta');
        $descuento = $request->input('descuento_oferta');
        $tipo_descuento = $request->input('tipo_descuento_oferta');
        $imagen = $url;

        try {
            Oferta::create([
                'nombre' => $nombre,
                'imagen' => $imagen,
                'cantidad' => $cantidad,
                'descuento' => $descuento,
                'tipo_descuento' => $tipo_descuento               
            ]);

            Toastr::success('Oferta creada correctamente', '', ["positionClass" => "toast-top-center"]);
            return redirect('/admin/listarOfertas');

        } catch (Throwable $e) {
            //dd($e);
            Toastr::error('Error al crear oferta', '', ["positionClass" => "toast-top-center"]);
            return redirect('/admin/listarOfertas');
        }
    }


    public function vistaEditar(){
        
        $id_oferta = Request('idOfer');

        $oferta = Oferta::find($id_oferta);

        return view('ofertas.editar')->with('oferta',$oferta);
    }


    protected function delete(Request $request){
        //dd("hola desde delete");
        $id = $request->get('id');

        try {
            $res=Oferta::where('id',$id)->delete();    
            echo(1);

        } catch (Throwable $e) {
            echo(0);
        }   

    }


    protected function edit(Request $request){

        $id_oferta = $request->input('id_oferta');

        $nombre = $request->input('edit_nombre_oferta');
        $cantidad = $request->input('edit_cantidad_oferta');
        $descuento = $request->input('edit_descuento_oferta');
        $tipo_descuento = $request->input('edit_tipo_descuento_oferta');

        //modificamos la oferta
        $oferta = Oferta::find($id_oferta);

        $oferta->nombre = $nombre;
        $oferta->cantidad = $cantidad;
        $oferta->descuento = $descuento;
        $oferta->tipo_descuento = $tipo_descuento;

        try {
            $oferta->save();

            Toastr::success('Oferta actualizada correctamente', '', ["positionClass" => "toast-top-center"]);
            return redirect('/admin/listarOfertas');

        } catch (Throwable $e) {
            dd($e);
            Toastr::error('Error al actualizar Oferta', '', ["positionClass" => "toast-top-center"]);
            return redirect('/admin/listarOfertas');
        }



        

    }
}
