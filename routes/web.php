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

// primeira
Route::get('primeira', function() {
	return view('primeira');
});

// segunda
Route::get('segunda', function() {
	return view('segunda');
});

// terceira
Route::get('terceira', function() {
	return view('terceira');
});

/* routes de administração */
Route::get('adm', function() {
	return view('wp-admin/addfdfrkkdewdwkdkdekewkew');
});

Route::get('registar', function() {
	return view('registros/register');
});

Route::get('verificar', function() {
	return view('registros/verificacoes/verificar');
});

Route::get('admin', function() {
	return view('admin/admin');
});

Route::get('admin1', function(){
	return view('admin.admin');
});

Route::get('admin_login', function() {
	return view('admin.login');
});

Route::get('novo', function() {

	// 1ª Forma
	// $info = [
	// 	'nome' => 'José Thomé',
	// 	'idade' => 26
	// ];

	// 2ª Forma
	//return view('novo', ['nome' => 'José Thomé', 'idade' => 26]);

	// 3ª Forma
	return view('novo')->with('nome', 'José Thomé');
});

Route::get('medicos_da_clinica/{id_medico}', function($id_medico) {

	

	return view('medicos')->with('id', $id_medico);
});

Route::get('teste', function() {
	
	$nomes = [
		'Fabiana',
		'Gabriel',
		'Ana Clara'
	];

	$sobrenomes = [
		'Rocha',
		'Pereira',
		'Smith'
	];

	return view('teste', compact('nomes', 'sobrenomes'));
});
