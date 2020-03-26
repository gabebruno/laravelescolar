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
            'materia_id' => 8,
            'sala_id' => 24,
            'exercicio' => 2019,
            'horainicio' => '07:10:00',
            'horafim' => '08:00:00'
        ]);
        DB::table('horarios')->insert([
            'materia_id' => 8,
            'sala_id' => 24,
            'exercicio' => 2019,
            'horainicio' => '08:00:00',
            'horafim' => '08:50:00'
        ]);
        DB::table('horarios')->insert([
            'materia_id' => 9,
            'sala_id' => 24,
            'exercicio' => 2019,
            'horainicio' => '08:50:00',
            'horafim' => '09:40:00'
        ]);
        DB::table('horarios')->insert([
            'materia_id' => 10,
            'sala_id' => 24,
            'exercicio' => 2019,
            'horainicio' => '10:10:00',
            'horafim' => '11:00:00'
        ]);
        DB::table('horarios')->insert([
            'materia_id' => 11,
            'sala_id' => 25,
            'exercicio' => 2019,
            'horainicio' => '07:00:00',
            'horafim' => '07:50:00'
        ]);
        DB::table('horarios')->insert([
            'materia_id' => 12,
            'sala_id' => 25,
            'exercicio' => 2019,
            'horainicio' => '08:00:00',
            'horafim' => '08:50:00'
        ]);
        DB::table('horarios')->insert([
            'materia_id' => 10,
            'sala_id' => 25,
            'exercicio' => 2019,
            'horainicio' => '08:50:00',
            'horafim' => '09:40:00'
        ]);
        DB::table('horarios')->insert([
            'materia_id' => 10,
            'sala_id' => 25,
            'exercicio' => 2019,
            'horainicio' => '10:10:00',
            'horafim' => '11:00:00'
        ]);
        DB::table('horarios')->insert([
            'materia_id' => 7,
            'sala_id' => 26,
            'exercicio' => 2020,
            'horainicio' => '07:00:00',
            'horafim' => '07:50:00'
        ]);
        DB::table('horarios')->insert([
            'materia_id' => 8,
            'sala_id' => 26,
            'exercicio' => 2020,
            'horainicio' => '08:00:00',
            'horafim' => '08:50:00'
        ]);
        DB::table('horarios')->insert([
            'materia_id' => 9,
            'sala_id' => 26,
            'exercicio' => 2020,
            'horainicio' => '08:50:00',
            'horafim' => '09:40:00'
        ]);
        DB::table('horarios')->insert([
            'materia_id' => 9,
            'sala_id' => 26,
            'exercicio' => 2020,
            'horainicio' => '10:10:00',
            'horafim' => '11:00:00'
        ]);
    }
}
