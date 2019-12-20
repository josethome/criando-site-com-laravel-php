{{-- Controle de errros aplicado a qualquer formulário --}}
{{-- @if(count($errors) != 0)

	{{ dd($errors) }}
	@foreach ($errors->all() as $erro)
		<p class="alert alert-danger">{{ $erro }}</p>
	@endforeach	
@endif --}}

{{-- Apresentação dos erros de validação --}}
@if(count($errors) != 0)

	<div class="alert alert-danger">
		
		{{-- Título da caixa de mensagem: erros --}} 
		@if(count($errors) == 1)
			
			<p class="titulo-erro">ERRO:</p>

		@else
				
			<p class="titulo-erro">ERROS:</p>

		@endif

		{{-- Apresentar os erros (concatenação) --}}
		<ul>
			@foreach ($errors->all() as $erro)
				
				<li>{{ $erro }}</li>

			@endforeach
		</ul>

	</div>

@endif

{{-- Apresentação dos erros de comunicação com base de dados --}}