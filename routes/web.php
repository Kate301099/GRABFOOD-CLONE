<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('dashboard');

Route::get('/admin/profile', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('profile');
Route::post('/admin/profile', [App\Http\Controllers\Admin\UserController::class, 'update'])->name('profile.edit');

//COUNTRY
Route::get('/admin/country', [App\Http\Controllers\Admin\CountryController::class, 'index'])->name('country.index');
Route::post('/admin/country', [App\Http\Controllers\Admin\CountryController::class, 'store'])->name('country.store');
Route::get('/admin/country/{id}', [App\Http\Controllers\Admin\CountryController::class, 'edit'])->name('country.edit');
Route::put('/admin/country/{id}', [App\Http\Controllers\Admin\CountryController::class, 'update'])->name('country.update');
Route::delete('/admin/country/{id}', [App\Http\Controllers\Admin\CountryController::class, 'destroy'])->name('country.destroy');

