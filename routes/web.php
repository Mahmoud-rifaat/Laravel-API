<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    // return [
    //     "status" => true,
    //     "message" => 'Hello to /about route!'
    // ];

    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
