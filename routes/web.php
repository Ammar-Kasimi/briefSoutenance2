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

Route::resource('collocation.depense',DepenseController::class)->shallow();
Route::resource('collocation',CollocationController::class);
Route::resource('collocation.categories',CategoryController::class)->shallow();
Route::resource('Role.users',CategoryController::class)->shallow();
Route::resource('Depense.payments',CategoryController::class)->shallow();




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// 1. Redirect Home to Dashboard (for convenience)
Route::get('/', function () {
    return redirect('/dashboard');
});

// 2. The Main Dashboard (Create or Join)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// 3. Admin Dashboard (Stats & Ban)
Route::get('/admin', function () {
    return view('admin.dashboard');
});

// 4. Colocations Group
Route::prefix('colocations')->group(function () {
    
    // Form to create a new coloc
    Route::get('/create', function () {
        return view('colocations.create');
    });

    // The "My Coloc" Dashboard
    // In a real app, this would be '/{id}', but for UI testing we use '/show'
    Route::get('/show', function () {
        return view('colocations.show');
    });
});

// 5. Expenses Group
Route::prefix('depenses')->group(function () {

    // List of Expenses
    Route::get('/', function () {
        // We create fake data here so the view doesn't crash if you added the loop
        $depenses = [
            (object) [
                'date' => '2026-02-24', 
                'title' => 'Courses Carrefour', 
                'user' => (object)['name' => 'Alice'], 
                'amount' => 450.00
            ],
            (object) [
                'date' => '2026-02-23', 
                'title' => 'Facture Internet', 
                'user' => (object)['name' => 'Bob'], 
                'amount' => 300.00
            ],
            (object) [
                'date' => '2026-02-20', 
                'title' => 'Pizzas', 
                'user' => (object)['name' => 'Moi'], 
                'amount' => 120.00
            ],
        ];

        return view('depenses.index', compact('depenses'));
    });

    // Form to add an expense
    Route::get('/create', function () {
        return view('depenses.create');
    });
});




