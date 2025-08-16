<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\EducationController;
use App\Http\Controllers\Admin\SkillsController;
use App\Http\Controllers\Admin\ProjectsController;
use App\Http\Controllers\Admin\ContactController;


// Admin Routes (Protected by session)
Route::prefix('admin')->group(function () {
    // Admin login page (not protected)
    Route::get('/login', function () {
        return view('auth.login');
    })->name('admin.login');

    // Protected admin routes - check session
    Route::get('/home', function () {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login')->with('error', 'Please login to access admin area.');
        }
        return app(HomeController::class)->index();
    })->name('admin.home');

    Route::get('/about', function () {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login')->with('error', 'Please login to access admin area.');
        }
        return app(AboutController::class)->index();
    })->name('admin.about');

    Route::get('/education', function () {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login')->with('error', 'Please login to access admin area.');
        }
        return app(EducationController::class)->index();
    })->name('admin.education');

    Route::get('/skills', function () {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login')->with('error', 'Please login to access admin area.');
        }
        return app(SkillsController::class)->index();
    })->name('admin.skills');

    Route::get('/projects', function () {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login')->with('error', 'Please login to access admin area.');
        }
        return app(ProjectsController::class)->index();
    })->name('admin.projects');

    Route::get('/contact', function () {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login')->with('error', 'Please login to access admin area.');
        }
        return app(ContactController::class)->index();
    })->name('admin.contact');

    // Update Routes
    Route::post('/about/update', function () {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login')->with('error', 'Please login to access admin area.');
        }
        return app(AboutController::class)->update(request());
    })->name('admin.about.update');


    Route::post('/education/store', function () {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login')->with('error', 'Please login to access admin area.');
        }
        return app(EducationController::class)->store(request());
    })->name('admin.education.store');

    Route::get('/education/{id}/edit', function ($id) {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login')->with('error', 'Please login to access admin area.');
        }
        return app(EducationController::class)->edit($id);
    })->name('admin.education.edit');

    Route::delete('/education/{id}/delete', function ($id) {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login')->with('error', 'Please login to access admin area.');
        }
        return app(EducationController::class)->destroy($id);
    })->name('admin.education.delete');

    Route::post('/skills/store', function () {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login')->with('error', 'Please login to access admin area.');
        }
        return app(SkillsController::class)->store(request());
    })->name('admin.skills.store');

    Route::post('/projects/store', function () {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login')->with('error', 'Please login to access admin area.');
        }
        return app(ProjectsController::class)->store(request());
    })->name('admin.projects.store');
});

// Public Routes
Route::get('/', function () {
    return view('welcome');
})->name('home');

use App\Models\About;
Route::get('/about', function () {
    $about = About::first();
    return view('about', compact('about'));
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

use App\Models\Education;
Route::get('/education', function () {
    $educations = Education::orderBy('year', 'desc')->get();
    return view('education', compact('educations'));
})->name('education');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/skills', function () {
    return view('skills');
})->name('skills');


// Google Authentication Routes
Route::get('auth/google', [GoogleAuthController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [GoogleAuthController::class, 'handleGoogleCallback']);
Route::get('/admin/logout', [GoogleAuthController::class, 'logout'])->name('admin.logout');

