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
        return view('noticias_create');
    }

    
    public function store(Request $request)
    {
        // Armazena os registros na base de dadsos
        $noticia = new noticias;

        $noticia->titulo = $request->text_titulo;
        $noticia->texto = $request->text_texto;
        $noticia->autor = $request->text_autor;

        // Visibilidade
        if(isset($request->check_visivel)) {
            $noticia->visivel = 1;
        }
        else {
            $noticia->visivel = 0;
        }

        // Salvar notícia
        $noticia->save();

        // Redirecionamento para o ínicio (home)
        return redirect('/');
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
        noticias::destroy($id);
        return redirect('/gerir_noticias');
    }

    public function mostrarTabelaGestao() 
    {
        // Carregar todas as notícias e apresentar em formato de grid para gestão
        $noticias = noticias::all();
        return view('noticias_gestao', compact('noticias'));
    }

    public function colocarVisivel($id) {

         // Tornar visível uma notícia que está invisível
        $noticia = noticias::find($id);
        $noticia->visivel = 1;
        $noticia->save();
        return redirect('/gerir_noticias');
    }

     public function colocarInvisivel($id) {

         // Tornar invisível uma notícia que está visível
        $noticia = noticias::find($id);
        $noticia->visivel = 0;
        $noticia->save();
        return redirect('/gerir_noticias');
    }
}
