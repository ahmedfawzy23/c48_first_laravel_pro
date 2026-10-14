<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// get users
// get user /id
// create

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create']);
Route::get('/users/{id}', [UserController::class, 'show'])->where('id', '[0-9]+');
Route::post('/hamada', [UserController::class, 'store'])->name('users.store');
