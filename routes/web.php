<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;


// --- HOME
Route::get('/', [MainController::class, 'home'])
    ->name('home');

    