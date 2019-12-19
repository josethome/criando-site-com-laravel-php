@extends('layouts.usuarios')

{{-- LOGIN DE USUÁRIO --}}

@section('conteudo')

	<div class="row">
		
		<div class="col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2 col-xs-12">

			{{-- Apresentação de erros de validação --}}

			<form method="POST" action="/">

				{{-- CSRF --}}

				{{ csrf_field() }}

				{{-- Usuário --}}
				<div class="form-group">
					<label for="id_text_usuario">Usuário:</label>
					<input type="text" class="form-control" id="id_text_usuario" name="text_usuario" placeholder="Nome do usuário" required>
				</div> 

				{{-- Senha --}}
				<div class="form-group">
					<label for="id_text_senha">Senha:</label>
					<input type="password" class="form-control" id="id_text_senha" name="text_senha" placeholder="Senha do usuário" required>					
				</div>

				{{-- Links para criar nova conta de usuário --}}
				<div class="text-center margin-top-20">
					
					<a href="/usuario_frm_criar_conta">Criar nova conta</a>
					
					{{-- Links para recuperar senha --}} 
					<a href="/usuario_frm_recuperar_senha">Recuperar senha</a>				

				</div>				

				{{-- Submeter --}}
				<div class="text-center">					
					<button type="submit" class="btn btn-success btn-lg btn-custom">
						<span class="glyphicon glyphicon-user img-circle text-success btn-icon"></span> Entrar
					</button> 
				</div>				

			</form>
			
		</div>

	</div>

@endsection