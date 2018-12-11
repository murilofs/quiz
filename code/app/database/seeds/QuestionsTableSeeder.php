<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'number' => 1,
                'question' => 'De manhã, você:'
            ],
            [
                'number' => 2,
                'question' => 'Indo para o trabalho você encontra uma senhora idosa caída na rua.'
            ],
            [
                'number' => 3,
                'question' => 'Chega no prédio e o elevador está cheio.'
            ],
            [
                'number' => 4,
                'question' => 'Você chega no trabalho e as convenções sociais te obrigam a puxar assunto.'
            ],
            [
                'number' => 5,
                'question' => 'A pauta pegou o dia todo, mas você está indo para casa.'
            ]
        ];

        DB::table('questions')->insert($data);
    }
}
