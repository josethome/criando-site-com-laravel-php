<form method="POST" action="/noticias">

	{{ csrf_field() }}
	
	<label>Título:</label>	
		<input type="text" name="text_titulo"><br><br>

	<label>Texto:</label>	
		<input type="text" name="text_texto"><br><br>

	<label>Autor:</label>	
		<input type="text" name="text_autor"><br><br>

	<input type="submit" value="Salvar">
	
</form>