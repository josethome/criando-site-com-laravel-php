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

// Inserir novos usuários
Route::get('inserir_usuario', 'usuariosController@InserirUsuario');

// Sistema de Usuários - Verificação de sessão e logoff de usuários
Route::get('/', function() {
	return view('usuario_frm_login');
});

Route::get('/criar_conta', function() {
	return view('usuario_frm_criar_conta');
});

Route::get('/recuperar_senha', function() {
	return view('usuario_frm_recuperar_senha');
});

// Default
Route::get('/', 'usuariosController@index');

// Usuário - login

// Usuário - recuperar senha
Route::get('/usuario_frm_recuperar_senha', 'usuariosController@frmRecuperarSenha');

// Usuário - nova conta
Route::get('/usuario_frm_criar_conta', 'usuariosController@frmCriarNovaConta');