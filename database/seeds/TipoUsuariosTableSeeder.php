<?php

use Illuminate\Database\Seeder;

class TipoUsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipousuarios')->insert([
            'descricao' => 'Aluno'
        ]);
        DB::table('tipousuarios')->insert([
            'descricao' => 'Professor'
        ]);
        DB::table('tipousuarios')->insert([
            'descricao' => 'Gestor'
        ]);
    }
}
