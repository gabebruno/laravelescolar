<?php

use Illuminate\Database\Seeder;

class TiposUsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipos_usuarios')->insert([
            'descricao' => 'Aluno'
        ]);
        DB::table('tipos_usuarios')->insert([
            'descricao' => 'Professor'
        ]);
        DB::table('tipos_usuarios')->insert([
            'descricao' => 'Gestor'
        ]);
    }
}
