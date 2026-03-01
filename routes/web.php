<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Models\category;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CollocationController;
use App\Http\Controllers\DepenseController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostTagController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TagController;

Route::get('/', function () {
    return view('/posts/index');
});

// Route::resource('users',UserController::class);
// Route::resource('categories', CategoryController::class);
Route::middleware('auth')->group(function(){
Route::resource('collocations.depenses',DepenseController::class)->shallow();
Route::resource('collocation',CollocationController::class);
Route::resource('collocations.categories',CategoryController::class)->shallow();
Route::resource('Role.users',CategoryController::class)->shallow();
Route::resource('Depense.users',CategoryController::class)->shallow();
});
Route::get('/home',function(){
    return view('home');
})->middleware('auth');

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
