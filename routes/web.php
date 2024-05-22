<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\GateController;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class,'index']);

Route::get('/about', function () {
    return view('user.about');
});

Route::get('/pricing', function () {
    return view('user.pricing');
});

Route::get('/contact', function () {
    return view('user.contact');
});

Route::get('/coming_soon', function () {
    return view('user.coming_soon');
});

Route::get('/home', [HomeController::class,'auth_check']);


//Admin Functions
Route::prefix('admin')->middleware('auth','isAdmin')->group(function() {
    Route::get('dashboard', [AdminController::class,'index']);
    Route::get('clients', [AdminController::class,'clients']);
    Route::get('client/{id}', [AdminController::class,'client']);
    Route::get('employees', [AdminController::class,'employees']);
    Route::get('employee/{id}', [AdminController::class,'employee']);
    Route::get('new_employee', [AdminController::class,'new_employee']);
    Route::post('post_employee', [AdminController::class,'post_employee']);
    Route::get('payments', [AdminController::class,'payments']);
    Route::get('messages', [AdminController::class,'messages']);
    Route::get('message/{id}', [AdminController::class,'message']);
    Route::get('/generate_client_park_report/{id}', [AdminController::class,'generatePDF'])->name('pdf.generate');
});

//Doctor Functions
Route::prefix('gate')->middleware('auth','isGate')->group(function() {
	Route::get('dashboard', [GateController::class,'index']);
    Route::get('parking_space', [GateController::class,'parking_space']);
    Route::get('bookings', [GateController::class,'bookings']);
    Route::get('booking/{id}', [GateController::class,'booking']);
    Route::get('car_park_map', [GateController::class,'car_park_map']);
    Route::get('emergency_numbers', [GateController::class,'emergency_numbers']);
    Route::get('car_is_entering/{id}', [GateController::class,'car_is_entering']);
    Route::get('car_is_exiting/{id}', [GateController::class,'car_is_exiting']);
    Route::get('search_cars', [GateController::class,'search_cars']);
});

//Patient Functions
Route::prefix('client')->middleware('auth','isClient')->group(function() {
	Route::get('/home', [ClientController::class,'index']);
    Route::get('/parking', [ClientController::class,'parking']);
    Route::get('/my_cars', [ClientController::class,'my_cars']);
    Route::get('/new_car', [ClientController::class,'new_car']);
    Route::post('/post_car', [ClientController::class,'post_car']);
    Route::get('/edit_car/{id}', [ClientController::class,'edit_car']);
    Route::get('/delete_car/{id}', [ClientController::class,'delete_car']);
    Route::post('/post_park', [ClientController::class,'post_park']);
    Route::get('/park_history', [ClientController::class,'park_history']);
    Route::get('/generate_park_report', [ClientController::class,'generatePDF'])->name('pdf.generate');
    Route::get('/my_payments', [ClientController::class,'my_payments']);
    Route::get('/contact', [ClientController::class,'contact']);
});

Route::get('/finish_setting_up_your_profile', [HomeController::class,'set_up_account_page']);

Route::get('/post_set_account', [HomeController::class,'post_set_account']);

Route::get('/post_renew_sub', [HomeController::class,'post_renew_sub']);

Route::get('/choose_plan', [HomeController::class,'choose_plan']);

Route::get('/plan_has_expired', [HomeController::class,'expired_plan']);

Route::get('/thank_you', [HomeController::class,'thank_you']);

Route::post('/post_message', [HomeController::class,'post_message']);

Route::post('/check-booking-availability', [HomeController::class,'checkAvailability']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
