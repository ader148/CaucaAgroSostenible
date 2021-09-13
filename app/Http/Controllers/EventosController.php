<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventosController extends Controller
{
    public function index(){
        return view('eventos.home');
    }

    protected function create(){
        var_dump('hola desde crear');
        die();
    }
}
