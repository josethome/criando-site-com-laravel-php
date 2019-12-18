<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class usuariosController extends Controller
{
    public function MostrarFormLogin() {

    	// Apresentar o formulário de login
    	return view('usuarios_login');
    }

    public function FazerLogin(Request $request) {

    	// Encriptação da senha
    	// $request->test = senha;

    	$senha = Hash::make($request->text_senha);
    	return($request->text_senha . ' - ' . $senha);
    }
}
