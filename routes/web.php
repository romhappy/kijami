<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.home');
})->name('app_home');


Route::get('/login', function () {
    return view('login.login');
})->name('app_login');
