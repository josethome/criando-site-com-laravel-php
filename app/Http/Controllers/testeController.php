<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testeController extends Controller
{
    public function Executar() {

    	// nomes
    	// $nomes = [
    	// 	'José',
    	// 	'Marina',
    	// 	'Juca',
    	// 	'Francisco',
    	// 	'Mariana'
    	// ];  

    	$nomes = [
    		
    	];  		

    	// view
    	return view('teste', compact('nomes'));
    }
}
