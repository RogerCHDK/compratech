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

//Almacenamiento
Route::resource('almacenamientos','AlmacenamientoController');

//Gabinetes
Route::resource('gabinetes','GabinetesController');

//Ram
Route::resource('rams','RamController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//login, register, logout
Route::get('login','Auth\LoginController@getLogin');
Route::post('login_post','Auth\LoginController@postLogin')->name("login_post");
Route::get('register', 'Auth\RegisterController@getRegister');
Route::post('register_post', 'Auth\RegisterController@postRegister')->name("register_post");

Route::get('combo_municipios_x_entidad/{entidad_id}','Auth\LoginController@combo_municipios_x_entidad');
Route::get('logout','Auth\LoginController@getLogout');
