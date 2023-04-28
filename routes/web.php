<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CharterManagementController;
use App\Http\Controllers\MerchantController;
use App\Http\Controllers\vendor\Chatify\MessagesController;
use App\Http\Controllers\Vendor\VendorControlController;
use App\Http\Livewire\Product;

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


Route::get('storage-link', function () {
    Artisan::call('storage:link');
    Artisan::call('config:cache');
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    return 'Storage link successfully created';
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/my-Profile', [App\Http\Controllers\HomeController::class, 'myProfile'])->name('my-profile');
Route::get('/my-account', [App\Http\Controllers\HomeController::class, 'myaccount'])->name('my-account');
Route::post('api/fetch-states', [UserController::class, 'fetchState']);
Route::post('api/fetch-cities', [UserController::class, 'fetchCity']);

Route::post('/search-product',[ProductController::class,'productsearch'])->name('productsearch');
Route::get('/forums', [App\Http\Controllers\HomeController::class, 'forums'])->name('forums');
Route::controller(UserController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    // Route::get('/luxauro', 'index')->name('home');
    Route::get('/appendProducts', 'appendProducts')->name('appendProducts');
    Route::get('/appendLocalLuxauro', 'appendLocalLuxauro')->name('appendLocalLuxauro');
    Route::get('/appendCategories', 'appendCategories')->name('appendCategories');
    Route::get('/product-detail/{id}', 'productDetail')->name('product-detail');
    Route::get('/goldEvines', 'goldEvine')->name('goldEvine');
    Route::get('/goldMetal', 'goldEvine')->name('goldMetal');
    Route::get('/chats', 'chats')->name('chats');
    Route::post('/product_upload', 'productUpload')->name('product_upload');
    Route::get('/merchant-suits', 'merchantSuits')->name('merchant-suits');
    Route::get('/suite-management', 'merchantSuitManagement')->name('suite-management');
    Route::get('/payment-management', 'merchantPaymentManagement')->name('payment-management');
    Route::get('/my-profile', 'myProfile')->name('myprofile');
    Route::get('/my-account', 'myaccount')->name('myaccount');
    Route::post('/save_profile_detail', 'save_profile_detail')->name('save_profile_detail');
    // Route::get('/sign_in', 'login')->name('sign_in');
    // Route::get('/create_account', 'createAccount')->name('create_account');

    Route::get('/charter-detail', 'charterDetail')->name('charter-detail');
    // Route::get('/register', 'register')->name('register');
    Route::get('/contactUs', 'contactUs')->name('contactUs');
    Route::get('/aboutUs', 'aboutUs')->name('aboutUs');
    Route::get('/faqs', 'faqs')->name('faqs');
});
Route::any('luxauro-library-forum-publishing',[UserController::class,'forumPublishing'])->name('forumPublishing');
Route::get('luxauro-library-forum-filter',[UserController::class,'forumFilter'])->name('forumFilter');
Route::get('luxauro-library-street-filter',[UserController::class,'streetFilter'])->name('streetFilter');
Route::any('luxauro-street-vintage-antique-market',[UserController::class,'luxaurostreet'])->name('luxaurostreet');
Route::any('all-owner-luxauro', [UserController::class, 'allOwner'])->name('allOwner');
Route::any('search',[UserController::class,'searchFilter'])->name('searchFilters');

Route::get('luxauro/merchant-register', [RegisterController::class, 'showRegistrationForm'])->name('vendorRegister');
Route::get('goldEvines/founderRegister', [RegisterController::class, 'showRegistrationForm'])->name('founderRegister');
Route::get('goldMetal/professionalRegister', [RegisterController::class, 'showRegistrationForm'])->name('professionalRegister');

Route::controller(MerchantController::class)->group(function () {
    Route::get('/merchant-account', 'merchantAccountFirstStep')->name('merchant_account_first_step');
    Route::post('/merchant-account', 'merchantAccountSecondStep')->name('merchant_account_second_step');
    Route::post('/save_merchant_account', 'saveMerchantAccount')->name('save_merchant_account');
});
Route::controller(CharterManagementController::class)->group(function () {

    Route::post('/charter_manage', 'store')->name('charter_manage');
    Route::get('/all_charters', 'index')->name('charters');
    Route::get('/charter_detail', 'charter_detail')->name('charter_detail');
    Route::get('/appendCharters', 'appendCharters')->name('appendCharters');
    Route::post('/charter_book', 'charter_book')->name('charter_book');
    Route::get('/charter_management', 'charter_management')->name('charter_management');
});
Route::controller(ProductController::class)->group(function () {
    Route::post('/productUpload', 'productUpload')->name('productUpload');
    Route::get('/product_management', 'productManagement')->name('product_management');
});
Route::get('test', function () {
    return view('frontend.all-page.test');
});


Route::controller(PageController::class)->group(function () {
    // Policies
    Route::get('/seller-policy', 'sellerpolicy')->name('sellerpolicy');
    Route::get('/return-policy', 'returnpolicy')->name('returnpolicy');
    Route::get('/support-policy', 'supportpolicy')->name('supportpolicy');
    Route::get('/terms', 'terms')->name('terms');
    Route::get('/privacy-policy', 'privacypolicy')->name('privacypolicy');
});


Auth::routes(['verify' => true]);

// Route::get('vendor-register', [VendorControlController::class, 'register'])->name('vendorRegister');

Route::match(['get','post'],'/search-product', [ProductController::class, 'productsearch'])->name('productsearch');
// Route::get('/search-product', [ProductController::class, 'productsearch'])->name('productsearch');

Route::get('own-luxauro-filter',[ProductController::class,'ownLuxaurofilter'])->name('ownLuxaurofilter');



Route::get('/all-products', [ProductController::class, 'allProducts'])->name('allProducts');


Route::controller(MessagesController::class)->group(function () {
    Route::get('/chatify', 'index')->middleware(['auth'])->name(config('chatify.routes.prefix'));


    Route::post('/idInfo', 'idFetchData');
    /**
     * Send message route
     */
    Route::post('/sendMessage', 'send')->name('send.message');
    /**
     * Fetch messages
     */
    Route::post('/fetchMessages', 'fetch')->name('fetch.messages');
    /**
     * Download attachments route to create a downloadable links
     */
    Route::get('/download/{fileName}', 'download')->name(config('chatify.attachments.download_route_name'));
    /**
     * Authentication for pusher private channels
     */
    Route::post('/chat/auth', 'pusherAuth')->name('pusher.auth');
    /**
     * Make messages as seen
     */
    Route::post('/makeSeen', 'seen')->name('messages.seen');
    /**
     * Get contacts
     */
    Route::get('/getContacts', 'getContacts')->name('contacts.get');
    /**
     * Update contact item data
     */
    Route::post('/updateContacts', 'updateContactItem')->name('contacts.update');


    /**
     * Star in favorite list
     */
    Route::post('/star', 'favorite')->name('star');
    /**
     * get favorites list
     */
    Route::post('/favorites', 'getFavorites')->name('favorites');
    /**
     * Search in messenger
     */
    Route::get('/search', 'search')->name('search');
    /**
     * Get shared photos
     */
    Route::post('/shared', 'sharedPhotos')->name('shared');
    /**
     * Delete Conversation
     */
    Route::post('/deleteConversation', 'deleteConversation')->name('conversation.delete');
    /**
     * Delete Message
     */
    Route::post('/deleteMessage', 'deleteMessage')->name('message.delete');
    /**
     * Set active status
     */
    Route::post('/setActiveStatus', 'setActiveStatus')->name('activeStatus.set');
        /*
    * [Group] view by id
    */
    Route::get('/group/{id}', 'index')->name('group');

        /*
    * user view by id.
    * Note : If you added routes after the [User] which is the below one,
    * it will considered as user id.
    *
    * e.g. - The commented routes below :
    */
    // Route::get('/route', function(){ return 'Munaf'; }); // works as a route
    // Route::get('/{id}', 'index')->name('user');
    // Route::get('/route', function(){ return 'Munaf'; }); // works as a user id
});

