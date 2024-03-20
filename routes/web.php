<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminHomeworkController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\HomeWorkController;
use App\Http\Controllers\RegularUserController;
use App\Http\Controllers\SubAdminController;
use App\Http\Controllers\UserCoursesController;

// Admin routes wil be here 

Route::prefix('admin')->group(function () {

    // authentication related routes 

    Route::get('/login', [AdminController::class, 'index'])->name('admin_login_form');
    Route::post('/login/owner', [AdminController::class, 'login'])->name('admin_login'); // admin_profile
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin_dashboard')->middleware('admin');
    Route::get('/logout', [AdminController::class, 'logout'])->name('admin_logout');
    Route::get('/register', [AdminController::class, 'register_view'])->name('admin_register_form');
    Route::post('/register/owner', [AdminController::class, 'register'])->name('admin.register');


    // users related routes 

    Route::get('/users', [AdminUserController::class, 'users_list'])->name('admin_users')->middleware('admin');
    // Route::get('/user-info/{whatsapp}',[AdminUserController::class,'show'])->name('user_info');
    Route::get('/user-info/${id}', [AdminUserController::class, 'user_info'])->name('user_info');
    Route::post('/activate-user/{id}', [RegularUserController::class,'activate_user'])->name('activate_user');
    Route::post('/deactivate-user/{id}', [RegularUserController::class, 'deactivate_user'])->name('deactivate_user');


    // admin-homework routes 

    Route::get('/view/submited_homework' , [AdminHomeworkController::class , 'index'])->name('admin_homework_view') ; 
    Route::get('/accepted/submited_homework' , [AdminHomeworkController::class , 'accepted_homework'])->name('admin_accepted_homework') ; 
    Route::post('/approve/submited_homework/{id}' , [AdminHomeworkController::class , 'approve'])->name('approve_homework');
    Route::post('/decline/submited_homework/{id}' , [AdminHomeworkController::class , 'decline'])->name('decline_homework');


});

// Admin routes end here 


// sub admin starts here 


Route::prefix('sub-admin')->group(function () {

    Route::get('/login', [SubAdminController::class, 'index'])->name('subadmin_login_form');
    Route::post('/login/owner', [SubAdminController::class, 'login'])->name('subadmin_login'); // admin_profile
    Route::get('/dashboard', [SubAdminController::class, 'dashboard'])->name('subadmin_dashboard')->middleware('admin');
    Route::get('/logout', [SubAdminController::class, 'logout'])->name('subadmin_logout');
    Route::get('/register', [SubAdminController::class, 'register_view'])->name('subadmin_register_form');
    Route::post('/register/owner', [SubAdminController::class, 'register'])->name('subadmin_register');


});

// sub admin ends here 



// regular_user routes wil be here 

Route::prefix('regular_user')->group(function () {

    Route::get('/login', [RegularUserController::class, 'index'])->name('regular_user_login_form');
    Route::post('/login/owner', [RegularUserController::class, 'login'])->name('regular_user_login'); // admin_profile
    Route::get('/dashboard', [RegularUserController::class, 'dashboard'])->name('regular_user_dashboard')->middleware('regular_user');
    Route::get('/logout', [RegularUserController::class, 'logout'])->name('regular_user_logout');

    Route::get('/register', [RegularUserController::class, 'register_view'])->name('regular_user_register_form');
    Route::post('/register/owner', [RegularUserController::class, 'register'])->name('regular_user_register');



    // profile pages all routes 
    Route::get('/profile', [RegularUserController::class, 'profile'])->name('regular_user_profile');
    Route::get('/course', [RegularUserController::class, 'course'])->name('regular_user_course');
    Route::get('/wishlist', [RegularUserController::class, 'wishlist'])->name('regular_user_wishlist');
    Route::get('/notification', [RegularUserController::class, 'notification'])->name('regular_user_notification');
    Route::get('/transaction', [RegularUserController::class, 'transaction'])->name('regular_user_transaction');
    Route::get('/user-referrel/${id}', [AdminUserController::class, 'user_referrel'])->name('user_referrel');
   


});
// regular_user routes end here 


Route::prefix('/')->group(function () {

    Route::get('/courses', [UserCoursesController::class, 'index'])->name('courses_page');

});


Route::prefix('homework')->group(function () {

    Route::get('', [HomeWorkController::class, 'index'])->name('homework_page')->middleware('regular_user');
    Route::post('submit/${id}', [HomeWorkController::class, 'submit_homework'])->name('submit_homework');

});


Route::get('/', function () {
    return view('frontend/home/index');
});




// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
