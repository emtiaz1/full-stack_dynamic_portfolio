<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('admin.about');
    }

    public function update(Request $request)
    {
        // Validation and update logic here
        return back()->with('success', 'About section updated successfully!');
    }
}
