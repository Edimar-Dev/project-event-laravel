<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $nome = 'Edimar';
    $idade = 30;
    $profissao = 'N1';
    
    return view('welcome', ['nome' => $nome, 'idade' => $idade, 'profissao' => $profissao]);
});

// create view (criação da viu da página de contato) contato.blade.php
Route::get('/contato', function () {
    return view('contato');
});

// create view (criação da viu da página de produto) produto.blade.php
Route::get('/produto', function () {
    return view('produto');
});