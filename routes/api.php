<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::POST('/asdasd', [PostController::class, 'store']);
Route::get('/show', [PostController::class, 'showda']);


