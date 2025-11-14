<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\userController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\PharmacyController;
use App\Http\Controllers\SpecialtyController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AppointmentOneController;
use App\Http\Controllers\XrayController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\HistAdminController;
use App\Http\Controllers\displayController;

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

Route::get('/', function () {

    return view('welcome');
});
// Route::get('/', [displayController::class, 'display'])->name('home');


Route::resource('/messages', MessageController::class);
Route::post('/messages', [MessageController::class, 'store'])->name('messages.store');


Auth::routes();
Route::middleware('auth')->group(function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
    Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact']);
    Route::get('/about', [App\Http\Controllers\HomeController::class, 'about']);
    Route::get('/homepatient', [App\Http\Controllers\HomeController::class, 'home']);
    Route::get('/homedoctor', [App\Http\Controllers\HomeController::class, 'homedoctor']);
    Route::get('/searchu', [UserController::class, 'search']); //admin
    Route::get('/searchs', [DoctorController::class, 'search']); //admin
    Route::get('/searchr', [RequestController::class, 'search']); //admin
    Route::get('/searchp', [PharmacyController::class, 'search']);  //admin
    Route::get('/searchx', [XrayController::class, 'search']); //admin
    Route::get('/searchhist', [HistAdminController::class, 'search']); //admin
    Route::get('/fliter', [HistAdminController::class, 'index']); //admin
    Route::get('/searchm', [MessageController::class, 'search']); //admin
    Route::resource('/users', userController::class); //admin
    Route::resource('/requests', RequestController::class); //admin
    Route::resource('/doctors', DoctorController::class); //admin
    Route::resource('/pharmacys', PharmacyController::class); //admin
    Route::resource('/historys', HistAdminController::class); //admin
    Route::resource('/xray', XrayController::class); //user
    Route::get('/requests/status/{user_id}/{status_code}', [RequestController::class, 'update'])->name('users.status.update');  //admin route model
    Route::get('/history', [HistoryController::class, 'admin'])->name('admin.hist'); //doctor
    Route::get('/searchapp', [AppointmentController::class, 'search']); //doctor
    Route::post('/transfer/{id}', [HistoryController::class, 'transferData'])->name('transfer.data'); //doctor
    Route::resource('/history', HistoryController::class); //doctor
    Route::resource('/appointment', AppointmentController::class); //user
    Route::get('/searchpuser', [PharmacyController::class, 'searchs']); //user
    Route::get('/show', [PharmacyController::class, 'phar']); //user
    Route::resource('/appointmentone', AppointmentOneController::class); //user



});
