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


//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//fotos
Route::get('fuente-imagen/{filename}', 'FuentePoderController@getImage')->name('fuente.imagen');
Route::get('procesador-imagen/{filename}', 'ProcesadoresController@getImage')->name('procesador.imagen');
Route::get('tarjet-madre-imagen/{filename}', 'TarjertaMadreController@getImage')->name('madre.imagen');
Route::get('tarjeta-video-imagen/{filename}', 'TarjetaVideoController@getImage')->name('video.imagen');
//login, register, logout
Route::get('login','Auth\LoginController@getLogin');
Route::post('login_post','Auth\LoginController@postLogin')->name("login_post");
Route::get('register', 'Auth\RegisterController@getRegister');
Route::post('register_post', 'Auth\RegisterController@postRegister')->name("register_post");

Route::get('combo_municipios_x_entidad/{entidad_id}','GabinetesController@combo_municipios_x_entidad');
Route::get('logout','Auth\LoginController@getLogout'); 


//Carrito
Route::get('cart','ProductosController@cart')->name('carro');
Route::get('add-to-cart/{id}','ProductosController@addToCart')->name('agregar.carro');
Route::get('delete-cart','ProductosController@limpiarCarro')->name('limpiar.carro');
Route::get('filtro-video/{id}','TarjetaVideoController@showFiltro')->name('filtro.video');
Route::get('filtro-procesador/{id}','ProcesadoresController@showFiltro')->name('filtro.procesador');
Route::get('filtro-madre/{id}','TarjertaMadreController@showFiltro')->name('filtro.madre');
Route::get('filtro-almacenamiento/{id}','AlmacenamientoController@showFiltro')->name('filtro.almacenamiento');
Route::get('filtro-ram/{id}','RamController@showFiltro')->name('filtro.ram');
Route::get('filtro-fuente/{id}','FuentePoderController@showFiltro')->name('filtro.fuente');
Route::get('filtro-gabinete/{id}','GabinetesController@showFiltro')->name('filtro.gabinete'); 
Route::get('direccion','UsuarioController@getDireccion')->name('usuario.direccion'); 
Route::get('tarjeta-credito','UsuarioController@getTarjeta')->name('usuario.tarjeta'); 
Route::get('confirmar-compra','UsuarioController@comprar')->name('usuario.comprar'); 