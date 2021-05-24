<?php

use Illuminate\Support\Facades\Route;

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

//Patient
Route::get('/patient', function () {
    return view('patient.index');
});
Route::get('/all-appointments', function () {
    return view('patient.all_appointments');
});
Route::get('/make-new-appointment', function () {
    return view('patient.make_new_appointment');
});
Route::get('/book', function () {
    return view('patient.book');
});
Route::get('/my-payments', function () {
    return view('patient.my-payments');
});
Route::get('/my-prescriptions', function () {
    return view('patient.my-prescriptions');
});

//Doctor
Route::get('/doctor', function () {
    return view('doctor.index');
});
Route::get('/todays-appointments', function () {
    return view('doctor.todays_appointments');
});
Route::get('/upcoming-appointments', function () {
    return view('doctor.upcoming_appointment');
});
Route::get('/previous', function () {
    return view('doctor.previous');
});
Route::get('/payment-history', function () {
    return view('doctor.payment_history');
});
Route::get('/patient-list', function () {
    return view('doctor.patient_list');
});
Route::get('/settings', function () {
    return view('doctor.settings');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
