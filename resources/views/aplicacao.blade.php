@extends('layouts.usuarios')

@section('conteudo')
	<p>Estou logado!</p>
	<p>Usuário Logado:<strong> {{ session('usuario') }}</strong></p>
	<a href="/usuario_logout">Logout</a>
@endsection