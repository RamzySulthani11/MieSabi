<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
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
    return view('welcome');
});
// Route::get('/menu', function () {
//     return view('menu');
// });
Route::get('/menu', [ProductController::class, 'show'])->name('user.menu');
Route::get('/produk', [ProductController::class, 'produk'])->name('admin.produk');
Route::delete('/produk/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

Route::get('/keranjang', [CartController::class, 'index'])->name('keranjang.index');
Route::post('/keranjang/add', [CartController::class, 'add'])->name('keranjang.add');
Route::post('/keranjang/update/{code_product}', [CartController::class, 'update'])->name('keranjang.update');
Route::get('/keranjang/remove/{code_product}', [CartController::class, 'remove'])->name('keranjang.remove');
Route::post('/keranjang/update-variant/{code_product}', [CartController::class, 'updateVariant'])
    ->name('keranjang.updateVariant');


// Route::get('/keranjang', function () {
//     return view('keranjang');
// });
// Route::get('/rincian', [OrderController::class, 'create'])->name('order.create');
// Route::post('/rincian/store', [OrderController::class, 'store'])->name('order.store');

Route::middleware(['auth'])->group(function () {
    Route::get('/rincian-harga', [OrderController::class, 'create'])->name('order.create');
    Route::post('/rincian-harga', [OrderController::class, 'store'])->name('order.store');
    Route::get('/orders/{id}', [OrderController::class, 'show'])->name('order.show');
});

Route::get('/orders/history', [OrderController::class, 'history'])->name('admin.riwayat-pesanan');

Route::get('/pesanan', function () {
    return view('pesanan');
});

Route::get('/beranda', function () {
    return view('beranda');
})->middleware(['auth', 'verified'])->name('beranda');

Route::get('/admin-dashboard', function () {
    return view('auth.admin-dashboard');
})->middleware(['auth', 'verified'])->name('admin-dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

require __DIR__.'/auth.php';
