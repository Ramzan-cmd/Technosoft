<?php

use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

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
Route::get('/custom', function () {
    return view('custom');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    })->name('dashboard');

    Route::post('/logout', [RegistrationController::class, 'logout'])->name('logout');
});

Route::get('/login', [RegistrationController::class, 'showLogin'])->name('login');
Route::post('/login', [RegistrationController::class, 'login']);

Route::get('/register', [RegistrationController::class, 'showRegister'])->name('register');
Route::post('/register', [RegistrationController::class, 'register']);

Route::get('/forgetpassword',function(){
 return view('userlogin.forget');
})->name('forget');
Route::get('/driver-login',function(){
 return view('userlogin.driver-login');
})->name('driverlogin');
Route::get('/driver-register',function(){
 return view('userlogin.driver-register');
})->name('driver-register');

