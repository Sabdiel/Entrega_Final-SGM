<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\VendeController;

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
Route::resource('/productos','App\Http\Controllers\ProductosController');
Route::get('/', function () {
    return view('welcome');
});

//Route::get('/inicio','App\Http\Controllers\ProductosController@index');

//Route::get('/crear','App\Http\Controllers\ProductosController@create');

Route::resource('clientes', ClientesController::class);
Route::resource('pedidos', PedidosController::class);
Route::resource('vendes', VendeController::class);
