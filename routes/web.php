<?php

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
    return view('welcome');
});

Route::get('bienvenida', function () {
    return view('bienvenida');
});

Route::get('accesorios', function () {
    return view('accesorios');
});

Route::get('acercade', function () {
    return view('acercade');
});

Route::get('presupuestos', function () {
    return view('presupuestos');
});

Route::get('productos', function () {
    return view('productos');
});

Route::get('registro', function () {
    return view('registro');
});

Route::get('iniciarsesion', function () {
    return view('iniciarsesion');
});

Route::get('vercomponentes', function () {
    return view('articulos.vercomponentes');
});

Route::get('articulo', function () {
    return view('articulos.articulo');
});

Route::get('carrito_compras', function () {
    return view('carrito_compras');
});

