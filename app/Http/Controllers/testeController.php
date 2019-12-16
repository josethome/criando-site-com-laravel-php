<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class testeController extends Controller
{
   public function teste() {

   		//$dados = DB::table('clientes')->get();
   		$id = 123;
   		$dados = DB::table('clientes')
   			->where('nome', 'Joao')
   			->orWhere('nome', 'Gabriela')
   			->get();

   		//dd($dados);

   		return $dados;
   }
}
