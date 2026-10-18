
<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

// HOME PAGE
Route::get('/', function () {
    return view('welcome');
})->name('home');

// PUBLIC PRODUCTS PAGE
Route::get('/products', function () {
    $products = Product::latest()->get();

    return view('products.index', compact('products'));
})->name('products.index');

// DASHBOARD
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

// ROUTES THAT REQUIRE LOGIN
Route::middleware('auth')->group(function () {

    // PROFILE
    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

    // MANAGE PRODUCTS
    Route::get('/manage-products', [ProductController::class, 'index'])
        ->name('products.manage');

    // ADD PRODUCT PAGE
    Route::get('/manage-products/create', [ProductController::class, 'create'])
        ->name('products.create');

    // SAVE NEW PRODUCT
    Route::post('/manage-products', [ProductController::class, 'store'])
        ->name('products.store');

    // EDIT PRODUCT PAGE
    Route::get('/manage-products/{product}/edit', [ProductController::class, 'edit'])
        ->name('products.edit');

    // UPDATE PRODUCT
    Route::put('/manage-products/{product}', [ProductController::class, 'update'])
        ->name('products.update');

    // DELETE PRODUCT
    Route::delete('/manage-products/{product}', [ProductController::class, 'destroy'])
        ->name('products.destroy');
});

// LOGIN, REGISTER, LOGOUT, AND OTHER AUTH ROUTES
require __DIR__.'/auth.php';
