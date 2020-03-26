<?php

use Illuminate\Database\Seeder;

class AlunosSeriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alunos_series')->insert([
            'user_id' => 2,
            'sala_id' => 24,
            'exercicio' => 2019
        ]);
        DB::table('alunos_series')->insert([
            'user_id' => 3,
            'sala_id' => 25,
            'exercicio' => 2019
        ]);
        DB::table('alunos_series')->insert([
            'user_id' => 4,
            'sala_id' => 26,
            'exercicio' => 2019
        ]);
        DB::table('alunos_series')->insert([
            'user_id' => 2,
            'sala_id' => 25,
            'exercicio' => 2020
        ]);
        DB::table('alunos_series')->insert([
            'user_id' => 3,
            'sala_id' => 26,
            'exercicio' => 2020
        ]);
        DB::table('alunos_series')->insert([
            'user_id' => 4,
            'sala_id' => 27,
            'exercicio' => 2020
        ]);
    }
}
