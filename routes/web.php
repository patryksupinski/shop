<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

// Trasa do widoku listy produktów
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

// Trasa do formularza dodawania nowego produktu
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

// Trasa do obsługi dodawania nowego produktu
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

// Trasa do formularza edycji produktu
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');

// Trasa do obsługi edycji produktu
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');

// Trasa do obsługi usuwania produktu
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

// Trasa do wyświetlania szczegółów produktu
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');

// Trasa do widoku listy zamówień
Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');

// Trasa do widoku listy klientów
Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
