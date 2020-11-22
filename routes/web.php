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

Route::get('/', "UsuarioController@index");

Route::get('/usuario', "UsuarioController@index")->name('usuario.index');
Route::get('/cotizacion', "CotizacionController@index")->name('cotizacion.index');
Route::get('/cotizacion/{id}', "CotizacionController@cotizacionShow")->name('cotizacion.show');


