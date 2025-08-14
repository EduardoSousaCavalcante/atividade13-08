<?php

use Illuminate\Support\Facades\Route;
use App\Models\Aluno;

Route::get('/', function () {
    $alunos = Aluno::all(); // pega todos os alunos do banco
    return view('welcome', compact('alunos')); // envia para a view
});
