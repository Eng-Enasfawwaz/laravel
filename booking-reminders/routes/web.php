<?php
use App\Http\Controllers\GmailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
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


Route::get('/bookings/create', [BookingController::class, 'create'])->name('bookings.create');

// Store a new booking
Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');

// Show all bookings
Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');

// Show the form to edit a booking (for setting reminder time)
Route::get('/bookings/{booking}/edit', [BookingController::class, 'edit'])->name('bookings.edit');

// Update a booking (for setting reminder time)
Route::put('/bookings/{booking}', [BookingController::class, 'update'])->name('bookings.update');



Route::get('/gmail/oauth', [GmailController::class, 'redirectToGoogle']);
Route::get('/gmail/oauth/callback', [GmailController::class, 'handleGoogleCallback']);
Route::get('/send-email', [GmailController::class, 'sendEmail']);