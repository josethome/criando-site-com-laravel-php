<?php 

	$medicos = [

	0 => 	[
				'nome_medico' => 'Eduardo',
				'especialidade' => 'Ortopedista'
			],

	1 => 	[
				'nome_medico' => 'Maria',
				'especialidade' => 'Geral'
			],

	2 =>	[
				'nome_medico' => 'Joaquim',
				'especialidade' => 'Cirurgião'
			]
		];

	echo 'Nome do médico: '.$medicos[$id]['nome_medico']. '</br>Especialidade:
	 '.$medicos[$id]['especialidade'];

?>