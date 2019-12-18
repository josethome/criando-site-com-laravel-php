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

// Visibilidade
Route::get('colocar_visivel/{id}', 'noticiasController@colocarVisivel');
Route::get('colocar_invisivel/{id}', 'noticiasController@colocarInvisivel');

// Deletar notícias
Route::get('deletar_noticia/{id}', "noticiasController@destroy");

// Editar | Atualizar
Route::get('editar_noticia/{id}', 'noticiasController@edit');
Route::post('atualizar_noticia/{id}', 'noticiasController@update');

// Formulário de login
Route::get('usuarios_login', 'usuariosController@MostrarFormLogin');
Route::post('usuarios_fazer_login', 'usuariosController@FazerLogin');
