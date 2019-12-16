<?php

use Illuminate\Database\Seeder;

class ClientesTableSeeder extends Seeder
{     
    public function run()
    {
        // número total de clientes que pretende inserir na base de dados

        $numero_total_clientes = 500;

        // define fontes de informação para seeds
        $nomes = [
    		'Joao', 'Ana',  'Miguel', 'Marilia', 'Gabriela', 'Carlos', 
            'Francisco', 'Marta', 'Susana', 'Alice', 'Pedro', 'Rui', 
            'Manuel', 'Gilberto', 'Mario', 'Guilherme', 'Rubens', 'Mateus', 
            'Luis', 'Miguel', 'Mariana', 'Custodio', 'Alberto'
        ];

        $sobrenomes = [
            'Rodrigues', 'Santos', 'Oliveira', 'Martins', 'Costa', 'Teixeira',
            'Almeida', 'Ribeiro', 'Pereira', 'Simoes', 'Damiao', 'Henriques',
            'Sousa', 'Albuquerque', 'Valentino', 'Guimaraes', 'Pacheco',
            'Cardoso', 'Moreira', 'Figueiredo', 'Silva'
        ];

         $cidades = [
    		'Lisboa', 'Porto', 'Coimbra', 'Viseu', 'Faro', 'Braga', 'Aveiro',
            'Brasília', 'São Paulo', 'Rio de Janeiro', 'Florianópolis',
            'Belém', 'Fortaleza', 'Curitiba'

        ];

        $dominios_de_email = [
            '@gmail.com', '@hotmail.com', '@outlook.com', '@microsoft', 
            '@empresa.com', '@servico.com', '@estado.com' 
        ];


        // ciclo para inserção de clientes na BD
        for($i = 0; $i < $numero_total_clientes; $i ++) {
        	$nome = $nomes[array_rand($nomes)];
            $sobrenome = $sobrenomes[array_rand($sobrenomes)];
            $cidade = $cidades[array_rand($cidades)];

            // data de nascimento
            $dia = rand(1,25);
            $mes = rand(1,12);
            $ano = rand(1960, 2000);
            $data_nascimento = $ano.'-'.$mes.'-'.$dia;

            // cria o endereço de e-mail do cliente
            $email = strtolower($nome) . '.'.strtolower($sobrenome).$dominios_de_email[array_rand($dominios_de_email)];

            $dados = [
                'nome' => $nome,
                'sobrenome' => $sobrenome,
                'cidade' => $cidade,
                'email' => $email,
                'data_nascimento' => $data_nascimento        		
        	];

            // insere o cliente na base de dados
        	DB::table('clientes')->insert($dados);           

        }        
    }
}
