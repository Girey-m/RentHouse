<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/catalog', function() {
    return view('catalog');
})->name('catalog');

Route::get('/for-owners', function() {
    return view('for-owners');
})->name('for-owners');

Route::get('/how-it-works', function() {
    return view('how-it-works');
})->name('how-it-works');
