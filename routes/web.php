<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::resource('/', PostController::class)->names([
    'index' => 'posts.index',
    'create' => 'posts.create',
    'store' => 'posts.store',
]);

Route::get('/show/{id}', [PostController::class, 'show'])->name('posts.show');


Livewire::setUpdateRoute(function ($handle) {
    return Route::post('/livewire/update', $handle);
});
