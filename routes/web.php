<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

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
Route::get('/', [HomeController::class, 'index'])->name('index')->middleware('auth');
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/landing-page', [PageController::class, 'landingPage'])->name('landing-page');
Route::get('/sign-up', [PageController::class, 'signUp'])->name('sign-up');
Route::get('/forgot-password', [PageController::class, 'forgotPassword'])->name('forgot-password');

Route::resource('product', ProductController::class);