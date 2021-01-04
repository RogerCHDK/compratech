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
Route::resource('computadoras','ComputadorasController');
Route::resource('fuente_poder','FuentePoderController');
Route::resource('procesadores','ProcesadoresController');
Route::resource('tarjeta_madre','TarjertaMadreController');
Route::resource('tarjeta_video','TarjetaVideoController');

Route::get('bienvenida', function () {
    return view('bienvenida');
})->name('bienvenida');

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
    return view('compra.carrito_compras');
});

Route::get('carrito_compras', function () {
    return view('compra.carrito_compras');
});

Route::get('continuar_compra1', function () {
    return view('compra.continuar_compra1');
});

Route::get('continuar_compra2', function () {
    return view('compra.continuar_compra2');
});

Route::get('mis_compras', function () {
    return view('compra.mis_compras');
});

Route::get('presupuesto1', function () {
    return view('presupuestos.presupuesto1');
});

Route::get('presupuesto2', function () {
    return view('presupuestos.presupuesto2');
});

Route::get('presupuesto3', function () {
    return view('presupuestos.presupuesto3');
});

//Almacenamiento
Route::resource('almacenamientos','AlmacenamientoController');

//Gabinetes
Route::resource('gabinetes','GabinetesController');

//Ram
Route::resource('rams','RamController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
