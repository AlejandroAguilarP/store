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
Route::get('/productos/inventario', 'ProductoController@inventarios')->name('productos.inventarios');
Route::get('/productos/photo/{producto}', 'ProductoController@eliminar_foto')->name('productos.photo');
Route::resource('productos', 'ProductoController');
Route::resource('compras', 'CompraController')->middleware('auth');
Route::get('/ventas/reporte', 'VentaController@reporte')->name('ventas.reporte');
Route::resource('ventas', 'VentaController')->middleware('auth');
Route::get('/proovedors/trashed', 'ProovedorController@indextrash')->name('proovedors.trashed')->middleware('admin');
Route::post('/proovedors/restore', 'ProovedorController@restore')
  ->name('proovedors.restore')
  ->middleware('admin');
Route::resource('proovedors', 'ProovedorController')->middleware('auth');
Route::resource('users', 'UserController');

Route::get('/clientes/trashed', 'ClienteController@indextrash')->name('clientes.trashed')->middleware('admin');
Route::post('/clientes/restore', 'ClienteController@restore')
  ->name('clientes.restore')
  ->middleware('admin');
Route::resource('clientes', 'ClienteController')->middleware('auth');



Route::get('/', function () {
    return view('/home');
});


//Route::get('productos/edita-cantidad/{producto}/{cantidad}', 'ProductoController@editarCantidad')->name('productos.editarCantidad');

Route::get('/equipo', 'PaginasController@equipo')->name('equipo');

Route::get('/info', 'PaginasController@info')->name('info');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
