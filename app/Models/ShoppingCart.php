<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'user_id',
        'order_date'
    ];    

    public function shopping_cart_details(){
        return $this->hasMany(ShoppingCartDetail::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }


    //funcion que crea el carrito de compras para una session
    public static function findOrCreateBySessionId($shopping_cart_id){
        //realizamos validacion para saber si el carrito ya existe
        if($shopping_cart_id){
            return ShoppingCart::find($shopping_cart_id);
        }else{
            //no le pasamos nada mas al create por que no lo necesita
            return ShoppingCart::create();
        }
    }


    public function quantity_of_products(){
        return $this->shopping_cart_details->sum('quantity');
    }

    //esta fucnion nos dara la cantidad de todo el carrito
    //multioplicando el precio del producto y la cantidad
    public function total_price(){
        $total = 0;

        foreach($this->shopping_cart_details as $key => $shopping_cart_detail){
            $total+= $shopping_cart_detail->price * $shopping_cart_detail->quantity;
        }

        return $total;
    }

}
