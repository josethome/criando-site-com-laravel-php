<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\noticias;

class noticiasController extends Controller
{    
    
    public function index()
    {
        // Vai buscar todas as notícias
        $dados = noticias::all();



        return view('noticias_index', compact('dados'));
    }

    
    public function create()
    {
        // Apresentar página de criação de nova notícia
    }

    
    public function store(Request $request)
    {
        // Armazena os registros na base de dadsos
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        // Apresentar página para editar
    }

   
    public function update(Request $request, $id)
    {
        // Atualização dos registros na base de dados: depois de editar
    }

    
    public function destroy($id)
    {
        // Excluir uma notícia na base de dados
    }
}