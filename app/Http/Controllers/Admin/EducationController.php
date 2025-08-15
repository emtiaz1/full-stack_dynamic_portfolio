<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function index()
    {
        return view('admin.education');
    }

    public function store(Request $request)
    {
        // Validation and store logic here
        return back()->with('success', 'Education entry added successfully!');
    }
}
