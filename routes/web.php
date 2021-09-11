<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::group(['middleware' => ['role:Admin']], function () {
        Route::get('/admin/home', [AdminController::class, 'index'])->name('/admin/home');
    });

   //Route::get('/vistaGeneral', [PanelesController::class, 'show']);

   //Route::post('agregarPanal', [PanelesController::class, 'store']);
});
