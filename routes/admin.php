<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductCotroller;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductTypeCotroller;
use App\Http\Controllers\Admin\ProductMangeCotroller;
use App\Http\Controllers\Admin\ShippingTypeCotroller;
use App\Http\Controllers\Admin\DelivoryOptionCotroller;


Route::get('admin-dashboard',[DashboardController::class,'index'])->name('admin.dashboard');

Route::resource('category',CategoryController::class);
Route::resource('delivory-option',DelivoryOptionCotroller::class);
Route::resource('shipping-type',ShippingTypeCotroller::class);
Route::resource('product-type',ProductTypeCotroller::class);
Route::resource('product',ProductCotroller::class);
Route::get('product-active',[ProductMangeCotroller::class,'suspended'])->name('product.suspended');
Route::get('product-suspended',[ProductMangeCotroller::class,'active'])->name('product.active');
Route::get('product/{id}/{slug}',[ProductMangeCotroller::class,'productcategory'])->name('productcategory');
Route::get('productsabc/{id}',[ProductMangeCotroller::class,'getRelatedProducts']);
Route::get('productsabc/{slug}',[ProductMangeCotroller::class,'product']);
Route::get('product-detail/{id}/{slug}',[ProductMangeCotroller::class,'productDetails'])->name('productDetails');
Route::post('add-cart',[ProductMangeCotroller::class,'addtocart'])->name('addtocart');
Route::post('order-destroy',[ProductMangeCotroller::class,'orderdestroy'])->name('orderdestroy');

// Route::get('/product-detail',function(){
//     return view('frontend.all-page.product_detail');
// });
