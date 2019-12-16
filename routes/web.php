<?php

use App\clientes;

Route::get('/', function () {
    return view('welcome');
});

//Route::resource('noticias', 'noticiasController');

//Route::get('noticias/edit/{id}', 'noticiasController@edit');

Route::get('noticias/update/{id}', 'noticiasController@update');

Route::get('noticias/delete/{id}', 'noticiasController@destroy');