<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'welcome');

Route::resource('/todo', TodoController::class);
