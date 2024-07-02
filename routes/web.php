<?php

use App\Http\Controllers\AdminController;
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

Route::view('/', 'welcome')->name('welcome');
Route::view('/contact-us', 'contact')->name('contact');
Route::view('/service', 'service')->name('service');
Route::view('/about-us', 'about')->name('about');
Route::view('/portfolio', 'portfolio')->name('portfolio');
// Route::view('/login','login')->name('login');


// Route::view('/admin-index','admin.index')->name('admin.index');
Route::view('/admin-projects', 'admin.project.all-project')->name('admin.project');
Route::view('/admin-feedbacks', 'admin.feedback.all-feedback')->name('admin.feedback');
Route::view('/admin-staffs', 'admin.staff.all-staff')->name('admin.staff');
Route::view('/admin-clients', 'admin.client.all-client')->name('admin.client');
Route::view('/admin-inquires', 'admin.inquire.all-inquire')->name('admin.inquire');
Route::view('/admin-all', 'admin.all-admin.all-admin')->name('admin.all');

Route::view('/admin-profile', 'admin.profile')->name('admin.profile');


Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::controller(AdminController::class)->group(function () {

        Route::get('/admin-index', 'AdminDashboard')->name('admin.index');
        Route::get('/admin/logout', 'AdminLogout')->name('admin.logout');
        Route::post('/admin/update/password', 'AdminUpdatePassword')->name('admin.update.password');


    });

}); // end group admin middlewere









