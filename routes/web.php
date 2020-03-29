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

    Route::get('gestor', 'GestorController@index')->name('gestores.index');

    Route::get('sala/{id}/editar', 'GestorController@editarSala')->name('sala.edit');
    Route::post('sala/{id}', 'GestorController@updateSala')->name('sala.update');
    Route::get('sala/criar', 'GestorController@criarSala')->name('sala.create');
    Route::post('sala', 'GestorController@novaSala')->name('sala.store');
    Route::delete('sala/{id}', 'GestorController@excluirSala')->name('sala.destroy');

    Route::get('usuario/{id}/editar', 'GestorController@editarUsuario')->name('user.edit');
    Route::post('usuario/{id}', 'GestorController@updateUsuario')->name('user.update');
    Route::get('usuario/criar', 'GestorController@criarUsuario')->name('user.create');
    Route::post('usuario', 'GestorController@novoUsuario')->name('user.store');
    Route::delete('usuario/{id}', 'GestorController@excluirUsuario')->name('user.destroy');

    Route::get('aluno', function() {
        return view('auth.naoautorizado');
    })->name('alunos.dados');

    Route::get('professor', function() {
        return view('auth.naoautorizado');
    })->name('professores.dados');

});



