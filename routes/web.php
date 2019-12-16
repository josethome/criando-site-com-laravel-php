<?php

use App\teste;

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

Route::get('c', function() {

	// Query Builder
	//$dados = DB::table('clientes')->get();

	// Eloquent ORM
	$dados = teste::where('nome', 'Joao')->get();

	return $dados;
});