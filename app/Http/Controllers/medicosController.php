<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class medicosController extends Controller
{
    public function GetMedicos() {

    	// Consultar a base de dados
    	$medicos = [
			'Jose',
			'Camila',
			'Albertino',
			'Joana',
			'Manuela'
		];

	return $medicos;	

    }

    public function EliminarMedicos() {

    	// Eliminar todos os médicos
    	return 'Médicos eliminados.';

    }
}
