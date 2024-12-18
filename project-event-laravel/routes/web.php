<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);
Route::post('/events',[EventController::class, 'store']); //

// create view (criação da viu da página de contato) contato.blade.php
Route::get('/contato', function () {
    return view('contato');
});