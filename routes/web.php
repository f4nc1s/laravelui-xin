<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('blank', function () {
    return view('blank');
});
Route::get('signin', function () {
    return view('auth.signin');
})->name('signin');
Route::get('signup', function () {
    return view('auth.signup');
})->name('signup');
Route::get('resetpass', function () {
    return view('auth.resetpass');
})->name('resetpass');
Route::get('otp', function () {
    return view('auth.otp');
});
