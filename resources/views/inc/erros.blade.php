{{-- Controle de errros aplicado a qualquer formulário --}}
@if(count($errors) != 0)

	{{-- {{ dd($errors) }} --}}
	@foreach ($errors->all() as $erro)
		<p class="alert alert-danger">{{ $erro }}</p>
	@endforeach	
@endif