<?php

use Illuminate\Database\Seeder;

class MateriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materias')->insert([
            'descricao' => 'Magia',
            'user_id' => 5
        ]);
        DB::table('materias')->insert([
            'descricao' => 'Poçoes',
            'user_id' => 5
        ]);
        DB::table('materias')->insert([
            'descricao' => 'Animais Fantasticos',
            'user_id' => 5
        ]);
        DB::table('materias')->insert([
            'descricao' => 'Luta Corporal',
            'user_id' => 6
        ]);
        DB::table('materias')->insert([
            'descricao' => 'Defesa Pessoal',
            'user_id' => 6
        ]);
        DB::table('materias')->insert([
            'descricao' => 'Tecnica One Punch',
            'user_id' => 6
        ]);
    }
}
