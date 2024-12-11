<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// ルート定義の整理
Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::get('/show/{id}', [PostController::class, 'show'])->name('posts.show');
