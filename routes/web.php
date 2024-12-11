<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// ルート定義の整理
Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::get('/show/{id}', [PostController::class, 'show'])->name('posts.show');


//これをしないと管理画面が見えなくなる。authに分けたりはしないでいいらしい。
//これまだ必要？atode
Livewire::setUpdateRoute(function ($handle) {
    return Route::post('/livewire/update', $handle);
});
