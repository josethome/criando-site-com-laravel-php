@extends('layouts.app')

@section('conteudo')

	{{-- Apresenta o formulário para editar notícia --}}
	<form method="POST" action="/atualizar_noticia/{{ $noticia->id_noticia }}">

		{{-- CSRF --}}
		{{ csrf_field() }} 
		
		<h3>Editar notícia</h3>

		{{-- Título da notícia --}}
		<div class="form-group">
			<label for="titulo">Título:</label>
			<input type="text" class="form-control" id="titulo" name="text_titulo" value="{{ $noticia->titulo }}" required>
		</div>

		{{-- Texto da notícia --}}
		<div class="form-group">
			<label for="texto">Texto:</label>
			<textarea class="form-control" id="texto" name="text_texto" placeholder="Texto da notícia" rows="10" required>{{ $noticia->texto }}</textarea>			
		</div>

		{{-- Autor da notícia --}}
		<div class="form-group">
			<label for="autor">Autor:</label>
			<input type="text" class="form-control" id="autor" name="text_autor" value="{{ $noticia->autor }}" required>
		</div>

		{{-- Visibilidade da notícia --}}
		<div class="form-group text-center">

			@if ($noticia->visivel == 1)
				<input type="checkbox" name="check_visivel" checked> Notícia visível.
			@else
				<input type="checkbox" name="check_visivel"> Notícia visível.
			@endif 						
		</div>

		{{-- Atualizar a notícia --}}
		<div class="text-center">
			<button class="btn btn-success btn-lg" role="submit">Atualizar</button>
		</div>		
	</form>

@endsection