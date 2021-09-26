<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    use HasFactory;
    protected $table = "oferta";

    protected $fillable = [
        'nombre',
        'imagen',
        'cantidad',
        'descuento',
        'tipo_descuento'
    ];  


        
}

