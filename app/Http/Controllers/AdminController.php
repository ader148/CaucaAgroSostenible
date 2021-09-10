<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        var_dump('hola desde admin');
        die();
        return view('home');
    }
}
