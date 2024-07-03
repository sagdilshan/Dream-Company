<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\OtherController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// Route::get('/', 'welcome')->name('welcome');
Route::view('/contact-us', 'contact')->name('contact');
Route::view('/service', 'service')->name('service');
Route::view('/about-us', 'about')->name('about');
Route::view('/portfolio', 'portfolio')->name('portfolio');


// Route::view('/login','login')->name('login');
// Route::view('/admin-index','admin.index')->name('admin.index');

Route::controller(OtherController::class)->group(function () {

    Route::get('/', 'IndexPage')->name('welcome');
    Route::post('/inquire/store', 'InquireStore')->name('inquire.store');



});


Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::controller(AdminController::class)->group(function () {

        Route::get('/admin-index', 'AdminDashboard')->name('admin.index');
        Route::get('/admin/logout', 'AdminLogout')->name('admin.logout');
        Route::post('/admin/update/password', 'AdminUpdatePassword')->name('admin.update.password');
        Route::get('/admin-projects', 'AdminProject')->name('admin.project');
        Route::get('/admin-feedbacks', 'AdminFeedback')->name('admin.feedback');
        Route::get('/admin-staffs', 'AdminStaff')->name('admin.staff');
        Route::get('/admin-clients', 'AdminClient')->name('admin.client');
        Route::get('/admin-inquires', 'AdminInquire')->name('admin.inquire');
        Route::get('/admin-all', 'AdminAll')->name('admin.all');
        Route::get('/admin-profile', 'AdminProfile')->name('admin.profile');
        Route::post('/admin/profile/store', 'AdminProfileStore')->name('admin.profile.store');
        Route::post('/admin/client/store', 'AdminClientStore')->name('admin.client.store');
        Route::post('/admin/feedback/store', 'AdminFeedbackStore')->name('admin.feedback.store');
        Route::post('/admin/staff/store', 'AdminStaffStore')->name('admin.staff.store');
        Route::post('/admin/project/store', 'AdminProjectStore')->name('admin.project.store');
        Route::post('/admin/store', 'AdminStore')->name('admin.store');
        Route::put('/admin/inquire/status/{id}', 'AdminInquireStatus')->name('admin.inquire.status');



    });

}); // end group admin middlewere









