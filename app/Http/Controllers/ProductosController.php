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


    protected function edit(Request $request){
        
        $id_producto = $request->input('id_producto');

        $nombre = $request->input('edit_nombre_producto');
        $cantidad = $request->input('edit_cantidad_producto');
        $precio = $request->input('edit_precio_producto');

        $producto = Producto::find($id_producto);

        $producto->nombre = $nombre;
        $producto->cantidad = $cantidad;
        $producto->precio = $precio;

        try {
            $producto->save();

            Toastr::success('Producto actualizado correctamente', '', ["positionClass" => "toast-top-center"]);
            return redirect('/admin/listarProductos');

        } catch (Throwable $e) {
            Toastr::error('Error al actualizar producto', '', ["positionClass" => "toast-top-center"]);
            return redirect('/admin/listarProductos');
        }   

        
    }

    protected function delete(Request $request){
        
        $id = $request->get('id');

        try {
            $res=Producto::where('id',$id)->delete();    
            echo(1);

        } catch (Throwable $e) {
            echo(0);
        }
    }

    public function vistaEditar(){

        $id_producto = Request('idProd');

        $producto = Producto::find($id_producto);

        return view('productos.editar')->with('producto',$producto);        
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
