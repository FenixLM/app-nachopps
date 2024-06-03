<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('productos');
// });
// Route::get('/', 'InicioController@index');

Route::resource('/', 'App\Http\Controllers\ProductoController');