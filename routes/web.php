<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::resource('/', PostController::class)->names([
//    ふつうにgetで良いらしい
    'index' => 'posts.index',
]);

Route::get('/show/{id}', [PostController::class, 'show'])->name('posts.show');

//これをしないと管理画面が見えなくなる。authに分けたりはしないでいいらしい。
//これまだ必要？atode
Livewire::setUpdateRoute(function ($handle) {
    return Route::post('/livewire/update', $handle);
});
