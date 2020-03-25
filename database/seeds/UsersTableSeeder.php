<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nome' => 'Charles Xavier',
            'email' => 'professorx@gmail.com',
            'telefone' => '999199555',
            'endereco' => 'Escola para Jovens Super Dotados, sn',
            'cpf' => '01745738045',
            'tipo_id' => 3,
            'password' => bcrypt('123456')
        ]);
        DB::table('users')->insert([
            'nome' => 'Hermione Granger',
            'email' => 'hermione@gmail.com',
            'telefone' => '991119111',
            'endereco' => 'Largo Grimmauld, 12, London',
            'cpf' => '06120811095',
            'tipo_id' => 1,
            'password' => bcrypt('123456')
        ]);
        DB::table('users')->insert([
            'nome' => 'Harry Potter',
            'email' => 'harry@gmail.com',
            'telefone' => '999221443',
            'endereco' => 'R dos Alfeneiros, n 4, Curitiba - PR',
            'cpf' => '10438176030',
            'tipo_id' => 1,
            'password' => bcrypt('123456')
        ]);
        DB::table('users')->insert([
            'nome' => 'Genos',
            'email' => 'genos@gmail.com',
            'telefone' => '991119111',
            'endereco' => 'Rua dos Ciborgues, n 25, China',
            'cpf' => '94255452008',
            'tipo_id' => 1,
            'password' => bcrypt('123456')
        ]);
        DB::table('users')->insert([
            'nome' => 'Hagrid',
            'email' => 'hagrid@gmail.com',
            'telefone' => '991522565',
            'endereco' => 'R dos Alfeneiros, n 4, Curitiba - PR',
            'cpf' => '30683905082',
            'tipo_id' => 2,
            'password' => bcrypt('123456')
        ]);
        DB::table('users')->insert([
            'nome' => 'Saitama',
            'email' => 'saitama@gmail.com',
            'telefone' => '991689898',
            'endereco' => 'R Saitama, n 1, São José dos Campos - SP',
            'cpf' => '17339042040',
            'tipo_id' => 2,
            'password' => bcrypt('123456')
        ]);
    }
}
