<?php

use App\Http\Controllers\DriverController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PassengerController;
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




// --- Passenger (Default) Routes ---
// Note: We name these distinctively to avoid confusion with the generic ones if used.
Route::get('/login', [RegistrationController::class, 'showPassengerLogin'])->name('login'); // Passenger login (replaces showLogin)
Route::get('/register', [RegistrationController::class, 'showPassengerRegister'])->name('register'); // Passenger register (replaces showRegister)

// --- Driver Specific Routes ---
// These use separate view methods as requested.
Route::get('/driver-login', [RegistrationController::class, 'showDriverLogin'])->name('driverlogin');
Route::get('/driver-register', [RegistrationController::class, 'showDriverRegister'])->name('driver-register');


// --- POST Handlers (Generic & Role-Aware) ---
// These handle the form submissions from ALL login/register forms.
Route::post('/login', [RegistrationController::class, 'login']);
Route::post('/register', [RegistrationController::class, 'register']);


// --- Forget Password Route ---
Route::get('/forgetpassword', function () {
    return view('userlogin.forget');
})->name('forget');


/*
|--------------------------------------------------------------------------
| Authenticated Routes
|--------------------------------------------------------------------------
| This group applies 'auth' middleware and is where the logout handler lives.
*/

Route::middleware('auth')->group(function () {
    // Logout route (requires POST request)
    Route::post('/logout', [RegistrationController::class, 'logout'])->name('logout');
});






/*
|--------------------------------------------------------------------------
| Passenger Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:passenger'])->prefix('passenger')->group(function () {
    // Dashboard/Main page for finding rides
    Route::get('/find-rides', [PassengerController::class, 'findRides'])->name('passenger.dashboard');
    
    // Profile Management
    Route::get('/profile', [PassengerController::class, 'profile'])->name('passenger.profile');
    Route::post('/profile/update', [PassengerController::class, 'updateProfile'])->name('passenger.profile.update');

    // Other Passenger Features
    Route::get('/history', [PassengerController::class, 'history'])->name('passenger.history');
    Route::get('/support', [PassengerController::class, 'support'])->name('passenger.support');
    Route::post('/support/submit', [PassengerController::class, 'submitSupport'])->name('passenger.support.submit');
});


/*
|--------------------------------------------------------------------------
| Driver Routes
|--------------------------------------------------------------------------
| Note: These should ideally use DriverController::class for consistency.
*/

Route::middleware(['auth', 'role:driver'])->prefix('driver')->group(function () {
    // Assuming a main route for the dashboard
    
    
    // Feature Routes
    Route::get('/availability', [DriverController::class, 'availability'])->name('driver.available');
    Route::get('/setfare', [DriverController::class, 'setFare'])->name('driver.setfare');
    Route::get('/review', [DriverController::class, 'review'])->name('driver.review');
    Route::get('/profile', [DriverController::class, 'profile'])->name('driver.profile');
    
    // If you need the registration page, it must be outside this auth/role group 
    // if the driver is not yet approved/logged in. If it's a post-login view:
    Route::get('/registration', [DriverController::class, 'registration'])->name('registration'); 
});


