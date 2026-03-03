<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Models\category;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CollocationController;
use App\Http\Controllers\DepenseController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostTagController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Auth;

// Route::get('/', function () {
//     return view('/posts/index');
// });

// Route::resource('users',UserController::class);
// Route::resource('categories', CategoryController::class);
Route::middleware('auth')->group(function () {
    Route::resource('collocations.depenses', DepenseController::class)->shallow()->only('store');
    Route::resource('collocation', CollocationController::class);
    Route::resource('collocations.categories', CategoryController::class)->shallow();
    Route::resource('users', UserController::class);
    // Route::resource('Depense.users',r::class)->shallow();
    Route::resource('payments', PaymentController::class);
});

Route::delete('/members/{user}', [CollocationController::class, 'kickMember'])->name('collocations.kickMember');
Route::delete('/member/{user}', [CollocationController::class, 'leaveCollocation'])->name('collocation.leaveCollocation');

// Route::get('/home',function(){
//     return view('home');
// })->middleware('auth');

// Route::get('/', function () {
//     return view('home');
// })->middleware('auth');
Route::get('/admin/dashboard', [AdminController::class,'index']
)->middleware('auth')->name('admin.dashboard');
Route::post('/admin/toggle/{user}', [AdminController::class,'toggleUser']
)->middleware('auth')->name('admin.toggleUser');
// Route::get('/admin/dashboard', function () {
//     return view('admin.dashboard');
// })->middleware('auth');

Route::get('/dashboard', function () {
    if(Auth::user()->role->name=='admin'){
        return redirect()->route('admin.dashboard');
    }else{
        return view('dashboard');
}})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/', function () {
    return redirect()->route('dashboard');
})->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
