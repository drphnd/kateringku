<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/restaurant', function () {
    return view('restaurant');
});

Route::get('/fusion', function () {
    return view('fusion');
});

Route::get('/orderstatus', function () {
    return view('orderstatus');
});