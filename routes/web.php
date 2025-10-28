<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AlunoController;

Route::get('/', [MainController::class, 'index']);
Route::resource('/aluno', AlunoController::class);