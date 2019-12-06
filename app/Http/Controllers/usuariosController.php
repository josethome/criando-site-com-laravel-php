<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuariosController extends Controller
{
    
    public function MostrarUsuarios() {

    	// usuários da nossa aplicação
    	$usuarios = [

    		'Marta',
    		'Bernardo',
    		'Bianca'

    	];

    	// mostrar a view com usuários
    	return view('show_usuarios', compact('usuarios'));

    }
}
