<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;


Route::view('/', 'welcome');

// withTrashed allows you to include soft-deleted records in the resource controller (model binding)
Route::middleware('auth')->group(function () {
    Route::middleware([AdminMiddleware::class])->group(function () {
        Route::get('/todo/create', [TodoController::class, 'create']);
        Route::post('/todo', [TodoController::class, 'store']);
    });

    Route::resource('/todo', TodoController::class)->except(['create', 'store']);
    Route::resource('/user', UserController::class);
});


Route::get('/register', [AuthController::class, 'showRegisterForm']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
