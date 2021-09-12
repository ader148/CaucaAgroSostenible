<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\EmprendimientosController;
use App\Http\Controllers\EventosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InversionistasController;
use App\Http\Controllers\OfertasController;
use App\Http\Controllers\ProductosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes(['register'=>false,'reset' => false]);

Route::get('/registro', [RegisterController::class, 'index'])->name('/registro');

Route::post('/registrousuario', [RegisterController::class, 'newuser'])->name('/registrousuario');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::get('/canastaAgricola', [ProductosController::class, 'index'])->name('/canastaAgricola');
    Route::get('/emprendimientos', [EmprendimientosController::class, 'index'])->name('/emprendimientos');
    Route::get('/agroOferta', [OfertasController::class, 'index'])->name('/agroOferta');
    Route::get('/inversionistas', [InversionistasController::class, 'index'])->name('/inversionistas');
    Route::get('/eventos', [EventosController::class, 'index'])->name('/eventos');

    Route::group(['middleware' => ['role:Admin']], function () {
        Route::get('/admin/home', [AdminController::class, 'index'])->name('/admin/home');
    });

   //Route::get('/vistaGeneral', [PanelesController::class, 'show']);

   //Route::post('agregarPanal', [PanelesController::class, 'store']);
});
