<?php 

	$id_usuario = 10;	
	echo '<a href="'.route('usuarios.index').'">Index</a></br>';
	echo '<a href="'.route('usuarios.create').'">Create</a></br>';
	echo '<a href="'.route('usuarios.show', $id_usuario).'">Show</a>';

?>