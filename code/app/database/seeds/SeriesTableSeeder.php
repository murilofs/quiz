<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeriesTableSeeder extends Seeder
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
                'letter' => 'a',
                'name' => 'House of Cards',
                'description' => 'Você é House of Cards: ataca o problema com método e faz de tudo para resolver a situação.'
            ],
            [
                'letter' => 'b',
                'name' => 'Game of Thrones',
                'description' => 'Você é Game of Thrones: não tem muita delicadeza nas ações, mas resolve o problema de forma prática.'
            ],
            [
                'letter' => 'c',
                'name' => 'Lost',
                'description' => 'Você é Lost: faz as coisas sem ter total certeza se é o caminho certo ou se faz sentido, mas no final dá tudo certo.'
            ],
            [
                'letter' => 'd',
                'name' => 'Breaking Bad',
                'description' => 'Você é Breaking Bad: pra fazer acontecer você toma a liderança, mas sempre contando com seus parceiros.'
            ],
            [
                'letter' => 'e',
                'name' => 'Silicon Valley',
                'description' => 'Você é Silicon Valley: vive a tecnologia o tempo todo e faz disso um mantra para cada situação no dia.'
            ],
        ];

        DB::table('series')->insert($data);
    }
}
