<?php

use Illuminate\Database\Seeder;

class HorariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('horarios')->insert([
            'materia_id' => 1,
            'sala_id' => 4,
            'user_id' => 5,
            'exercicio' => 2020,
            'diasemana' => 'Segunda-Feira',
            'horainicio' => '07:10:00',
            'horafim' => '08:00:00'
        ]);
        DB::table('horarios')->insert([
            'materia_id' => 1,
            'sala_id' => 4,
            'user_id' => 5,
            'exercicio' => 2020,
            'diasemana' => 'Segunda-Feira',
            'horainicio' => '08:00:00',
            'horafim' => '08:50:00'
        ]);
        DB::table('horarios')->insert([
            'materia_id' => 4,
            'sala_id' => 4,
            'user_id' => 6,
            'exercicio' => 2020,
            'diasemana' => 'Segunda-Feira',
            'horainicio' => '08:50:00',
            'horafim' => '09:40:00'
        ]);
        DB::table('horarios')->insert([
            'materia_id' => 4,
            'sala_id' => 4,
            'user_id' => 6,
            'exercicio' => 2020,
            'diasemana' => 'Segunda-Feira',
            'horainicio' => '10:10:00',
            'horafim' => '11:00:00'
        ]);
        DB::table('horarios')->insert([
            'materia_id' => 2,
            'sala_id' => 4,
            'user_id' => 5,
            'exercicio' => 2020,
            'diasemana' => 'Terça-Feira',
            'horainicio' => '07:00:00',
            'horafim' => '07:50:00'
        ]);
        DB::table('horarios')->insert([
            'materia_id' => 2,
            'sala_id' => 4,
            'user_id' => 5,
            'exercicio' => 2020,
            'diasemana' => 'Terça-Feira',
            'horainicio' => '08:00:00',
            'horafim' => '08:50:00'
        ]);
        DB::table('horarios')->insert([
            'materia_id' => 5,
            'sala_id' => 4,
            'user_id' => 6,
            'exercicio' => 2020,
            'diasemana' => 'Terça-Feira',
            'horainicio' => '08:50:00',
            'horafim' => '09:40:00'
        ]);
        DB::table('horarios')->insert([
            'materia_id' => 5,
            'sala_id' => 4,
            'user_id' => 6,
            'exercicio' => 2020,
            'diasemana' => 'Terça-Feira',
            'horainicio' => '10:10:00',
            'horafim' => '11:00:00'
        ]);
        DB::table('horarios')->insert([
            'materia_id' => 3,
            'sala_id' => 4,
            'user_id' => 5,
            'exercicio' => 2020,
            'diasemana' => 'Quarta-Feira',
            'horainicio' => '07:00:00',
            'horafim' => '07:50:00'
        ]);
        DB::table('horarios')->insert([
            'materia_id' => 3,
            'sala_id' => 4,
            'user_id' => 5,
            'exercicio' => 2020,
            'diasemana' => 'Quarta-Feira',
            'horainicio' => '08:00:00',
            'horafim' => '08:50:00'
        ]);
        DB::table('horarios')->insert([
            'materia_id' => 6,
            'sala_id' => 4,
            'user_id' => 6,
            'exercicio' => 2020,
            'diasemana' => 'Quarta-Feira',
            'horainicio' => '08:50:00',
            'horafim' => '09:40:00'
        ]);
        DB::table('horarios')->insert([
            'materia_id' => 6,
            'sala_id' => 4,
            'user_id' => 6,
            'exercicio' => 2020,
            'diasemana' => 'Quarta-Feira',
            'horainicio' => '10:10:00',
            'horafim' => '11:00:00'
        ]);

        DB::table('horarios')->insert([
            'materia_id' => 1,
            'sala_id' => 5,
            'user_id' => 5,
            'exercicio' => 2020,
            'diasemana' => 'Segunda-Feira',
            'horainicio' => '07:10:00',
            'horafim' => '08:00:00'
        ]);
        DB::table('horarios')->insert([
            'materia_id' => 1,
            'sala_id' => 5,
            'user_id' => 5,
            'exercicio' => 2020,
            'diasemana' => 'Segunda-Feira',
            'horainicio' => '08:00:00',
            'horafim' => '08:50:00'
        ]);
        DB::table('horarios')->insert([
            'materia_id' => 4,
            'sala_id' => 5,
            'user_id' => 6,
            'exercicio' => 2020,
            'diasemana' => 'Segunda-Feira',
            'horainicio' => '08:50:00',
            'horafim' => '09:40:00'
        ]);
        DB::table('horarios')->insert([
            'materia_id' => 4,
            'sala_id' => 5,
            'user_id' => 6,
            'exercicio' => 2020,
            'diasemana' => 'Segunda-Feira',
            'horainicio' => '10:10:00',
            'horafim' => '11:00:00'
        ]);
        DB::table('horarios')->insert([
            'materia_id' => 2,
            'sala_id' => 5,
            'user_id' => 5,
            'exercicio' => 2020,
            'diasemana' => 'Terça-Feira',
            'horainicio' => '07:00:00',
            'horafim' => '07:50:00'
        ]);
        DB::table('horarios')->insert([
            'materia_id' => 2,
            'sala_id' => 5,
            'user_id' => 5,
            'exercicio' => 2020,
            'diasemana' => 'Terça-Feira',
            'horainicio' => '08:00:00',
            'horafim' => '08:50:00'
        ]);
        DB::table('horarios')->insert([
            'materia_id' => 5,
            'sala_id' => 5,
            'user_id' => 6,
            'exercicio' => 2020,
            'diasemana' => 'Terça-Feira',
            'horainicio' => '08:50:00',
            'horafim' => '09:40:00'
        ]);
        DB::table('horarios')->insert([
            'materia_id' => 5,
            'sala_id' => 5,
            'user_id' => 6,
            'exercicio' => 2020,
            'diasemana' => 'Terça-Feira',
            'horainicio' => '10:10:00',
            'horafim' => '11:00:00'
        ]);
        DB::table('horarios')->insert([
            'materia_id' => 3,
            'sala_id' => 5,
            'user_id' => 5,
            'exercicio' => 2020,
            'diasemana' => 'Quarta-Feira',
            'horainicio' => '07:00:00',
            'horafim' => '07:50:00'
        ]);
        DB::table('horarios')->insert([
            'materia_id' => 3,
            'sala_id' => 5,
            'user_id' => 5,
            'exercicio' => 2020,
            'diasemana' => 'Quarta-Feira',
            'horainicio' => '08:00:00',
            'horafim' => '08:50:00'
        ]);
        DB::table('horarios')->insert([
            'materia_id' => 6,
            'sala_id' => 5,
            'user_id' => 6,
            'exercicio' => 2020,
            'diasemana' => 'Quarta-Feira',
            'horainicio' => '08:50:00',
            'horafim' => '09:40:00'
        ]);
        DB::table('horarios')->insert([
            'materia_id' => 6,
            'sala_id' => 5,
            'user_id' => 6,
            'exercicio' => 2020,
            'diasemana' => 'Quarta-Feira',
            'horainicio' => '10:10:00',
            'horafim' => '11:00:00'
        ]);
    }
}
