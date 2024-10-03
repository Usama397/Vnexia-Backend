<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/work-site', function () {
    return view('work-site');
})->name('work-site');


Route::get('/work-site-details', function () {
    return view('work-site-details');
})->name('work-site-details');

Route::get('/notification', function () {
    return view('notification');
})->name('notification');

Route::get('/safety-guidelines', function () {
    return view('safety-guidelines');
})->name('safety-guidelines');

Route::get('/users', function () {
    return view('users');
})->name('users');


Route::get('/media', function () {
    return view('media');
})->name('media');

Route::get('/check-points', function () {
    return view('check-points');
})->name('check-points');