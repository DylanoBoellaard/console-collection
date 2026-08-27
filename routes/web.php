<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ConsoleController;
use Illuminate\Support\Facades\Route;

// Home page
Route::get('/', [HomeController::class, 'index'])
    ->name('home');

// Consoles index page
Route::get('/consoles', [ConsoleController::class, 'index'])
    ->name('consoles.index');

// Console specific information page
Route::get('/consoles/{console}', [ConsoleController::class, 'show'])
    ->name('consoles.show');

// Controllers index page
Route::get('/controllers', [ConsoleController::class, 'index'])
    ->name('controllers.index');

// Controller specific information page
Route::get('/controllers/{controller}', [ConsoleController::class, 'show'])
    ->name('controllers.show');

// Accessories index page
Route::get('/accessories', [ConsoleController::class, 'index'])
    ->name('accessories.index');

// Accessory specific information page
Route::get('/accessories/{accessory}', [ConsoleController::class, 'show'])
    ->name('accessories.show');

// Games index page
Route::get('/games', [ConsoleController::class, 'index'])
    ->name('games.index');

// Game specific information page
Route::get('/games/{game}', [ConsoleController::class, 'show'])
    ->name('games.show');

// User collection page
Route::get('/collection', [ConsoleController::class, 'index'])
    ->name('collection.index');

// User wishlist page
Route::get('/wishlist', [ConsoleController::class, 'index'])
    ->name('wishlist.index');
