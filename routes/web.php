<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\QueryException;

Route::get('/', [UsersController::class, 'index']);
Route::resource('users',UsersController::class);
Route::resource('products',ProductController::class);

Route::fallback(function () {
    return view('users.nopage');
});
Route::get('users/{user}/invoice', [UsersController::class, 'invoice'])->name('users.invoice');
