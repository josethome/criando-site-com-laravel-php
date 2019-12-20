@extends('layouts.app')

@section('conteudo')

	{{-- Apresenta o formulário para criação de nova notícia --}}
	<form method="POST" action="/salvar_noticia">

		{{-- CSRF --}}
		{{ csrf_field() }}
		
		<h3>Nova notícia</h3>
		
		{{-- Título da notícia --}}
		<div class="form-group">
			<label for="titulo">Título:</label>
			<input type="text" class="form-control" id="titulo" name="text_titulo" placeholder="Título" required>
		</div>

		{{-- Texto da notícia --}}
		<div class="form-group">
			<label for="texto">Texto:</label>
			<textarea class="form-control" id="texto" name="text_texto" placeholder="Texto da notícia" rows="10" required></textarea>			
		</div> 

		{{-- Autor da notícia --}}
		<div class="form-group">
			<label for="autor">Autor:</label>
			<input type="text" class="form-control" id="autor" name="text_autor" placeholder="Autor" required>
		</div>

		{{-- Visibilidade da notícia --}}
		<div class="form-group text-center">
			<input type="checkbox" name="check_visivel" checked> Notícia visível.			
		</div>

		{{-- Gravar ou salvar a notícia --}}
		<div class="text-center">
			<button class="btn btn-success btn-lg" role="submit">Salvar</button>
		</div>		
	</form>

@endsection