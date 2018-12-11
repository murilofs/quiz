<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnswersTableSeeder extends Seeder
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
                'question_id' => 1,
                'letter' => 'a',
                'answer' => 'Acorda cedo e come frutas cortadas metodicamente.'
            ],
            [
                'question_id' => 1,
                'letter' => 'b',
                'answer' => 'Sai da cama com o despertador e se prepara para a batalha da semana.'
            ],
            [
                'question_id' => 1,
                'letter' => 'c',
                'answer' => 'Só consegue lembrar do seu nome depois do café.'
            ],
            [
                'question_id' => 1,
                'letter' => 'd',
                'answer' => 'Levanta e faz café pra todos da casa.'
            ],
            [
                'question_id' => 1,
                'letter' => 'e',
                'answer' => 'Passa o café e conserta um erro no HTML.'
            ],
            [
                'question_id' => 2,
                'letter' => 'a',
                'answer' => 'Ela vai atrapalhar seu horário. Oculte o corpo.'
            ],
            [
                'question_id' => 2,
                'letter' => 'b',
                'answer' => 'Levanta a senhora e jura protegê-la com sua vida.'
            ],
            [
                'question_id' => 2,
                'letter' => 'c',
                'answer' => 'Ajuda-a, mas questiona sua real identidade.'
            ],
            [
                'question_id' => 2,
                'letter' => 'd',
                'answer' => 'Oferece para caminharem juntos até um destino em comum.'
            ],
            [
                'question_id' => 2,
                'letter' => 'e',
                'answer' => 'Testa se ela roda bem no Firefox. Não roda.'
            ],
            [
                'question_id' => 3,
                'letter' => 'a',
                'answer' => 'Convence parte das pessoas a esperarem o próximo.'
            ],
            [
                'question_id' => 3,
                'letter' => 'b',
                'answer' => 'Ignora as pessoas no elevador e entra de qualquer forma.'
            ],
            [
                'question_id' => 3,
                'letter' => 'c',
                'answer' => 'Você questiona a realidade, as coisas e tudo mais. Sobe de escada.'
            ],
            [
                'question_id' => 3,
                'letter' => 'd',
                'answer' => 'Com uma leve intimidação passivo-agressiva, encontra um lugar no elevador.'
            ],
            [
                'question_id' => 3,
                'letter' => 'e',
                'answer' => 'Cria um app que mostra a lotação do elevador. Vende o app e fica milionário.'
            ],
            [
                'question_id' => 4,
                'letter' => 'a',
                'answer' => 'Fala sobre a política, eleições, como tudo é um absurdo.'
            ],
            [
                'question_id' => 4,
                'letter' => 'b',
                'answer' => 'Larga uma frase polêmica e vê uma pequena guerra se formar.'
            ],
            [
                'question_id' => 4,
                'letter' => 'c',
                'answer' => 'Puxa um assunto e te lembram que já foi discutido semana passada.'
            ],
            [
                'question_id' => 4,
                'letter' => 'd',
                'answer' => 'Sugere que os colegas trabalhem na ideia de um novo projeto.'
            ],
            [
                'question_id' => 4,
                'letter' => 'e',
                'answer' => 'Desabafa sobre como odeia PHP. Todo mundo na sala adora PHP.'
            ],
            [
                'question_id' => 5,
                'letter' => 'a',
                'answer' => 'Vou chamar aqui o meu Uber.'
            ],
            [
                'question_id' => 5,
                'letter' => 'b',
                'answer' => 'Pegarei o bus junto com o resto do povo.'
            ],
            [
                'question_id' => 5,
                'letter' => 'c',
                'answer' => 'No ponto de ônibus mais uma vez, espero não errar a linha de novo.'
            ],
            [
                'question_id' => 5,
                'letter' => 'd',
                'answer' => 'Vou de carro, mas ofereço uma carona para os colegas.'
            ],
            [
                'question_id' => 5,
                'letter' => 'e',
                'answer' => 'Acho que descobri uma forma de fazer aquela senhora rodar no Firefox.'
            ],
        ];

        DB::table('answers')->insert($data);
    }
}
