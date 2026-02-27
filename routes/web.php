<?php

use App\Models\category;
use Illuminate\Support\Facades\Route;
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

Route::resource('collocations.depense',DepenseController::class)->shallow();
Route::resource('collocation',CollocationController::class);
Route::resource('collocations.categories',CategoryController::class)->shallow();
Route::resource('Role.users',CategoryController::class)->shallow();
Route::resource('Depense.users',CategoryController::class)->shallow();
Route::get('/dashboard',function(){
    return view('dashboard');
});



// // Main Dashboard (resources/views/dashboard.blade.php)
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

// // Colocation Views (resources/views/collocations/...)
// Route::get('/collocations/show', function () {
//     return view('collocations.show');
// })->name('collocations.show');

// Route::get('/collocations/edit', function () {
//     return view('collocations.edit');
// })->name('collocations.edit');

// // Category Views (resources/views/categories/...)
// Route::get('/categories', function () {
//     return view('categories.index');
// })->name('categories.index');

// // Invitation Views (resources/views/invitations/...)
// Route::get('/invitations/accept', function () {
//     return view('invitations.accept');
// })->name('invitations.accept');

// // Admin Views (resources/views/admin/...)
// Route::get('/admin/dashboard', function () {
//     return view('admin.dashboard');
// })->name('admin.dashboard');