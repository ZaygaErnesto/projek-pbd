<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('categories.index');
});

Route::resource('admins', App\Http\Controllers\AdminController::class);

Route::resource('categories', App\Http\Controllers\CategoryController::class);

Route::resource('items', App\Http\Controllers\ItemController::class);
Route::get('lowstock', [App\Http\Controllers\ItemController::class, 'lowStock'])->name('items.lowstock');

Route::resource('item-details', App\Http\Controllers\ItemDetailController::class);
Route::resource('item-tags', App\Http\Controllers\ItemTagController::class);
Route::resource('item-tag-pivot', App\Http\Controllers\ItemTagPivotController::class);
Route::resource('stock-in', App\Http\Controllers\StockInController::class);
Route::resource('stock-out', App\Http\Controllers\StockOutController::class);
Route::resource('stock-log', App\Http\Controllers\StockLogController::class);
Route::resource('suppliers', App\Http\Controllers\SupplierController::class);
Route::resource('users', App\Http\Controllers\UserController::class);
