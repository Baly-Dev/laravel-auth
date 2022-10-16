<?php

use Illuminate\Support\Facades\Route;
Auth::routes();

Route::middleware('auth')
    ->namespace('Admin')
    ->name('admin.')
    ->prefix('admin')
    ->group(function () {
        Route::get('/', 'HomeController@dashboard')->name('dashboard');
});

Route::get('{any}', function () {
    return view('index');
})
->where('any', '.*')
->name('home');
