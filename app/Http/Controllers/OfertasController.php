<?php

namespace App\Http\Controllers;

use App\Models\Oferta;
use Illuminate\Http\Request;

class OfertasController extends Controller
{
    public function index(){
        return view('ofertas.home');
    }

    public function list(){
        $ofertas = Oferta::all();
        return view('ofertas.list')->with('inversionistas',$ofertas);
    }
}
