<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/work-site', function () {
    return view('work-site');
});
Route::get('/work-site-details', function () {
    return view('work-site-details');
});

Route::get('/notification', function () {
    return view('notification');
});

Route::get('/safety-guidelines', function () {
    return view('safety-guidelines');
});

Route::get('/users', function () {
    return view('users');
});
Route::get('/media', function () {
    return view('media');
});

Route::get('/check-points', function () {
    return view('check-points');
});