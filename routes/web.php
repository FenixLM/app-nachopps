<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('productos');
// });
// Route::get('/', 'InicioController@index');

Route::resource('/', 'App\Http\Controllers\ProductoController');
Route::get('/crear-productos', 'App\Http\Controllers\ProductoController@create');