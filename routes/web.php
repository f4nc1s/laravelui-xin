<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('blank', function () {
    return view('blank');
});

Route::get('profile', function () {
    return view('pages.profile');
})->name('profile');


// Route for Digital Storage
Route::get('digital-storage/manage', function () {
    return view('pages.digital-storage.manage');
})->name('digital.manage');

Route::get('digital-storage/store', function () {
    return view('pages.digital-storage.store');
})->name('digital.store');

// Route for Estate Planning Account Summary
Route::get('estate-planning/account-summary', function () {
    return view('pages.estate-planning.as-estate');
})->name('account.summary');

// Route for Will Creation and Management in the Estate
Route::get('estate-planning/will/create', function () {
    return view('pages.estate-planning.create');
})->name('will.create');

Route::get('estate-planning/will/manage', function () {
    return view('pages.estate-planning.manage-estate');
})->name('will.manage');

// Route for Adding Beneficiaries
Route::get('estate-planning/beneficiary/add', function () {
    return view('pages.estate-planning.beneficiaries');
})->name('beneficiary.add');

// Route for Adding/Declaring Assets
Route::get('declare', function () {
    return view('pages.estate-planning.declaration');
})->name('declare-asset');

// Route for Authentication
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

//Test
Route::get('wills', function () {
    return view('pages.estate-planning.will');
});
Route::get('addNewWill', function () {
    return view('pages.estate-planning.addNewWill');
})->name('addNewWill');

//Test
Route::get('trust', function () {
    return view('pages.estate-planning.trust');
});
Route::get('create-trust', function () {
    return view('pages.estate-planning.trust-create');
})->name('trust.create');
Route::get('trust/view', function () {
    return view('pages.estate-planning.trust-view');
})->name('trust.view');
