<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('admin.contact');
    }

    public function store(Request $request)
    {
        // Validation and store logic here
        return back()->with('success', 'Message sent successfully!');
    }
}
