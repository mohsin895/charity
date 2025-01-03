<?php

use Illuminate\Support\Facades\Route;
use Modules\SystemConfiguration\Http\Controllers\WebsiteController;
use Modules\Authentication\Http\Controllers\WEB\DashboardController;
use Modules\SystemConfiguration\Http\Controllers\WEB\SchoolController;
use Modules\SystemConfiguration\Http\Controllers\WEB\UpazilaController;
use Modules\SystemConfiguration\Http\Controllers\WEB\SyllabusController;
use Modules\SystemConfiguration\Http\Controllers\WEB\OnboardingController;

Route::post('/registration-form', [WebsiteController::class, 'store'])->name('registration-form.store');
// Route::get('/', [WebsiteController::class, 'index'])->name('index');
Route::get('/admission/{id}', [WebsiteController::class, 'admissionCard']);
Route::get('/get-schools/{upazila_id}', [WebsiteController::class, 'getSchoolsByUpazila']);

Route::group(['middleware' => ['auth']], function () {
    /** Common Route for All **/
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('schools', SchoolController::class);
    Route::resource('onboardings', OnboardingController::class);
    Route::resource('syllabus', SyllabusController::class);
    Route::resource('upazilas', UpazilaController::class);
});
