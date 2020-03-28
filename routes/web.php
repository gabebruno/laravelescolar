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

    Route::get('aluno', 'UserController@dadosPessoais')->name('alunos.dados');
    Route::get('aluno/{id}/notas', 'NotaController@show')->name('alunos.notas');

    Route::get('professor', 'UserController@dadosPessoais')->name('professores.dados');
    Route::get('professor/{id}/horario', 'HorarioController@show')->name('professores.horario');

});

Route::middleware('auth')->namespace('Gestor')->group(function () {

    Route::get('gestor', 'GestorController@index')->name('gestores.dados');

    Route::get('/naoautorizado', function() {
        return view('auth.naoautorizado');
    })->name('professores.dados');

    Route::get('/naoautorizado', function() {
        return view('auth.naoautorizado');
    })->name('alunos.dados');

});



