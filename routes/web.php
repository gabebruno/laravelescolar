<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', function() {
    $user = Auth::user();
    return view('index', ['user' => $user]);
})->name('home')->middleware('auth');

Route::middleware('auth')->group(function () {

    Route::get('aluno', 'UserController@index')->name('user.index');
    Route::get('aluno/{id}/notas', 'NotaController@show')->name('alunos.notas');

    Route::get('professor', 'UserController@index')->name('user.index');
    Route::get('professor/{id}/horario', 'HorarioController@show')->name('professores.horario');

    Route::get('gestor', 'UserController@index')->name('user.index');
});

Route::middleware('auth')->namespace('Gestor')->group(function(){

    //Rotas para Salas
    Route::get('salas', 'GestorController@indexSala')->name('gestores.salas');
    Route::get('sala/{id}/editar', 'GestorController@editSala')->name('sala.edit');
    Route::post('sala/{id}', 'GestorController@updateSala')->name('sala.update');
    Route::get('sala/criar', 'GestorController@createSala')->name('sala.create');
    Route::post('sala', 'GestorController@storeSala')->name('sala.store');
    Route::delete('sala/{id}', 'GestorController@destroySala')->name('sala.destroy');

    //Rotas para Alunos
    Route::get('alunos', 'GestorController@indexAlunos')->name('gestores.alunos');
    Route::get('aluno/criar', 'GestorController@createAluno')->name('aluno.create');
    Route::get('aluno/{id}/editar', 'GestorController@editAluno')->name('aluno.edit');
    Route::post('aluno', 'GestorController@storeAluno')->name('aluno.store');
    Route::post('aluno/{id}', 'GestorController@updateAluno')->name('aluno.update');
    Route::delete('aluno/{id}', 'GestorController@destroyAluno')->name('aluno.destroy');

    //Rotas para Professores
    Route::get('professores', 'GestorController@indexProfessores')->name('gestores.professores');
    Route::get('professor/criar', 'GestorController@createProfessor')->name('professor.create');
    Route::get('professor/{id}/editar', 'GestorController@editProfessor')->name('professor.edit');
    Route::post('professor', 'GestorController@storeProfessor')->name('professor.store');
    Route::post('professor/{id}', 'GestorController@updateProfessor')->name('professor.update');
    Route::delete('professor/{id}', 'GestorController@destroyProfessor')->name('professor.destroy');

    //Rotas para Materias
    Route::get('materias', 'GestorController@indexMateria')->name('gestores.materias');
    Route::get('materia/criar', 'GestorController@createMateria')->name('materia.create');
    Route::get('materia/{id}/editar', 'GestorController@editMateria')->name('materia.edit');
    Route::post('materia', 'GestorController@storeMateria')->name('materia.store');
    Route::post('materia/{id}', 'GestorController@updateMateria')->name('materia.update');
    Route::delete('materia/{id}', 'GestorController@destroyMateria')->name('materia.destroy');

});




