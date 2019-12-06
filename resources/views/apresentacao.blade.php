<h1>Include</h1>

<div>Este é o texto da primera secção</div>

@php
	
	$nomes = [
		'Gioconda',
		'Manoela',
		'Leticia'
	];
@endphp

{{-- ciclo de apresentação dos nomes --}}
@foreach ($nomes as $nome)
	@include('inc.linha_dados')	
@endforeach

<div>Este é o texto da última secção</div>