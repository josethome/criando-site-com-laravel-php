@extends('layouts.login')

@section('conteudo')

	<div class="row text-center">		
		<img src="{{ asset('images/lock.jpg') }}" id="img-lock" alt="Ícone-lock - acesso ao sistema">
	</div>

	<div class="row">
		
		<div class="col-md-4 col-md-offset-4">

			{{-- Erros (validação) --}}
			@include('inc.erros')			
			
			<form method="POST" action="/usuarios_fazer_login"> 

			  {{ csrf_field() }}				

			  {{-- Usuário --}}
			  <div class="form-group">
			    <label for="id_usuario">Usuário:</label>
			    <input type="text" class="form-control" id="id_usuario" name="text_usuario" aria-describedby="emailHelp" placeholder="Nome do usuário">	    
			  </div>

			  {{-- Senha --}}
			  <div class="form-group">
			    <label for="id_senha">Senha:</label>
			    <input type="password" class="form-control" id="id_senha" name="text_senha" placeholder="Senha do usuário">
			  </div>
			  
			  {{-- Submit --}}
			  <button type="submit" class="btn btn-primary">Login</button>			
			</form><hr>

				{{-- Criar nova conta --}}
				<a href="/inserir_usuario">Criar nova conta.</a>
		</div> 
		
	</div>

@endsection