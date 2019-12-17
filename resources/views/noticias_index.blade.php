{{-- Página Inicial - Apresenta as notícias visíveis --}}
@extends('layouts.app')

@section('conteudo')
	
	@if (count($dados) == 0)
		{{-- Não existem notícias --}}
		<p class="alert alert-danger text-center">Não foram encontradas notícias</p>
	@else 
		{{-- Apresentar as notícias existentes na base de dados --}}	

	@endif

@endsection