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

// Route::get('medicos', function() {

// });

// Route::get('medicos', ['uses' => 'medicosController@GetMedicos']);
// Route::get('medicosApagar', ['uses' => 'medicosController@EliminarMedicos']);

// Route::get('administrador/perfil/editar', array('as' => 'adm_per_edit', function() {
// 	return route('adm_per_edit');
// }));

// Route::get('administrador/configuracoes/editar', ['as' => 'admin_cfg_edit', function(){
// 	return view('admin/config/editar');
// }]);

Route::get('usuarios', 'usuariosController@MostrarUsuarios');
