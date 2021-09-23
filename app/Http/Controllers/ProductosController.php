<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Brian2694\Toastr\Facades\Toastr;
use Throwable;

class ProductosController extends Controller
{
    public function index(){
        return view('productos.home');
    }

    public function list(){
        $productos = Producto::all();
        return view('productos.list')->with('productos',$productos);
    }

    protected function create(Request $request){

        $request->validate([
            'file' => 'required|image'
        ]);

        $imagen = $request->file('file')->store('public/inversionistas');
        $url = Storage::url($imagen);


        $nombre = $request->input('nombre_producto');
        $cantidad = $request->input('cantidad_producto');
        $precio = $request->input('precio_producto');
        $imagen = $url;

        try {
            Producto::create([
                'nombre' => $nombre,
                'imagen' => $imagen,
                'cantidad' => $cantidad,
                'precio' => $precio,                
            ]);

            Toastr::success('Producto creado correctamente', '', ["positionClass" => "toast-top-center"]);

            //return redirect()->back();
            return redirect('/admin/listarProductos');

        } catch (Throwable $e) {
            Toastr::error('Error al crear el Producto', '', ["positionClass" => "toast-top-center"]);
            //return redirect()->back();
            return redirect('/admin/listarProductos');
        }


    }
}
