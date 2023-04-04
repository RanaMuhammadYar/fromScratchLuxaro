<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuitsController;
use App\Http\Controllers\Goldevine\GoldevineCategoryController;
use App\Http\Controllers\Admin\Goldevine\ProjectManageController;





Route::resource('goldevine-category', GoldevineCategoryController::class);
Route::get('project-detail/{id}/{slug}', [ProjectManageController::class, 'projectDetail'])->name('projectDetail')->middleware('auth');
Route::get('project-checkout/{id}', [ProjectManageController::class, 'projectcheckout'])->name('projectcheckout');
Route::post('project-checkout', [ProjectManageController::class, 'projectcheckoutstore'])->name('projectcheckoutstore');
Route::any('project-search', [ProjectManageController::class, 'projectsearch'])->name('projectsearch');

Route::get('project-add-to-favirate', [ProjectManageController::class, 'addToFavirate'])->name('addToFavirate');

Route::get('project-favirate', [ProjectManageController::class, 'favirate'])->name('favirate');

Route::get('project-favirate-removes', [ProjectManageController::class, 'favirateRemove'])->name('removeFacirates');

// Myprofile Admin pnal |Route:

Route::get('create-project', [ProjectManageController::class, 'create'])->name('createProject');
Route::post('create-project', [ProjectManageController::class, 'store'])->name('storeProjectgoldevine');
Route::get('all-project', [ProjectManageController::class, 'allProject'])->name('allprojects');
Route::get('edit-project/{id}', [ProjectManageController::class, 'edit'])->name('editProject');
Route::post('edit-project', [ProjectManageController::class, 'update'])->name('updateProject');



// Suits Route
Route::get('suits', [SuitsController::class, 'index'])->name('suits');
