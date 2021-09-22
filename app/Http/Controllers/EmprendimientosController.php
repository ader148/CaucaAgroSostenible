<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmprendimientosController extends Controller
{
    public function index(){
        return view('emprendimientos.home');
    }
}
