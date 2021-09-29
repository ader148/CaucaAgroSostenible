<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\ShoppingCart;
use App\Models\ShoppingCartDetail;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use Throwable;

class ShoppingCartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //esta ruta se usa para agregar un producto al carrito 
        //dd("hola desde store");
        //dd($request);

        //debemos optener el precio del producto agregar al carrito

        //debemos optener tamben el id de carrito actual que esta creado en session
        $session_name = 'shopping_cart_id';
        $shopping_cart_id = Session::get($session_name);
        $shopping_cart = ShoppingCart::findOrCreateBySessionId($shopping_cart_id);
        $id_shopping_cart = $shopping_cart->id;

        $id_producto = $request->get('id_producto');

        //buscamos el producto 
        $producto = Producto::find($id_producto);

        

        //creamos el registro en la tabla de detalle de carrito 
        $shopping_cart->shopping_cart_details()->create(
            ['quantity'=>1,
            'price'=>$producto->precio,
            'product_id'=>$id_producto,
            ]);

       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShoppingCart  $shoppingCart
     * @return \Illuminate\Http\Response
     */
    public function show(ShoppingCart $shoppingCart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShoppingCart  $shoppingCart
     * @return \Illuminate\Http\Response
     */
    public function edit(ShoppingCart $shoppingCart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ShoppingCart  $shoppingCart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShoppingCart $shoppingCart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShoppingCart  $shoppingCart
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShoppingCart $shoppingCart)
    {
        //
    }

    protected function delete(Request $request){
        $id_shopping_detail = $request->get('id');
        
        try {
            $res=ShoppingCartDetail::where('id',$id_shopping_detail)->delete();    
            echo(1);

        } catch (Throwable $e) {
            echo(0);
        }   
    }
}
