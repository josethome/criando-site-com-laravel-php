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

//Route::resource('usuarios', 'usuariosController');

Route::get('teste', function() {

	// pegar todos os registros da bd
	//$dados = DB::table('clientes')->get();
	
	// pegar o registro dos clientes
	$dados = DB::table('clientes')->where('cidade', 'Rio de Janeiro')->get();


	return $dados;
});
