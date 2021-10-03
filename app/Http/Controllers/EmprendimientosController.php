<?php

namespace App\Http\Controllers;

use App\Models\Emprendimiento;
use Illuminate\Http\Request;

class EmprendimientosController extends Controller
{
    public function index(){

        $emprendimientos = Emprendimiento::all();

        return view('emprendimientos.home')->with('emprendimientos',$emprendimientos);
    }
}
