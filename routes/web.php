<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware([\App\Http\Middleware\AdminRole::class])->group(function () {
//DASHBOARD
    Route::get('/admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('dashboard');
// ADMIN PROFILE
    Route::get('/admin/profile', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('profile');
    Route::post('/admin/profile', [App\Http\Controllers\Admin\UserController::class, 'update'])->name('profile.edit');

//COUNTRY
    Route::get('/admin/country', [App\Http\Controllers\Admin\CountryController::class, 'index'])->name('country.index');
    Route::get('/admin/country/create', [App\Http\Controllers\Admin\CountryController::class, 'create'])->name('country.create');
    Route::post('/admin/country', [App\Http\Controllers\Admin\CountryController::class, 'store'])->name('country.store');
    Route::get('/admin/country/{country}', [App\Http\Controllers\Admin\CountryController::class, 'show'])->name('country.show');
    Route::put('/admin/country/{country}', [App\Http\Controllers\Admin\CountryController::class, 'update'])->name('country.update');
    Route::delete('/admin/country/{country}', [App\Http\Controllers\Admin\CountryController::class, 'destroy'])->name('country.destroy');
});


// WEBSITE

Route::get('/grabfood',[App\Http\Controllers\website\OptionController::class,'index'])->name('grabfood');
Route::get('/grabfood/option/login',[App\Http\Controllers\website\OptionController::class,'login'])->name('option.login');
Route::get('/grabfood/option/register',[App\Http\Controllers\website\OptionController::class,'register'])->name('option.register');



//USER LOGIN
Route::get('/grabfood/user/login',[App\Http\Controllers\website\LoginController::class,'index'])->name('user.login');
Route::post('/grabfood/user/login',[App\Http\Controllers\website\LoginController::class,'login'])->name('user.login-submit');

//USER LOGOUT
Route::get('/grabfood/user/logout',[App\Http\Controllers\website\LogoutController::class,'logout'])->name('user.logout');

//USER REGISTER
Route::get('/grabfood/user/register',[App\Http\Controllers\website\RegisterController::class,'index'])->name('user.register');
Route::post('/grabfood/user/register',[App\Http\Controllers\website\RegisterController::class,'store'])->name('user.register-store');

//USER ACCOUNT
Route::get('/grabfood/user/account',[App\Http\Controllers\website\AccountController::class,'index'])->name('user.account-index');
Route::put('/grabfood/user/account',[App\Http\Controllers\website\AccountController::class,'update'])->name('user.account-update');
Route::delete('grabfood/user/account',[App\Http\Controllers\website\AccountController::class,'destroy'])->name('user.account-destroy');







