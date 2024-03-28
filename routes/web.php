<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\frontend\ProductsController as ProductsControllers;
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

Route::get('/', function () {
    return redirect('/user/index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::patch('/products/{product}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

// users
Route::get('/users', [UsersController::class, 'index'])->name('users.index');

Route::delete('/users/{product}', [UsersController::class, 'destroy'])->name('users.destroy');


Route::get('/user/index',  [ProductsControllers::class, 'showCartTable'])->name('user.ui');


 
Route::get('cart', [ProductsControllers::class, 'showCartTable'])->name('cart');
Route::get('add-to-cart/{id}', [ProductsControllers::class, 'addToCart']);

Route::delete('remove-from-cart', [ProductsControllers::class, 'removeCartItem']);
Route::get('clear-cart', [ProductsControllers::class, 'clearCart']);

