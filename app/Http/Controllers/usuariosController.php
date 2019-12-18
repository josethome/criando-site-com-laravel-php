<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuariosController extends Controller
{
    public function MostrarFormLogin() {

    	// Apresentar o formulário de login
    	return view('usuarios_login');
    }

    public function FazerLogin(Request $request) {

    	// Verifição de preenchimento dos campos
    	$this->validate($request, [

    		'text_usuario' => 'required',
    		'text_senha' => 'required|min:3'	
    	]);

    	// Depois da verificação: será consultada a base de dados

    	return 'Validado!';
    }
}
