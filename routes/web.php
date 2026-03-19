<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\MercenaireController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Architecture\Services\ServiceContainer;

Route::get('/', function () {
    return view('welcome');
});
//  Route::get('/mercenaires/create', [MercenaireController::class,'index'])->name('index');

Route::resource('mercenaires', MercenaireController::class);

Route::resource('clients', ClientController::class);

Route::resource('commandes', CommandeController::class);

Route::resource('clients', ServiceController::class);

//  Route::post('/mercenaires.create');