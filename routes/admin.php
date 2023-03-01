<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductCotroller;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductTypeCotroller;
use App\Http\Controllers\Admin\ShippingTypeCotroller;
use App\Http\Controllers\Admin\DelivoryOptionCotroller;


Route::get('admin-dashboard',[DashboardController::class,'index'])->name('admin.dashboard');

Route::resource('category',CategoryController::class);
Route::resource('delivory-option',DelivoryOptionCotroller::class);
Route::resource('shipping-type',ShippingTypeCotroller::class);
Route::resource('product-type',ProductTypeCotroller::class);
Route::resource('product',ProductCotroller::class);
    