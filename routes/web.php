<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $jobs = Job::all();
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::all(),
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    return view('job', [
        'job' => Job::find($id)
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
