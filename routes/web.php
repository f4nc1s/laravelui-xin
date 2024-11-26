<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('blank', function () {
    return view('blank');
});

Route::get('estate-planning/account-summary', function () {
    return view('pages.estate-planning.as-estate');
});

// New Route for Will Creation
Route::get('estate-planning/will/create', function () {
    return view('pages.estate-planning.create');
});
