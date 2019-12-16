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
        // Apresentar uma lista dos registros
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
        //return 'Sim';        
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

        // $dados = [
        //     $request->text_titulo,
        //     $request->text_texto,
        //     $request->text_autor
        // ];
        // return $dados;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\noticias  $noticias
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dados = noticias::where('id_noticias', $id)->get();
        return $dados;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\noticias  $noticias
     * @return \Illuminate\Http\Response
     */
    public function edit(noticias $noticias)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\noticias  $noticias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, noticias $noticias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\noticias  $noticias
     * @return \Illuminate\Http\Response
     */
    public function destroy(noticias $noticias)
    {
        //
    }
}
