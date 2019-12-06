<div>
	<p>Primeira secção da página</p>
</div>

@component('componentes_mensagem')
	{{-- título --}}
	@slot('titulo')
		Este é o título alterado.	
	@endslot

	@slot('mensagem')
		Este é o texto que vai surgir na mensagem.
	@endslot
@endcomponent

<div>
	<p>Fundo da página</p>
</div>