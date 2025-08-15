<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        return view('admin.projects');
    }

    public function store(Request $request)
    {
        // Validation and store logic here
        return back()->with('success', 'Project added successfully!');
    }
}
