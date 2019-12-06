<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuariosController extends Controller
{
    
    public function index()
    {
        // apresentar o formulário
        return view('formulario');
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $dados)
    {
        //
        $usuario = $dados->text_usuario;
        $senha_enc = md5($dados->text_senha);
        // $senha = $dados->text_senha;
        // $token = $dados->_token;

        echo "Usuário: $usuario </br>Senha: $senha_enc";
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
