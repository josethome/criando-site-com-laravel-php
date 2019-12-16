<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\noticias;

class noticiasController extends Controller
{
    
    public function index()
    {
        $dados = noticias::all();
        return view('noticias_show', compact('dados'));
    }

   
    public function create()
    {
        return view('noticias_new');
    }

    
    public function store(Request $request)
    {
        $noticia = new noticias;
        $noticia->titulo = $request->text_titulo;
        $noticia->texto = $request->text_texto;
        $noticia->autor = $request->text_autor;
        $noticia->save();

        return redirect('noticias/create');
    }

   
    public function show($id)   {
        //return noticias::where('id_noticias', $id)->get();
        return noticias::find($id);
    }

   
    public function edit($id)
    {
        return 'editar';
    }

    
    public function update(Request $request, $id)
    {
        $noticia = noticias::find($id);
        $noticia->titulo = 'Não houve ataque';
        $noticia->save();
    }
    
    public function destroy($id)
    {
        // noticias::find($id);
        // noticias::delete();

        $noticia = noticias::find($id);
        $noticia->delete();        
    }
}
