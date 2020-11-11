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

Route::resource('productos','ProductosController'); 
Route::resource('ram','RamController'); 
Route::resource('almacenamiento','AlmacenamientoController');
Route::resource('computadoras','ComputadorasController');
Route::resource('fuente_poder','FuentePoderController');
Route::resource('gabinetes','GabinetesController');
Route::resource('procesadores','ProcesadoresController');
Route::resource('tarjeta_madre','TarjetaMadreController');
Route::resource('tarjeta_video','TarjetaVideoController');
