<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);

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