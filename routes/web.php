<?php

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


Route::resource('productos', 'ProductoController');
Route::resource('compras', 'CompraController');
Route::resource('ventas', 'VentaController');
Route::resource('proovedors', 'ProovedorController');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('inicio');
});
Route::get('/equipo', 'PaginasController@equipo')->name('equipo');

Route::get('/info', 'PaginasController@info')->name('info');

Route::get('/contacto', 'PaginasController@contacto')->name('contacto');

Route::get('/bienvenida/{nombre}/{apellido?}', 'PaginasController@bienvenida');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
