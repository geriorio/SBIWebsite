<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/insights', function () {
    return view('insights');
})->name('insights');

Route::get('/career', function () {
    return view('career');
})->name('career');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
