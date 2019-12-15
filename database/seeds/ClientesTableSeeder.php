<?php

use Illuminate\Database\Seeder;

class ClientesTableSeeder extends Seeder
{     
    public function run()
    {
        // povoando nosso banco de dados
        $nomes = [
    		'joao', 'sebastiao', 'carlos', 'miguel', 'ana', 'maria', 'fabiana', 'cristina'
        ];

         $cidades = [
    		'Viseu', 'Lisboa', 'Lisboa', 'Rio de Janeiro', 'Coimbra', 'São Paulo', 'São Paulo', 'Rio de Janeiro'
        ];

        for($indice = 0; $indice < count($nomes); $indice++) {

        	$dados = [
        		'nome_cliente' => $nomes[$indice],
        		'cidade' => $cidades[$indice]

        	];

        	DB::table('clientes')->insert($dados);

        }        
    }
}
