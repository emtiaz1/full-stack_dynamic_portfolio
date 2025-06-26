<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/education', function () {
    return view('education');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/skills', function () {
    return view('skills');
});
