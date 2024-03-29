<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\usuarios;
use Session;
use App\classes\geradorSenha;
use Illuminate\Support\Facades\Mail;
use App\Mail\emailRecuperarSenha;

class usuariosController extends Controller
{

    // Sistema de Usuários
    public function index() {

        // Verificar se existe sessão
        if(!Session::has('login')) {

            // Se não existe, retorna formulário de login
            return $this->frmLogin();
        }
        else {
            return view('aplicacao');
        }         
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

        // Verificar se o usuário existe
        $usuario = usuarios::where('usuario', $request->text_usuario)->first();

        // Verifica se existe usuário
        if(count($usuario) == 0) {
            $erros_bd = ['Está conta de usuário não existe.'];
            return view('usuario_frm_login', compact('erros_bd'));
        }

        // Verifica se a senha corresponde ao gravado na base de dados
        if(!Hash::check($request->text_senha, $usuario->senha)) {
            $erros_bd = ['Senha inválida.'];
            return view('usuario_frm_login', compact('erros_bd'));
        }

        // Criar/abrir sessão de usuário
        Session::put('login', 'sim');
        Session::put('usuario', $usuario->usuario);
        
        return redirect('/');       
    }

    public function logout() {
        //logout da sessão (destruir a sessão e redirecionar ao form login)

        // Destruir a sessão
        Session::flush();
        return redirect('/');
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

        // Vai buscar o usuário que contém a conta de e-mail indicada
        $usuario = usuarios::where('email', $request->text_email)->get();
        if($usuario->count() == 0) {
            $erros_bd = ['O e-mail não está associado a nenhuma conta de usuário.'];
            return view('usuario_frm_recuperar_senha', compact('erros_bd'));
        }

        // Atualizar a senha do usuário para nova senha (senha de recuperação)
        $usuario = $usuario->first();

        // Criar uma nova senha aleatória
        $nova_senha = geradorSenha::criarCodigo();
        $usuario->senha = Hash::make($nova_senha);       
        $usuario->save();
        
        // Enviar e-mail ao usuário com nova senha
        Mail::to($usuario->email)->send(new emailRecuperarSenha($nova_senha));
       
        // Apresentar view ao usuário: Um e-mail foi enviado para sua caixa de mensagem
        return redirect('/usuario_email_enviado');        
    } 

    // E-mail enviado
    public function emailEnviado() {
        return view('usuario_email_enviado');
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

        // Verifica se existe um usuário com nome ou e-mail duplicado
        $dados = usuarios::where('usuario', "=", $request->text_usuario)
                         ->orWhere('email', '=', $request->text_email)
                         ->get();
        if($dados->count() != 0) {
            $erros_bd = ['Já existe um usuário com nome ou e-mail duplicado.'];
            return view('usuario_frm_criar_conta', compact('erros_bd'));
        } 

        // Inserir novo usuário na base de dados
        $novo = new usuarios;
        $novo->usuario = $request->text_usuario;
        $novo->senha = Hash::make($request->text_senha);
        $novo->email = $request->text_email;
        $novo->save();

        return redirect('/');
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
    	// senha: 123456

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
