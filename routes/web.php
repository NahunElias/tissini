<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Livewire\ShowProducts;

Route::middleware(['auth:sanctum', 'verified'])->get('/', [ProductController::class, 'index'])->name('products.index');

Route::middleware(['auth:sanctum', 'verified'])->get('products/{product}', [ProductController::class, 'show'])->name('products.show');

Route::middleware(['auth:sanctum', 'verified'])->get('category/{category}', [ProductController::class, 'category'])->name('products.category');

Route::middleware(['auth:sanctum', 'verified'])->get('/categories', [CategoryController::class, 'index'])->name('categories.index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard',ShowProducts::class)->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/catalogo',ShowProducts::class)->name('products.catalogo');
