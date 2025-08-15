<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index()
    {
        return view('admin.skills');
    }

    public function store(Request $request)
    {
        // Validation and store logic here
        return back()->with('success', 'Skill added successfully!');
    }
}
