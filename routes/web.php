<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

Route::resource('/blog', PostsController::class);

// Route for invoke method
Route::get('/', HomeController::class);