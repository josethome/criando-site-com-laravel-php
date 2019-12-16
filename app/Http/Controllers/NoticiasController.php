<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\noticias;

class noticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = noticias::all();
        return view('noticias_show', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('noticias_new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $noticia = new noticias;
        $noticia->titulo = $request->text_titulo;
        $noticia->texto = $request->text_texto;
        $noticia->autor = $request->text_autor;
        $noticia->save();

        return redirect('noticias/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)   {
        //return noticias::where('id_noticias', $id)->get();
        return noticias::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return 'editar';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $noticia = noticias::find($id);
        $noticia->titulo = 'Não houve ataque';
        $noticia->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // noticias::find($id);
        // noticias::delete();

        $noticia = noticias::find($id);
        $noticia->delete();        
    }
}
