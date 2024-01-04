<?php

use Illuminate\Support\Facades\Route;




// Route::get('/login', 'App\Http\Controllers\MainController@login')->name('login');


Route::prefix('/login')->group(function () {
    Route::get('/', 'App\Http\Controllers\LoginController@showLoginForm')->name('login');
    Route::post('/', 'App\Http\Controllers\LoginController@login')->name('login.auth');
    Route::get('/logout', 'App\Http\Controllers\LoginController@logout')->name('login.logout');
});


Route::prefix('/')->middleware('AdminLogin')->group(function () {
    Route::get('/', 'App\Http\Controllers\MainController@index')->name('home');
});

