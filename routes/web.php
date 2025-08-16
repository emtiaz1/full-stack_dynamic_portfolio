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
use App\Http\Controllers\Admin\MessagesController;



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

    Route::post('/contact', [ContactController::class, 'store'])->name('admin.contact.store');

    // Messages Routes
    Route::get('/messages', [MessagesController::class, 'index'])->name('admin.messages');
    Route::delete('/messages/{id}', [MessagesController::class, 'destroy'])->name('admin.messages.delete');

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

use App\Models\Contact;
Route::get('/contact', function () {
    $contact = Contact::first();
    return view('contact', compact('contact'));
})->name('contact');

use App\Models\Education;
Route::get('/education', function () {
    $educations = Education::orderBy('year', 'desc')->get();
    return view('education', compact('educations'));
})->name('education');

use App\Models\Project;
Route::get('/projects', function () {
    $projects = Project::orderBy('id', 'desc')->get();
    return view('projects', compact('projects'));
})->name('projects');

use App\Models\Skill;
Route::get('/skills', function () {
    $skills = Skill::orderBy('proficiency', 'desc')->get();
    return view('skills', compact('skills'));
})->name('skills');

// Public POST route for contact form messages
Route::post('/contact/message', [MessagesController::class, 'store'])->name('contact.message');

// Google Authentication Routes
Route::get('auth/google', [GoogleAuthController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [GoogleAuthController::class, 'handleGoogleCallback']);
Route::get('/admin/logout', [GoogleAuthController::class, 'logout'])->name('admin.logout');

