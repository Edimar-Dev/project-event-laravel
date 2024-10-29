<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);

// create view (criação da viu da página de contato) contato.blade.php
Route::get('/contato', function () {
    return view('contato');
});

// create view (criação da viu da página de produto) produto.blade.php
Route::get('/produto', function () {
    
    $busca = request('search');
    
    return view('produto', ['busca' => $busca]);
});

// create view (criação da viu da página de produto) produtos.blade.php
Route::get('/produtos_teste/{id?}', function ($id = null) {
    return view('produtos', ['id' => $id]);
});