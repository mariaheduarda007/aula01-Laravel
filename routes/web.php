<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DisciplinaController;

Route::get('/', [MainController::class, 'index']);
Route::get('/home', function () {
return view('home');
})->name('home');

Route::resource('/aluno', AlunoController::class);
Route::get('/report/aluno', [AlunoController::class, 'report'])
->name('report.aluno');

Route::resource('/curso', CursoController::class);
Route::resource('/disciplina', DisciplinaController::class);