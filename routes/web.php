<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//******** ADMIN

Route::prefix('admin')->group(function(){
    Route::get('dashboard',[App\Http\Controllers\admin\DashboardController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('profile',[App\Http\Controllers\admin\UserController::class, 'index'])->name('admin.profile');
    Route::post('profile',[App\Http\Controllers\admin\UserController::class, 'update'])->name('admin.profile-update');

    Route::get('customers',[App\Http\Controllers\admin\CustomerController::class, 'index'])->name('admin.customers');
    Route::delete('customers/{customer}',[App\Http\Controllers\admin\CustomerController::class, 'destroy'])->name('admin.customers-destroy');


    Route::get('managers', fn () => 'demo');
    Route::get('stores', fn () => 'demo');
    Route::get('reviews',fn() => 'demo');
    Route::get('products', fn () => 'demo');
    Route::get('customer-addresses', fn () => 'demo');
    Route::get('orders', fn () => 'demo');
    Route::get('categories', fn () => 'demo');
});

Route::prefix('manager')->group(function(){
    Route::get('dashboard', fn () => 'demo');
    Route::get('managers-list', fn () => 'demo');
    Route::get('account', fn () => 'demo');
    Route::get('stores', fn () => 'demo');
    Route::get('store/{store}/review', fn () => 'demo');
    Route::get('store/{store}/review/{review}/reply', fn () => 'demo');
    Route::get('products', fn () => 'demo');
    Route::get('orders', fn () => 'demo');
    Route::get('order-items', fn () => 'demo');
});

Route::prefix('grabfood')->group(function(){
    Route::get('account', fn () => 'demo');
    Route::get('addresses', fn () => 'demo');
    Route::get('history-order', fn () => 'demo');
    Route::get('search', fn () => 'demo'); // filter category , product_name
    Route::get('orders/{order}', fn () => 'demo');
    Route::get('stores/{store}', fn () => 'demo');
    Route::get('stores/{store}/reviews', fn () => 'demo');
    Route::get('stores/{store}/review', fn () => 'demo');// review

});


