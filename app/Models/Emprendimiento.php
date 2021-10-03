<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emprendimiento extends Model
{
    use HasFactory;
    protected $table = "emprendimiento";

    protected $fillable = [
        'nombre',
        'descripcion',
        'imagen',
        'redes',        
    ];
}
