<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserController;

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

Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/landing-page', [PageController::class, 'landingPage'])->name('landing-page');
Route::get('/sign-up', [PageController::class, 'signUp'])->name('sign-up');
Route::get('/forgot-password', [PageController::class, 'forgotPassword'])->name('forgot-password');
Route::get('/email-confirmation', [PageController::class, 'emailConfirmation'])->name('email_confirmation');
Route::get('/check_email', [PageController::class, 'getAccountForResetPassword'])->name('check_email');
Route::get('/reset-password/{id}', [PageController::class, 'resetPassword'])->name('reset_password');
Route::get('/change-password', [UserController::class, 'changePassword'])->name('change_password');
Route::get('/print_invoice/{id}', [BookingController::class, 'print_pdf'])->name('print_pdf');
Route::get('/list-product/{id}', [HomeController::class, 'listView'])->name('list-product');
Route::prefix('e-wallet')->group(function() {    
    Route::get('/', [TransactionController::class, 'index'])->name('e-wallet');    
    Route::get('/top-up', [TransactionController::class, 'topUp'])->name('top-up');
    Route::post('/add-balance', [TransactionController::class, 'addBalance'])->name('add-balance');
    Route::get('/withdrawal', [TransactionController::class, 'withdrawal'])->name('withdrawal');
    Route::post('/reduce-balance', [TransactionController::class, 'reduceBalance'])->name('reduce-balance');
});
Route::resource('profile', UserController::class);
Route::resource('product', ProductController::class);
Route::resource('booking', BookingController::class);
Route::get('/list', [BookingController::class, 'bookingList'])->name('booking.list');        
Route::prefix('booking')->group(function() {    
    Route::get('/create/{product_id}', [BookingController::class, 'create'])->name('booking.create');
    Route::post('/cancel', [BookingController::class, 'cancel'])->name('booking.cancel');
    Route::post('/done', [BookingController::class, 'done'])->name('booking.done');
    Route::post('/payment/store', [PaymentController::class, 'store'])->name('payment.store');    
    Route::get('/payment/cancel/{booking_id}', [PaymentController::class, 'cancel'])->name('payment.cancel');    
});


