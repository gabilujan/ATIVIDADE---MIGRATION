<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/quemsomos', function () {
    return view('quemsomos');
});

Route::get('/contato', [ContatoController::class, 'index']);
Route::post('/contato', [ContatoController::class, 'store']);
