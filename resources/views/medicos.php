<?php 

	//echo "<p>$nome_medico, médico $especialidade.</p>";

	//var_dump($dados);

	foreach ($dados as $medico) {
		
		echo '<p>Nome: '. $medico['nome_medico'] . ' | Especialidade: '. $medico['especialidade'];
	}

?>