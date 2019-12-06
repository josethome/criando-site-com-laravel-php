<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuariosController extends Controller
{
    // apresentar o formulário
    public function show() {
    	return view('formulario');
    }

    // tratar os dados do formulário
    public function tratar(Request $dados) {
    	return 'Cheguei!';		
    }
} 
