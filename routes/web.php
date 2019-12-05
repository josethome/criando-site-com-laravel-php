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

Route::get('/', function () {
    return view('welcome');
});

Route::get('dados/{id_medico}/{id_consulta}', function($id_medico, $id_consulta) {
	return view('dados')->
		with('id_medico', $id_medico)->
		with('id_consulta', $id_consulta);
});

Route::get('teste/{id?}/{nome?}', function($id = 0, $nome = 'José') {
	return view('teste')->
		with('id', $id)->
		with('nome', $nome);
});