<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Request;
use Session;

class aplicacaoController extends Controller
{
    public function apresentarPaginaInicial() {

    	// // Verifica se a sessão está ativa
    	if(!Session::has('login')) {
    		return redirect('/');
    	}

    	// Apresenta o interior da aolicação
    	return view('aplicacao');
    }
}
