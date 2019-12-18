<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuariosController extends Controller
{
    public function MostrarFormLogin() {

    	// Apreseentar o formulário de login
    	return view('usuarios_login');
    }
}
