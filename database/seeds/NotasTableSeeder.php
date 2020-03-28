<?php

use Illuminate\Database\Seeder;

class NotasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notas')->insert([
            'salauser_id' => 3,
            'materia_id' => 4,
            'nota1bi' => 7.5,
            'nota2bi' => 6.5,
            'nota3bi' => 10,
            'nota4bi' => 5
        ]);
        DB::table('notas')->insert([
            'salauser_id' => 3,
            'materia_id' => 5,
            'nota1bi' => 6.5,
            'nota2bi' => 5.5,
            'nota3bi' => 9,
            'nota4bi' => 9
        ]);
        DB::table('notas')->insert([
            'salauser_id' => 3,
            'materia_id' => 6,
            'nota1bi' => 8.5,
            'nota2bi' => 6.5,
            'nota3bi' => 8,
            'nota4bi' => 5
        ]);
        DB::table('notas')->insert([
            'salauser_id' => 3,
            'materia_id' => 1,
            'nota1bi' => 2.5,
            'nota2bi' => 8.5,
            'nota3bi' => 9,
            'nota4bi' => 0
        ]);
        DB::table('notas')->insert([
            'salauser_id' => 3,
            'materia_id' => 2,
            'nota1bi' => 6.5,
            'nota2bi' => 5.5,
            'nota3bi' => 9,
            'nota4bi' => 9
        ]);
        DB::table('notas')->insert([
            'salauser_id' => 3,
            'materia_id' => 3,
            'nota1bi' => 9.5,
            'nota2bi' => 8.5,
            'nota3bi' => 9,
            'nota4bi' => 10
        ]);
        DB::table('notas')->insert([
            'salauser_id' => 1,
            'materia_id' => 4,
            'nota1bi' => 7.5,
            'nota2bi' => 6.5,
            'nota3bi' => 10,
            'nota4bi' => 5
        ]);
        DB::table('notas')->insert([
            'salauser_id' => 1,
            'materia_id' => 5,
            'nota1bi' => 9.5,
            'nota2bi' => 8.5,
            'nota3bi' => 9,
            'nota4bi' => 10
        ]);
        DB::table('notas')->insert([
            'salauser_id' => 1,
            'materia_id' => 6,
            'nota1bi' => 6.5,
            'nota2bi' => 5.5,
            'nota3bi' => 9,
            'nota4bi' => 9
        ]);
        DB::table('notas')->insert([
            'salauser_id' => 1,
            'materia_id' => 3,
            'nota1bi' => 7.5,
            'nota2bi' => 6.5,
            'nota3bi' => 10,
            'nota4bi' => 5
        ]);
        DB::table('notas')->insert([
            'salauser_id' => 1,
            'materia_id' => 2,
            'nota1bi' => 9.5,
            'nota2bi' => 8.5,
            'nota3bi' => 9,
            'nota4bi' => 10
        ]);
        DB::table('notas')->insert([
            'salauser_id' => 1,
            'materia_id' => 1,
            'nota1bi' => 2.5,
            'nota2bi' => 8.5,
            'nota3bi' => 9,
            'nota4bi' => 0
        ]);
        DB::table('notas')->insert([
            'salauser_id' => 2,
            'materia_id' => 2,
            'nota1bi' => 6.5,
            'nota2bi' => 5.5,
            'nota3bi' => 9,
            'nota4bi' => 9
        ]);
        DB::table('notas')->insert([
            'salauser_id' => 2,
            'materia_id' => 1,
            'nota1bi' => 2.5,
            'nota2bi' => 8.5,
            'nota3bi' => 9,
            'nota4bi' => 0
        ]);
        DB::table('notas')->insert([
            'salauser_id' => 2,
            'materia_id' => 3,
            'nota1bi' => 7.5,
            'nota2bi' => 6.5,
            'nota3bi' => 10,
            'nota4bi' => 5
        ]);
        DB::table('notas')->insert([
            'salauser_id' => 2,
            'materia_id' => 6,
            'nota1bi' => 9.5,
            'nota2bi' => 8.5,
            'nota3bi' => 9,
            'nota4bi' => 10
        ]);
        DB::table('notas')->insert([
            'salauser_id' => 2,
            'materia_id' => 4,
            'nota1bi' => 9.5,
            'nota2bi' => 8.5,
            'nota3bi' => 9,
            'nota4bi' => 10
        ]);
        DB::table('notas')->insert([
            'salauser_id' => 2,
            'materia_id' => 5,
            'nota1bi' => 7.5,
            'nota2bi' => 6.5,
            'nota3bi' => 10,
            'nota4bi' => 5
        ]);
    }
}
