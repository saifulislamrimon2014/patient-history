<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\RecordController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontendController; //searching query
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// admin dashboad-------------------------------------------------------------------
Route::group(['prefix'=>'doctors', 'middleware'=>'auth'], function(){
	Route::resource('records',RecordController::class);
    Route::get('records/{record}/pdf', [RecordController::class, 'pdf']);
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('dashboard/appointment', [AdminController::class, 'appointment'])->name('admin.dashboard.appointment');
    Route::get('dashboard/records', [AdminController::class, 'records'])->name('admin.dashboard.records');
    Route::get('dashboard/records/approve/{id}', [AdminController::class, 'approve'])->name('admin.dashboard.records.approve');
    Route::get('dashboard/records/cancel/{id}', [AdminController::class, 'cancel'])->name('admin.dashboard.records.cancel');
	Route::get('contact', [AdminController::class, 'contact'])->name('admin.contact');
	Route::get('contact/delete/{id}', [AdminController::class, 'delete'])->name('contact.delete');
    Route::resource('profile', ProfileController::class);

    Route::get('dashboard/records/history/{id}', [AdminController::class, 'history'])->name('admin.dashboard.records.history');
    Route::get('dashboard/records/history/view/{id}', [AdminController::class, 'historyView'])->name('admin.dashboard.records.history.view');

    Route::get('profile/available/{id}', [AdminController::class, 'available'])->name('admin.dashboard.doctor.available');
    Route::get('profile/unavailable/{id}', [AdminController::class, 'unavailable'])->name('admin.dashboard.doctor.unavailable');
});
// admin dashboad-------------------------------------------------------------------

Route::post('/appointment', [AppointmentController::class, 'store'])->name('appointment.store');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// searchnig query------------------------------------------------------------------
Route::get('search', [FrontendController::class, 'search'])->name('search');
// searchnig query------------------------------------------------------------------

Route::get('/', [FrontendController::class, 'welcome_page']);
