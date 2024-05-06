<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
// frontend controllers
use App\Http\Controllers\{
    FrontController,
    AccountController
};


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::post('/user-login', [AccountController::class, 'user_login'])->name('user-login');
Route::post('/user-registration', [AccountController::class, 'user_registration'])->name('user-registration');

Route::get('/', [FrontController::class, 'index'])->name('welcome');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
Route::get('/shop', [FrontController::class, 'shop'])->name('shop');
Route::get('/product-details', [FrontController::class, 'product_details'])->name('product_details');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Front End Urls
    Route::get('/cart', [FrontController::class, 'cart'])->name('cart');
});

require __DIR__.'/auth.php';
