<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/users/fetch', [UserController::class, 'fetchUsers'])->name('users.fetch');
Route::get('/', [UserController::class, 'index'])->name('users.index');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
