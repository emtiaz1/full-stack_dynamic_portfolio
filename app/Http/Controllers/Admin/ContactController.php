<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact = \App\Models\Contact::first();
        return view('admin.contact', compact('contact'));
    }

    public function store(Request $request)
    {
        $data = $request->only(['address', 'email', 'phone', 'facebook', 'github', 'x', 'linkedin']);
        \App\Models\Contact::truncate();
        \App\Models\Contact::create($data);
        return back()->with('success', 'Contact information updated!');
    }
}
