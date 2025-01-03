<?php
use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\Frontend\IndexController::class, 'index'])->name('index');
Route::get('/about/us/', [\App\Http\Controllers\Frontend\AboutUsController::class, 'index'])->name('about.us');
Route::get('/activity', [\App\Http\Controllers\Frontend\AboutWorkController::class, 'index'])->name('activity');
Route::get('/project', [\App\Http\Controllers\Frontend\ProjectController::class, 'index'])->name('project');
Route::get('/media', [\App\Http\Controllers\Frontend\GalleryController::class, 'index'])->name('media');
Route::get('/donation', [\App\Http\Controllers\Frontend\DonationController::class, 'index'])->name('donation');
Route::get('/contact', [\App\Http\Controllers\Frontend\ContactController::class, 'index'])->name('contact');
Route::get('/blood', [\App\Http\Controllers\Frontend\BloodBankController::class, 'index'])->name('blood');

Route::get('/blood/management', [\App\Http\Controllers\Frontend\BloodBankController::class, 'management'])->name('blood.management');

Route::get('/member/login', [\App\Http\Controllers\Member\LoginController::class, 'login'])->name('member.login');
Route::get('/member/registration', [\App\Http\Controllers\Member\LoginController::class, 'registration'])->name('member.registration');


Route::middleware('member')->group(function () {
  

});




Route::middleware('auth')->group(function () {

    Route::prefix('admin')->name('admin.')->group(function () {
      
          Route::prefix('slider')->name('slider.')->group(function () {
            Route::get('/',[\App\Http\Controllers\Admin\SliderController::class,'index'])->name('index');
            Route::post('add/update/info/{id?}',[\App\Http\Controllers\Admin\SliderController::class,'addOrUpdateInfo'])->name('add.update.info');
            Route::delete('/delete/{id}',[\App\Http\Controllers\Admin\SliderController::class,'dataInfoDelete'])->name('delete');
        });

        Route::prefix('blood')->name('blood.')->group(function () {
            Route::get('/',[\App\Http\Controllers\Admin\BloodGroupController::class,'index'])->name('index');
            Route::post('add/update/info/{id?}',[\App\Http\Controllers\Admin\BloodGroupController::class,'addOrUpdateInfo'])->name('add.update.info');
            Route::delete('/delete/{id}',[\App\Http\Controllers\Admin\BloodGroupController::class,'dataInfoDelete'])->name('delete');
        });
        Route::prefix('about')->name('about.')->group(function () {
            Route::prefix('qa')->name('qa.')->group(function () {
                Route::get('/',[\App\Http\Controllers\Admin\QuestionAnswerController::class,'index'])->name('index');
                Route::post('add/update/info/{id?}',[\App\Http\Controllers\Admin\QuestionAnswerController::class,'addOrUpdateInfo'])->name('add.update.info');
                Route::delete('/delete/{id}',[\App\Http\Controllers\Admin\QuestionAnswerController::class,'dataInfoDelete'])->name('delete');
            });
        });
        Route::prefix('activity')->name('activity.')->group(function () {
          
            Route::get('/',[\App\Http\Controllers\Admin\ActivityController::class,'index'])->name('index');
            Route::post('add/update/info/{id?}',[\App\Http\Controllers\Admin\ActivityController::class,'addOrUpdateInfo'])->name('add.update.info');
            Route::delete('/delete/{id}',[\App\Http\Controllers\Admin\ActivityController::class,'dataInfoDelete'])->name('delete');
    
    });

    Route::prefix('blood')->name('blood.')->group(function () {
          
        Route::get('/',[\App\Http\Controllers\Admin\BloodGroupController::class,'index'])->name('index');
        Route::post('add/update/info/{id?}',[\App\Http\Controllers\Admin\ActivityController::class,'addOrUpdateInfo'])->name('add.update.info');
        Route::delete('/delete/{id}',[\App\Http\Controllers\Admin\ActivityController::class,'dataInfoDelete'])->name('delete');

});

    Route::prefix('member')->name('member.')->group(function () {
          
        Route::get('/',[\App\Http\Controllers\Admin\MemberController::class,'index'])->name('index');
        Route::post('add/update/info/{id?}',[\App\Http\Controllers\Admin\MemberController::class,'addOrUpdateInfo'])->name('add.update.info');
        Route::delete('/delete/{id}',[\App\Http\Controllers\Admin\MemberController::class,'dataInfoDelete'])->name('delete');
        Route::post('/update-member-type/{id}', [\App\Http\Controllers\Admin\MemberController::class, 'updateMemberType'])->name('update.type');


});

        Route::prefix('project')->name('project.')->group(function () {
          
                Route::get('/',[\App\Http\Controllers\Admin\ProjectController::class,'index'])->name('index');
                Route::post('add/update/info/{id?}',[\App\Http\Controllers\Admin\ProjectController::class,'addOrUpdateInfo'])->name('add.update.info');
                Route::delete('/delete/{id}',[\App\Http\Controllers\Admin\ProjectController::class,'dataInfoDelete'])->name('delete');
        
        });

        Route::prefix('gallery')->name('gallery.')->group(function () {
          
            Route::get('/',[\App\Http\Controllers\Admin\GalleryController::class,'index'])->name('index');
            Route::post('add/update/info/{id?}',[\App\Http\Controllers\Admin\GalleryController::class,'addOrUpdateInfo'])->name('add.update.info');
            Route::delete('/delete/{id}',[\App\Http\Controllers\Admin\GalleryController::class,'dataInfoDelete'])->name('delete');
            
            Route::prefix('image')->name('image.')->group(function () {
          
                Route::get('/{id}',[\App\Http\Controllers\Admin\GalleryImageController::class,'index'])->name('index');
                Route::post('add/update/info/{id?}',[\App\Http\Controllers\Admin\GalleryImageController::class,'addOrUpdateInfo'])->name('add.update.info');
                Route::delete('/delete/{id}',[\App\Http\Controllers\Admin\GalleryImageController::class,'dataInfoDelete'])->name('delete');
        
        });
    });

    Route::prefix('donation')->name('donation.')->group(function () {
          
        Route::get('/',[\App\Http\Controllers\Admin\DonationController::class,'index'])->name('index');
        Route::post('add/update/info/{id?}',[\App\Http\Controllers\Admin\DonationController::class,'addOrUpdateInfo'])->name('add.update.info');
        Route::delete('/delete/{id}',[\App\Http\Controllers\Admin\DonationController::class,'dataInfoDelete'])->name('delete');
        
        Route::prefix('image')->name('image.')->group(function () {
      
            Route::get('/{id}',[\App\Http\Controllers\Admin\GalleryImageController::class,'index'])->name('index');
            Route::post('add/update/info/{id?}',[\App\Http\Controllers\Admin\GalleryImageController::class,'addOrUpdateInfo'])->name('add.update.info');
            Route::delete('/delete/{id}',[\App\Http\Controllers\Admin\GalleryImageController::class,'dataInfoDelete'])->name('delete');
    
    });
});

        Route::prefix('setting')->name('setting.')->group(function () {
            Route::get('/general',[\App\Http\Controllers\Admin\SettingController::class,'index'])->name('index.general');
            Route::post('add/update/general/info/{id?}',[\App\Http\Controllers\Admin\SettingController::class,'addOrUpdateInfo'])->name('add.update.general.info');
            Route::group(['prefix'=>'email', 'as'=>'email.'],function(){

                Route::get('/',[\App\Http\Controllers\Admin\EmailSettingController::class,'index'])->name('index');
                Route::post('/add/update',[\App\Http\Controllers\Admin\EmailSettingController::class,'addOrUpdateInfo'])->name('add.update.info');
          });
        });
    });
    
});