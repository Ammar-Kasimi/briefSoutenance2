<?php

use App\Models\category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostTagController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TagController;

Route::get('/', function () {
    return view('/posts/index');
});



Route::resource('users',UserController::class);
Route::resource('categories', CategoryController::class);




