<?php

use App\clientes;

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

//Route::resource('noticias', 'noticiasController');

//Route::get('noticias/edit/{id}', 'noticiasController@edit');

Route::get('noticias/update/{id}', 'noticiasController@update');

Route::get('noticias/delete/{id}', 'noticiasController@destroy');