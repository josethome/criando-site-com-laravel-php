<h1>TESTES DE LOOPS</h1>

{{-- for loop --}}

{{-- @for($m = 0; $m <= $max; $m ++)
	<p>O valor de $m é: {{ $m }}</p>
@endfor --}}

{{-- foreach --}}
@foreach ($nomes as $nome)
	
	@if($loop->last)
		
		<p style="color: red">{{ $nome }}</p>
	@else

		<p>{{ $nome }}</p>

	@endif 
@endforeach