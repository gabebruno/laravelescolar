<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TipoUsuariosTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(SalasTableSeeder::class);
        $this->call(MateriasTableSeeder::class);
        $this->call(HorariosTableSeeder::class);
        $this->call(SalaUsersTableSeeder::class);
        $this->call(NotasTableSeeder::class);
    }
}
