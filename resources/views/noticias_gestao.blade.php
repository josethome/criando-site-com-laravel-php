@extends('layouts.app')

@section('conteudo')
	
	{{-- Verifica se existem notícias --}}
	@if (count($noticias) == 0)

		<div class="row">

			<div class="col-md-12">

				<p class="alert alert-danger text-center">Não foram encontradas notícias</p> 
			
			</div>

		</div>

	@else

		@foreach ($noticias as $noticia)
			
			@include('inc.linha_noticia')

		@endforeach

	@endif

@endsection

