<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SalesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/purchases', [PurchaseController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('purchases.index');

Route::get('/purchases/create', [PurchaseController::class, 'create'])
    ->middleware(['auth', 'verified'])->name('purchases.create');

Route::post('/purchases/save', [PurchaseController::class, 'save'])
    ->middleware(['auth', 'verified'])->name('purchases.save');

Route::get('/sales', [SalesController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('sales.index');

Route::get('/sales/create', [SalesController::class, 'create'])
    ->middleware(['auth', 'verified'])->name('sales.create');

Route::post('/sales/save', [SalesController::class, 'save'])
    ->middleware(['auth', 'verified'])->name('sales.save');

require __DIR__.'/auth.php';
