<form method="POST" action="usuarios">
	
	{{ csrf_field() }}

	Usuário:
	<input type="text" name="text_usuario">
	</br>
	Senha:
	<input type="password" name="text_senha">
	</br>
	<input type="submit" value="Entrar">
</form>