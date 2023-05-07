<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GigController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PerformerController;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/discover', [GigController::class, 'index'])->name('discover');
Route::get('/discover/add', [GigController::class, 'create'])->name('add');
Route::post('/discover/store', [GigController::class, 'store'])->name('store');
Route::get('/discover/addBooking', [BookingController::class, 'create'])->name('addBooking');
Route::post('/discover/storeBooking', [BookingController::class, 'store'])->name('storeBooking');
Route::get('/booking', [BookingController::class, 'show'])->name('show');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/discover/edit/{id}', [GigController::class, 'edit'])->name('edit');
Route::post('/discover/update/{id}', [ProductController::class, 'update'])->name('update');
Route::delete('/booking/delete/{id}', [BookingController::class, 'destroy'])->name('delete');
Route::get('/discover/addP', [PerformerController::class, 'create'])->name('addP');
Route::post('/discover/storeP', [PerformerController::class, 'store'])->name('storeP');