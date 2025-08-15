<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\EducationController;
use App\Http\Controllers\Admin\SkillsController;
use App\Http\Controllers\Admin\ProjectsController;
use App\Http\Controllers\Admin\ContactController;

// Authentication Routes
Route::middleware(['guest'])->group(function () {
    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');

    Route::get('/regi', function () {
        return view('auth.regi');
    })->name('register');

    Route::post('/login', [AuthenticationController::class, 'login']);
    Route::post('/regi', [AuthenticationController::class, 'regi'])->name('regi');
});

// Admin Routes (Protected)
Route::middleware(['auth'])->prefix('admin')->group(function () {
    // View Routes
    Route::get('/home', [HomeController::class, 'index'])->name('admin.home');
    Route::get('/about', [AboutController::class, 'index'])->name('admin.about');
    Route::get('/education', [EducationController::class, 'index'])->name('admin.education');
    Route::get('/skills', [SkillsController::class, 'index'])->name('admin.skills');
    Route::get('/projects', [ProjectsController::class, 'index'])->name('admin.projects');
    Route::get('/contact', [ContactController::class, 'index'])->name('admin.contact');

    // Update Routes
    Route::post('/about/update', [AboutController::class, 'update'])->name('admin.about.update');
    Route::post('/education/store', [EducationController::class, 'store'])->name('admin.education.store');
    Route::post('/skills/store', [SkillsController::class, 'store'])->name('admin.skills.store');
    Route::post('/projects/store', [ProjectsController::class, 'store'])->name('admin.projects.store');
});

// Public Routes
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/education', function () {
    return view('education');
})->name('education');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/skills', function () {
    return view('skills');
})->name('skills');

