<?php

use Illuminate\Support\Facades\Route;



Route::prefix('/login')->group(function () {
    Route::get('/', 'App\Http\Controllers\LoginController@showLoginForm')->name('login');
    Route::post('/', 'App\Http\Controllers\LoginController@login')->name('login.auth');
    Route::get('/logout', 'App\Http\Controllers\LoginController@logout')->name('login.logout');
});


Route::prefix('/')->middleware('AdminLogin')->group(function () {
    Route::get('/', 'App\Http\Controllers\MainController@index')->name('home');
    Route::resource('/repairs', 'App\Http\Controllers\RepairsController');
    Route::resource('/factor', 'App\Http\Controllers\FactorController');
    Route::resource('/bimeh', 'App\Http\Controllers\BimehController');
    Route::resource('/apple', 'App\Http\Controllers\AppleController');
    Route::resource('/gmail', 'App\Http\Controllers\GmailController');
    Route::resource('/vpn', 'App\Http\Controllers\VpnController');


    // Route::resource('apps', 'App\Http\Controllers\admin\AppController')->except(['show']);







});

