<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Route::post('api/fetch-states', [LuxaroController::class, 'fetchState']);
Route::post('api/fetch-cities', [LuxaroController::class, 'fetchCity']);
Route::controller(LuxaroController::class)->group(function () {
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


Route::get('/', function () {
    return view('frontend.all-page.test');
});
