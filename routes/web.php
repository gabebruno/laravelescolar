<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', function() {
    //$tasks = Task::paginate(10);
    return view('tasks/index', ['tasks' => $tasks]);
})->name('home')->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::resource('tasks', 'TaskController');
    Route::get('agendadas', 'TaskController@agendadas')->name('tasks.agendadas');
    Route::get('vencidas', 'TaskController@vencidas')->name('tasks.vencidas');
    Route::get('emConstrucao', 'TaskController@emConstrucao')->name('emConstrucao');
});
