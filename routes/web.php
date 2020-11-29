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

Route::get('componentes', function () {
    return view('componentes');
});

Route::get('registro', function () {
    return view('registro');
});

Route::get('iniciarsesion', function () {
    return view('iniciarsesion');
});