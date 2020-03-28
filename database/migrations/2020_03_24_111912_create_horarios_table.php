<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('materia_id')->unsigned();
            $table->integer('sala_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->year('exercicio');
            $table->string('diasemana');
            $table->time('horainicio');
            $table->time('horafim');

            $table->foreign('materia_id')->references('id')->on('materias');
            $table->foreign('sala_id')->references('id')->on('salas');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horario');
    }
}
