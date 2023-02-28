<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get('admin-dashboard',[DashboardController::class,'index'])->name('admin.dashboard');

Route::resource('category',CategoryController::class);
