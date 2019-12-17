{{-- Página Inicial - Apresenta as notícias visíveis --}}
@extends('layouts.app')

@section('conteudo')
	
	@if (count($dados) == 0)

		{{-- Não existem notícias --}}
		<p class="alert alert-danger text-center">Não foram encontradas notícias</p>

	@else 

		{{-- Apresentar as notícias existentes na base de dados --}}	
		
		@foreach ($dados as $noticia)
			
			{{-- Cabeçalho da notícia (título, autor, data-hora) --}}
			<div class="row bg-success">

				{{-- Título --}}
				<div class="col-md-9">
					<h2>{{ $noticia->titulo }}</h2>	
				</div>

				{{-- Autor data e hora do registro  --}}
				<div class="col-md-3 text-right" style="padding-top: 25px">
					<span class="glyphicon glyphicon-pencil">						
					</span> {{ $noticia->autor }} 
					<span class="glyphicon glyphicon-time">
					</span> {{ $noticia->updated_at }}
				</div>				
			</div>

			{{-- Contéudo da notícia --}}
			<div class="row">
				<div class="col-md-12" style="padding-top: 10px">
					{{ $noticia->texto }}
				</div>
			</div>

			{{-- Separador --}}
			<hr>
		@endforeach
	@endif

@endsection