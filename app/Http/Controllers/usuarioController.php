<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuarioController extends Controller
{
    function apresentarUsuario($usuario, $senha) {

    	return "<p>Usuário: $usuario</p><p>Senha: $senha</p>";
    }
}
