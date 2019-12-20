@extends('layouts.usuarios')

{{-- RECUUPERAR SENHA --}}

@section('conteudo')

	<div class="row">
		
		<div class="col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2 col-xs-12">

			{{-- Apresentação de erros de validação --}}
			@include('inc.erros')


			<form method="POST" action="/usuario_executar_recuperar_senha"> 
				
				{{-- CSRF --}}

				{{ csrf_field() }} 				

				{{-- E-mail do Usuário --}}
				<div class="form-group">
					<label for="id_text_email">Endereço de e-mail:</label>
					<input type="text" class="form-control" id="id_text_email" name="text_email" placeholder="E-mail do usuário">
				</div> 											

				{{-- Submeter/Enviar --}}
				<div class="text-center">					
					<button type="submit" class="btn btn-success btn-lg btn-custom">
						<span class="glyphicon glyphicon-user img-circle text-success btn-icon"></span> Recuperar senha
					</button> 
				</div>

				{{-- Voltar ao início --}} 
				<div class="text-center margin-top-20">					
					
					<a href="/">
						<span class="glyphicon glyphicon-angle-left"></span> Voltar
					</a>

				</div>				

			</form>
			
		</div>

	</div>

@endsection