<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('alunoserie_id')->unsigned();
            $table->integer('materia_id')->unsigned();
            $table->float('nota1bi');
            $table->float('nota2bi');
            $table->float('nota3bi');
            $table->float('nota4bi');

            $table->foreign('alunoserie_id')->references('id')->on('alunos_series');
            $table->foreign('materia_id')->references('id')->on('materias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notas');
    }
}
