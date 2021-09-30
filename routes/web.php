<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\EmprendimientosController;
use App\Http\Controllers\EventosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InversionistasController;
use App\Http\Controllers\OfertasController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ShoppingCartController;
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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes(['register'=>false,'reset' => false]);

Route::get('/registro', [RegisterController::class, 'index'])->name('/registro');

Route::post('/registrousuario', [RegisterController::class, 'newuser'])->name('/registrousuario');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function(){

    Route::get('/homePrincipal', function () {
        return view('home');
    });

    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::get('/canastaAgricola', [ProductosController::class, 'index'])->name('/canastaAgricola');
    Route::get('/emprendimientos', [EmprendimientosController::class, 'index'])->name('/emprendimientos');
    Route::get('/agroOferta', [OfertasController::class, 'index'])->name('/agroOferta');
    Route::get('/inversionistas', [InversionistasController::class, 'index'])->name('/inversionistas');
    Route::get('/eventos', [EventosController::class, 'index'])->name('/eventos');

    //ruta para rgegar producto al carrito
    Route::post('/agregarProductoCarrito', [ShoppingCartController::class, 'store'])->name('/agregarProductoCarrito');

    Route::post('/EliminarProductoCarrito', [ShoppingCartController::class, 'delete'])->name('/EliminarProductoCarrito');

    //carrito
    Route::get('/carrito', [CartController::class, 'show'])->name('/carrito');

    Route::group(['middleware' => ['role:Admin']], function () {
        Route::get('/admin/home', [AdminController::class, 'index'])->name('/admin/home');

        //------eventos admin --------
        Route::post('/admin/crearEvento', [EventosController::class, 'create'])->name('/admin/crearEvento');
        Route::get('/admin/crearEvento', function () {
            return view('eventos.crearNuevo');
        })->name('/admin/crearEvento');
        Route::get('/admin/listarEventos', [EventosController::class, 'list'])->name('/admin/listarEventos');

        Route::post('/admin/EditarEvento', [EventosController::class, 'edit'])->name('/admin/EditarEvento');
        Route::get('/admin/EditarEvento/{idEvent?}', [EventosController::class, 'vistaEditar'])->name('/admin/EditarEvento/{idEvent?}');

        Route::post('/admin/EliminarEvento', [EventosController::class, 'delete'])->name('/admin/EliminarEvento');

        //----- inversionistas admin --------
        Route::get('/admin/listarInversionistas', [InversionistasController::class, 'list'])->name('/admin/listarInversionistas');
        Route::post('/admin/crearInversionista', [InversionistasController::class, 'create'])->name('/admin/crearInversionista');

        Route::get('/admin/crearInversionista', function () {
            return view('inversionistas.crearNuevo');
        })->name('/admin/crearInversionista');

        Route::get('/admin/EditarInversionista/{idinver?}', [InversionistasController::class, 'vistaEditar'])->name('/admin/EditarInversionista/{idinver?}');
        Route::post('/admin/EditarInversionista', [InversionistasController::class, 'edit'])->name('/admin/EditarInversionista');

        Route::post('/admin/EliminarInvesionista', [InversionistasController::class, 'delete'])->name('/admin/EliminarInvesionista');
        
        //---- productos admin --------
        Route::get('/admin/listarProductos', [ProductosController::class, 'list'])->name('/admin/listarProductos');
        Route::post('/admin/crearProducto', [ProductosController::class, 'create'])->name('/admin/crearProducto');
        Route::get('/admin/crearProducto', function () {
            return view('productos.crearNuevo');
        })->name('/admin/crearProducto');

        Route::get('/admin/EditarProducto/{idProd?}', [ProductosController::class, 'vistaEditar'])->name('/admin/EditarProducto/{idProd?}');
        Route::post('/admin/EditarProducto', [ProductosController::class, 'edit'])->name('/admin/EditarProducto');

        Route::post('/admin/EliminarProducto', [ProductosController::class, 'delete'])->name('/admin/EliminarProducto');


        //---- ofertas admin ----
        Route::get('/admin/listarOfertas', [OfertasController::class, 'list'])->name('/admin/listarOfertas');
        Route::post('/admin/crearOferta', [OfertasController::class, 'create'])->name('/admin/crearOferta');
        Route::get('/admin/crearOferta', function () {
            return view('ofertas.crearNuevo');
        })->name('/admin/crearoferta');


        Route::get('/admin/EditarOferta/{idOfer?}', [OfertasController::class, 'vistaEditar'])->name('/admin/EditarOferta/{idOfer?}');
        Route::post('/admin/EditarOferta', [OfertasController::class, 'edit'])->name('/admin/EditarOferta');
        Route::post('/admin/EliminarOferta', [OfertasController::class, 'delete'])->name('/admin/EliminarOferta');


    });
});
