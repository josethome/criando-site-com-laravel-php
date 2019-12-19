<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\usuarios;

class usuariosController extends Controller
{

    // Sistema de Usuários
    public function index() {

        return $this->frmLogin();
    }

    // Login
    public function frmLogin() {

       // Apresenta o formulário de login
       return view('usuario_frm_login'); 
    }

    public function executarLogin(Request $request) {

        // Validação
        $this->validate($request, [
            'text_usuario' => 'required',
            'text_senha' => 'required'
        ]);

        return 'OK';
    }

    // Recuperar senha
    public function frmRecuperarSenha(){

        // Apresentar formulário para recuperar senha
        return view('usuario_frm_recuperar_senha');
    }

    public function executarRecuparSenha(Request $request) {

        // Validação
        $this->validate($request, [
            'text_email' => 'required|email'
        ]);

        return 'OK';
    }

    // Criar nova conta
    public function frmCriarNovaConta() {

        // Apresentar o formulário de criação de nova conta
        return view('usuario_frm_criar_conta');
    }

    public function executarCriarNovaConta(Request $request) {

        //Executar os proc. e verificações para criação de uma nova conta

        // Validação
        $this->validate($request, [
            'text_usuario' => 'required|between:3,50|alpha_num',
            'text_senha' => 'required|between:6,32',
            'text_senha_repetida' => 'required|same:text_senha',
            'text_email' => 'required|email',            
            'check_termos_condicoes' => 'accepted'
        ]);

        return 'OK';

    }

    public function MostrarFormLogin() {

    	// Apresentar o formulário de login
    	return view('usuarios_login');
    }

    public function FazerLogin(Request $request) {

    	// Verificar se os dados de login estão corretos


    	// 1º - Vai buscar a conta do usuário
    	$dados = usuarios::where('usuario', $request->text_usuario)->first();

    	$resultado = "";

    	if(count($dados) == 0) {

    		$resultado = "Não existe está conta de usuário.";
    	}
    	else {

    		// Foi encontrado o usuário 
    		if(Hash::check($request->text_senha, $dados->senha)) {
    			$resultado = "Login efetuado com sucesso.";
    		} else {
    			$resultado = "Login sem sucesso. Senha inválida.";
    		}
    	}

    	return($resultado);

    	// geraldo
    	// senha: 123456

    	// jose
    	// senha: 123

    	// $senha = Hash::make($request->text_senha);
    	// return($request->text_senha . ' - ' . $senha);
    }

    public function InserirUsuario() {

    	// Inserir um usuário na base de dados
    	$novo = new usuarios;
    	$novo->usuario = 'Lucia Gomes';
    	$novo->senha = Hash::make('gomesendgomes');
    	$novo->email = 'luciagomes@teste.com';
    	$novo->save();

    	return ('Usuário inserido com sucesso.');    	
    }
}
