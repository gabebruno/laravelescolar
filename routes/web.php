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

    Route::get('user', 'UserController@index')->name('user.dados');
    Route::get('aluno/{id}/notas/{ano?}', 'NotaController@index')->name('alunos.notas');
    Route::get('aluno/{id}/horario', 'HorarioController@index')->name('alunos.horario');

    Route::get('professor/{id}/horario', 'HorarioController@index')->name('professor.horario');

});

//Route::middleware('auth')->namespace('Aluno')->group(function () {

//    Route::get('user', 'AlunoController@dadosAluno')->name('user.dados');

//});

//Route::middleware('auth')->namespace('Professor')->group(function () {

//    Route::get('user', 'UserController@index')->name('user.dados');

//});

//Route::middleware('auth')->namespace('Gestor')->group(function () {

//    Route::get('user', 'UserController@index')->name('user.dados');

//});

