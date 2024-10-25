<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $nome = 'Edimar';
    $idade = 30;
    $profissao = 'N1';

    $arr = [10,20,30,40,50];

    $nomes = ['Edimar', 'João', 'Maria', 'José'];
    
    return view('welcome', 
    [       
        'nome' => $nome, 
        'idade' => $idade,
        'profissao' => $profissao,
        'arr' => $arr,
        'nomes' => $nomes
    ]);
});

// create view (criação da viu da página de contato) contato.blade.php
Route::get('/contato', function () {
    return view('contato');
});

// create view (criação da viu da página de produto) produto.blade.php
Route::get('/produto', function () {
    return view('produto');
});

Route::get('/produto_teste/{id?}', function ($id = null) {
    return view('produtos', ['id' => $id]);
});