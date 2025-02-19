<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\CardPaymentController;

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


Route::get('/visa', [VisaController::class, 'index']);
Route::post('/submit-visa-form', [VisaController::class, 'store']);
Route::post('/submit-newsletter-form', [NewsletterController::class, 'store']);
Route::get('/cardpayment', [CardPaymentController::class, 'index']);