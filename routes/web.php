<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\OtherController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TravelController;

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
Route::view('/it-department/contact-us', 'contact')->name('contact');
Route::view('/it-department/service', 'service')->name('service');
Route::view('/it-department/portfolio', 'portfolio')->name('portfolio');


// Route::view('/login','login')->name('login');
// Route::view('/admin-index','admin.index')->name('admin.index');

Route::controller(OtherController::class)->group(function () {

    // Route::get('/', 'IndexPage')->name('welcome');
    Route::post('/inquire/store', 'InquireStore')->name('inquire.store');
    Route::get('/it-department/about-us', 'AboutPage')->name('about');
    Route::get('/it-department', 'IndexPage')->name('software');
    Route::get('/travel-department', 'TravelPage')->name('travel');
    Route::get('/', 'MainIndexPage')->name('welcome');



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


        Route::get('/admin-invoice/{id}', 'AdminInvoice')->name('admin.invoice');
        Route::get('/admin-quotation', 'AdminQuotation')->name('admin.quotation');
        Route::post('/admin/quotation/store', 'AdminQuotationStore')->name('admin.quotation.store');
        Route::get('/admin-quotation/{id}', 'AdminQuotationView')->name('admin.quotation.view');


        Route::get('/admin/edit/{id}', 'EditAdmin')->name('edit.admin');
        Route::get('/client/edit/{id}', 'EditCustomer')->name('edit.client');
        Route::get('/project/edit/{id}', 'EditProject')->name('edit.project');
        // Route::post('project/edit/{id}','EditProject') ->name('project.update');

        Route::get('/staff/edit/{id}', 'EditStaff')->name('edit.staff');

        Route::post('update/project/{id}', 'UpdateProject')->name('update.project');
        Route::post('update/staff/{id}', 'UpdateStaff')->name('update.staff');
        Route::post('update/client/{id}', 'UpdateCustomer')->name('update.client');
        Route::post('update/admin/{id}', 'UpdateAdmin')->name('update.admin');

        Route::get('/admin/delete/feedback/{id}', 'DeleteFeedback')->name('delete.feedback');





    });

}); // end group admin middlewere



Route::middleware(['auth', 'role:travel'])->group(function () {

Route::controller(TravelController::class)->group(function () {

    Route::get('/travel/logout', 'TravelLogout')->name('travel.logout');
    Route::get('/travel-admin-profile', 'TravelProfile')->name('travel.profile');
    Route::get('/travel-admin-index', 'TravelDashboard')->name('travel.index');
    Route::get('/travel-inquires', 'TravelInquire')->name('travel.inquire');
    Route::put('/travel/inquire/status/{id}', 'TravelInquireStatus')->name('travel.inquire.status');
    Route::get('/travel-clients', 'TravelClient')->name('travel.client');
    Route::post('/travel/client/store', 'TravelClientStore')->name('travel.client.store');
    Route::get('/travel-client/edit/{id}', 'TravelEditCustomer')->name('travel.edit.client');
    Route::post('/travel-update/client/{id}', 'TravelUpdateCustomer')->name('travel.update.client');
    Route::post('/travel/update/password', 'TravelUpdatePassword')->name('travel.update.password');
    Route::post('/travel/profile/store', 'TravelProfileStore')->name('travel.profile.store');

    Route::get('/travel-quotation', 'TravelQuotation')->name('travel.quotation');
    Route::get('/travel-vehicle-info', 'TravelVehicleInfo')->name('travel.vehicle.info');

    Route::post('/travel/vehicle/store', 'TravelVehicleStore')->name('travel.vehicle.store');



});
}); // end group travel admin middlewere



