<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CharterManagementController;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/myProfile',[App\Http\Controllers\HomeController::class, 'myProfile'])->name('my-profile');
Route::post('api/fetch-states', [UserController::class, 'fetchState']);
Route::post('api/fetch-cities', [UserController::class, 'fetchCity']);

Route::controller(UserController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/product-detail/{id}', 'productDetail')->name('product-detail');
    Route::get('/goldEvine', 'goldEvine')->name('goldEvine');
    Route::get('/goldMetal', 'goldEvine')->name('goldMetal');
    Route::get('/chats', 'chats')->name('chats');
    Route::post('/product_upload', 'productUpload')->name('product_upload');
    Route::get('/merchant-suits', 'merchantSuits')->name('merchant-suits');
    Route::get('/suite-management', 'merchantSuitManagement')->name('suite-management');
    Route::get('/payment-management', 'merchantPaymentManagement')->name('payment-management');
    Route::get('/myProfile', 'myProfile')->name('my-profile');
    Route::post('/save_profile_detail', 'save_profile_detail')->name('save_profile_detail');
    // Route::get('/sign_in', 'login')->name('sign_in');
    // Route::get('/create_account', 'createAccount')->name('create_account');

    Route::get('/charter-detail', 'charterDetail')->name('charter-detail');
    // Route::get('/register', 'register')->name('register');
    Route::get('/contactUs', 'contactUs')->name('contactUs');
    Route::get('/aboutUs', 'aboutUs')->name('aboutUs');
    Route::get('/faqs', 'faqs')->name('faqs');
});

Route::controller(MerchantController::class)->group(function () {
    Route::get('/merchant_account1', 'merchantAccountFirstStep')->name('merchant_account_first_step');
    Route::post('/merchant_account2', 'merchantAccountSecondStep')->name('merchant_account_second_step');
    Route::post('/save_merchant_account', 'saveMerchantAccount')->name('save_merchant_account');
});
Route::controller(CharterManagementController::class)->group(function () {
    Route::post('/charter_manage', 'store')->name('charter_manage');
    Route::get('/all_charters', 'index')->name('charters');
    Route::get('/charter_detail', 'charter_detail')->name('charter_detail');
    Route::post('/charter_book', 'charter_book')->name('charter_book');
    Route::get('/product_charter_management', 'productCharterManagement')->name('product_charter_management');
});
Route::get('test', function () {
    return view('frontend.all-page.test');
});
Route::post('/product',[ProductController::class,'store'])->name('product.store');

Route::controller(PageController::class)->group(function () {
    // Policies
    Route::get('/seller-policy', 'sellerpolicy')->name('sellerpolicy');
    Route::get('/return-policy', 'returnpolicy')->name('returnpolicy');
    Route::get('/support-policy', 'supportpolicy')->name('supportpolicy');
    Route::get('/terms', 'terms')->name('terms');
    Route::get('/privacy-policy', 'privacypolicy')->name('privacypolicy');
});




