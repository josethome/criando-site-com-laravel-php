
<div>
	<h1>
		Blade template engine
	</h1> 	

	{{-- bloco de código em PHP puro --}}
	@php

		// este é um comentário de PHP puro
		//echo '<p>Usuários inscritos na plataforma: '.count($usuarios).'</p>';

	@endphp

	{{-- bloco de código - IF statement --}}
	@if(count($usuarios) === 0) 
		
		<p>Não exitem usuários incritos.</p>

	@elseif(count($usuarios) === 1)

		<p>Temos apenas 1 inscrito.</p>

	@else
		<p>Temos {{count($usuarios)}} usuários inscritos.</p>

		<p>Fantástico</p>

	@endif	

	{{-- bloco de código - IF statement --}}
	@unless(count($usuarios) === 0)
		<p>Ativou o código do unless.</p>
	@endunless

</div>