<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PublicController;
//rotte get
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/game/create',[GameController::class, 'create'])->name('game.create');
route::get('/index/game', [GameController::class, 'index'])->name('game.index');
//rotte post
Route::post('/game/store',[GameController::class, 'store'])->name('game.store');
