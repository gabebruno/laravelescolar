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
        DB::table('tipo_usuarios')->insert([
            'descricao' => 'Aluno'
        ]);
        DB::table('tipo_usuarios')->insert([
            'descricao' => 'Professor'
        ]);
        DB::table('tipo_usuarios')->insert([
            'descricao' => 'Gestor'
        ]);
    }
}
