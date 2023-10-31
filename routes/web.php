<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\AlmacenController;
use App\Http\Controllers\CategoriaController;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', 'App\Http\Controllers\ProductoController@index')->name('productos.index');
Route::get('/productos/create', 'App\Http\Controllers\ProductoController@create')->name('productos.create');
Route::get('/productos/{id}/edit', 'App\Http\Controllers\ProductoController@edit')->name('productos.edit');
Route::put('/productos/{id}', 'App\Http\Controllers\ProductoController@update')->name('productos.update');
Route::delete('/productos/{id}', 'App\Http\Controllers\ProductoController@destroy')->name('productos.destroy');
Route::post('/productos', 'App\Http\Controllers\ProductoController@store')->name('productos.store');
Route::get('/productos/confirm/{id}', 'App\Http\Controllers\ProductoController@confirmDelete')->name('productos.confirm');
Route::get('/productos/{producto}', 'App\Http\Controllers\ProductoController@show')->name('productos.show');


Route::get('/almacenes', 'App\Http\Controllers\AlmacenController@index')->name('almacenes.index');
Route::get('/almacenes/create', 'App\Http\Controllers\AlmacenController@create')->name('almacenes.create');
Route::post('/almacenes', 'App\Http\Controllers\AlmacenController@store')->name('almacenes.store');
Route::get('/almacenes/{id}/edit', 'App\Http\Controllers\AlmacenController@edit')->name('almacenes.edit');
Route::put('/almacenes/{id}', 'App\Http\Controllers\AlmacenController@update')->name('almacenes.update');
Route::delete('/almacenes/{id}', 'App\Http\Controllers\AlmacenController@destroy')->name('almacenes.destroy');
Route::get('almacenes/confirm/{id}', 'App\Http\Controllers\AlmacenController@confirmDelete')->name('almacenes.confirm');




Route::get('/categorias', 'App\Http\Controllers\CategoriaController@index')->name('categorias.index');
Route::get('/categorias/create', 'App\Http\Controllers\CategoriaController@create')->name('categorias.create');
Route::post('/categorias', 'App\Http\Controllers\CategoriaController@store')->name('categorias.store');
Route::get('/categorias/{id}/edit', 'App\Http\Controllers\CategoriaController@edit')->name('categorias.edit');
Route::put('/categorias/{id}', 'App\Http\Controllers\CategoriaController@update')->name('categorias.update');
Route::delete('/categorias/{id}', 'App\Http\Controllers\CategoriaController@destroy')->name('categorias.destroy');
Route::get('/categorias/confirm/{id}', 'App\Http\Controllers\CategoriaController@confirmDelete')->name('categorias.confirm');

Route::delete('confirm/{entity}/{id}', 'App\Http\Controllers\ConfirmController@confirm')->name('confirm.destroy');