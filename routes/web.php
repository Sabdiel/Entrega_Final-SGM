<?php

use Illuminate\Support\Facades\Route;

Route::resource('vendedores',App\Http\Controllers\VendedoresController::class);
Route::resource('cliente',App\Http\Controllers\ClienteController::class);
Route::resource('pedidos',App\Http\Controllers\PedidosController::class);
Route::resource('productos',App\Http\Controllers\ProductoController::class);
Route::resource('detalles',App\Http\Controllers\DetalleController::class);