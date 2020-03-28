<?php

use Illuminate\Database\Seeder;

class SalaUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('sala_users')->insert([
            'user_id' => 2,
            'sala_id' => 4,
            'exercicio' => 2020
        ]);
        DB::table('sala_users')->insert([
            'user_id' => 3,
            'sala_id' => 5,
            'exercicio' => 2020
        ]);
        DB::table('sala_users')->insert([
            'user_id' => 4,
            'sala_id' => 6,
            'exercicio' => 2020
        ]);
    }
}
