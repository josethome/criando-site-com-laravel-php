<?php

/*
|--------------------------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------------------------
*/

Route::get('/', 'noticiasController@index');

Route::get('/nova_noticia', 'noticiasController@create');

Route::post('/salvar_noticia', 'noticiasController@store');

Route::get('/gerir_noticias', 'noticiasController@mostrarTabelaGestao');