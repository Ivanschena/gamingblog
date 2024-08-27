<?php

use App\Http\Controllers\ConsoleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PublicController;
//rotte get
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/dashboard', [PublicController::class, 'dashboard'])->name('dashboard');


Route::get('/game/create',[GameController::class, 'create'])->name('game.create');
/* 
Route::get('/game/create',[GameController::class, 'create'])->middleware('auth')->name('game.create'); */

route::get('/index/game', [GameController::class, 'index'])->name('game.index');
//rotte post
Route::post('/game/store',[GameController::class, 'store'])->name('game.store');

Route::get('/console/index',[ConsoleController::class, 'index'])->name('console.index');
Route::get('console/create',[ConsoleController::class, 'create'])->name('console.create');
Route::post('/console/store',[ConsoleController::class, 'store'])->name('console.store');
Route::get('/console/show/{console}',[ConsoleController::class,'show'])->name('console.show');


Route::get('/console/edit/{console}',[ConsoleController::class,'edit'])->name('console.edit');
Route::put('/console/update/{console}',[ConsoleController::class,'update'])->name('console.update');

Route::delete('/console/destroy/{console}',[ConsoleController::class,'destroy'])->name('console.destroy');
