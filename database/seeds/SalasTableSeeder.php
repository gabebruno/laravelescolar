<?php

use Illuminate\Database\Seeder;

class SalasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('salas')->insert([
            'descricao' => '1ª Ano A',
            'ensino' => 'Fundamental 1'
        ]);
        DB::table('salas')->insert([
            'descricao' => '2º Ano A',
            'ensino' => 'Fundamental 1'
        ]);
        DB::table('salas')->insert([
            'descricao' => '3ª Ano A',
            'ensino' => 'Fundamental 1'
        ]);
        DB::table('salas')->insert([
            'descricao' => '4ª Ano A',
            'ensino' => 'Fundamental 1'
        ]);
        DB::table('salas')->insert([
            'descricao' => '5ª Ano A',
            'ensino' => 'Fundamental 2'
        ]);
        DB::table('salas')->insert([
            'descricao' => '6ª Ano A',
            'ensino' => 'Fundamental 2'
        ]);
        DB::table('salas')->insert([
            'descricao' => '7ª Ano A',
            'ensino' => 'Fundamental 2'
        ]);
        DB::table('salas')->insert([
            'descricao' => '8ª Ano A',
            'ensino' => 'Fundamental 2'
        ]);
        DB::table('salas')->insert([
            'descricao' => '9ª Ano A',
            'ensino' => 'Fundamental 2'
        ]);
    }
}
