<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [\App\Http\Controllers\Pages\IndexController::class, 'index']);

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/products', [\App\Http\Controllers\Pages\ProductsController::class, 'index']);

Route::get('/products/{id}', [\App\Http\Controllers\Pages\ProductsController::class, 'show']);

Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/gallery', function () {
    return view('pages.gallery');
});

Route::get('/cart', function () {
    return view('pages.cart');
});

Route::get('/checkout', function () {
    return view('pages.checkout');
});

Route::get('/wishlist', function () {
    return view('pages.wishlist');
})->middleware('auth');

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/register', function () {
    return view('pages.register');
})->middleware('guest')->name('register');

Route::post('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'store'])->middleware('guest');

Route::get('/login', function () {
    return view('pages.login');
})->middleware('guest')->name('login');

Route::post('/login', [\App\Http\Controllers\Auth\LoginController::class, 'store'])->middleware('guest');

Route::post('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'destroy'])->middleware('auth')->name('logout');
