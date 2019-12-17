<?php

/*
|--------------------------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------------------------
*/

// use App\clientes;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('teste', function() {
// 	return view('teste');
// });

Route::get('/', 'noticiasController@index');

Route::get('nova_noticia', 'noticiasController@create');