<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Goldevine\GoldevineCategoryController;
use App\Http\Controllers\Admin\Goldevine\ProjectManageController;





Route::resource('goldevine-category', GoldevineCategoryController::class);
Route::get('project-detail/{id}/{slug}',[ProjectManageController::class,'projectDetail'])->name('projectDetail');

Route::get('project-checkout/{id}',[ProjectManageController::class,'projectcheckout'])->name('projectcheckout');

Route::post('project-checkout',[ProjectManageController::class,'projectcheckoutstore'])->name('projectcheckoutstore');
