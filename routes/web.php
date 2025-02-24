<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware([\App\Http\Middleware\AdminRole::class])->group(function () {
    Route::get('/admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('dashboard');

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


