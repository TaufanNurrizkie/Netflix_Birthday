<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {


    return view('home');
});

Route::get('/gallery', function() {
    $images = [
        'Luna.jpg',
        'Luna2.jpg',
        'Luna3.jpg',
        'Luna4.jpg',
        'Luna5.jpg',
        'Luna6.jpg',
        'Luna7.jpg',
        'Luna8.jpg',
        'Luna9.jpg',
        'Luna10.jpg',
        'Luna11.jpg',
        'Luna12.jpg',
    ];

    return view('gallery', compact('images'));
})->name('gallrey');