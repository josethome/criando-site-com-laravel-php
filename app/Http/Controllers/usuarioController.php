<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuarioController extends Controller
{
	// função para tratamento de novos usuários
    function Tratar($usuario, $senha) {

    	// verifficar se nome e senha são válidos
    	$usuario_tratado = 'Bem-vindo ' . $usuario . '.';
    	$senha_tratada = md5($senha);

    	return view('mostrar_usuario', compact('usuario_tratado', 'senha_tratada'));
    }
}
