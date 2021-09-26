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
}
