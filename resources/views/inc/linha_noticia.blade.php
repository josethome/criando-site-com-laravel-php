<div class="row">
	
	{{-- Título --}}
	<div class="col-md-6">
		<strong>{{ $noticia->titulo }}</strong>
	</div>


	{{-- Autor --}}
	<div class="col-md-3">
		{{ $noticia->autor }}
	</div>


	{{-- Ícones de gestão --}}
	<div class="col-md-3 text-right">
		
		{{-- Visibilidade --}}
		<a href="#">
			<span class="glyphicon glyphicon-eye-open" style="margin-left: 10px"></span>
		</a>
		
		{{-- Editar --}}
		<a href="#">
			<span class="glyphicon glyphicon-pencil" style="margin-left: 10px"></span>
		</a>

		{{-- Deletar --}}
		<a href="#">
			<span class="glyphicon glyphicon-trash" style="margin-left: 10px"></span>
		</a>


	</div>
</div>