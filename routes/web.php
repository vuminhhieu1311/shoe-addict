<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::middleware('localization')->group(function () {
    Route::get('/', [ProductController::class, 'getPublishedProducts'])->name('home');
    Route::prefix('products')->group(function () {
        Route::get('/{product}/show', [ProductController::class, 'show'])->name('products.detail');
    });
});

Route::middleware(['auth', 'localization'])->group(function () {
    Route::get('/update-language/{lang}', [
        UserController::class,
        'updateLanguage',
    ])->name('update-language');

    Route::get('/dashboard', function() {
        return view('dashboard');
    })->name('dashboard');

    Route::prefix('products')->group(function () {
        Route::get('/{product}/images', [ProductController::class, 'showProductImages']);
        Route::delete('/{product}/images/{imageId}', [ProductController::class, 'deleteProductImage']);
        Route::post('/{product}/images', [ProductController::class, 'storeProductImage']);
    });

    Route::prefix('cart')->group(function () {
        Route::get('/', [CartController::class, 'show'])->name('cart.show');
        Route::post('/save/product/{product}', [CartController::class, 'save'])->name('cart.save');
        Route::put('/update/{id}', [CartController::class, 'update'])->name('cart.update');
        Route::get('/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
    });

    Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');

    Route::resources([
        'categories' => CategoryController::class,
        'products' => ProductController::class,
        'roles' => RoleController::class,
        'permissions' => PermissionController::class,
        'users' => UserController::class,
        'orders' => OrderController::class,
    ]);
});

Route::get('test', function() {
    \Illuminate\Support\Facades\Storage::delete('public/images/euRPxQ1l1W2RRVq8aEFonApOyRt490lPK6D5OUwF.jpg');
});
