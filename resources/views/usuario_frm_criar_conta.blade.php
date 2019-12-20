@extends('layouts.usuarios')

{{-- CRIAR NOVA CONTA DE USUÁRIO --}}

@section('conteudo')

	<div class="row">
		
		<div class="col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2 col-xs-12">

			{{-- Apresentação de erros de validação --}}
			@include('inc.erros')

			<form method="POST" action="/usuario_executar_criar_conta">

				{{-- CSRF --}}

				{{ csrf_field() }}

				{{-- Usuário --}}
				<div class="form-group">
					<label for="id_text_usuario">Usuário:</label>
					<input type="text" class="form-control" id="id_text_usuario" name="text_usuario" placeholder="Nome do usuário">
				</div> 

				{{-- Senha --}}
				<div class="form-group">
					<label for="id_text_senha">Senha:</label>
					<input type="password" class="form-control" id="id_text_senha" name="text_senha" placeholder="Senha do usuário">					
				</div>

				{{-- Repetir Senha --}}
				<div class="form-group">
					<label for="id_text_senha_repetida">Repetir Senha:</label>
					<input type="password" class="form-control" id="id_text_senha_repetida" name="text_senha_repetida" placeholder="Repetir senha do usuário">					
				</div>

				{{-- E-mail do Usuário --}}
				<div class="form-group">
					<label for="id_text_email">Endereço de e-mail:</label>
					<input type="text" class="form-control" id="id_text_email" name="text_email" placeholder="E-mail do usuário">
				</div> 

				{{-- Aceitação das condições do serviço --}}
				<div class="form-group text-center">
					
					<input type="checkbox" id="id_check_termos_condicoes" name="check_termos_condicoes" value="1">
					<label for="id_check_termos_condicoes"> 
						Concordo com os termos e condições.
					</label>
				</div>								

				{{-- Submeter/Enviar --}}
				<div class="text-center">					
					<button type="submit" class="btn btn-success btn-lg btn-custom">
						<span class="glyphicon glyphicon-user img-circle text-success btn-icon"></span> Criar nova conta
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