<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', function() {
    return view('index');

})->name('home')->middleware('auth');

Route::middleware('auth')->group(function () {

    Route::get('usershow', 'AlunoController@usershow')->name('alunos.usershow');
    Route::get('index', 'AlunoController@index')->name('alunos.index');

});

