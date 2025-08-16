<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::first();
        return view('admin.about', compact('about'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:255',
            'degree' => 'nullable|string|max:255',
            'experience' => 'nullable|string|max:255',
            'freelance' => 'nullable|string|max:255',
            'skills' => 'nullable|array',
            'experiences' => 'nullable|array',
        ]);

        // Ensure empty arrays if not present
        $data['skills'] = $data['skills'] ?? [];
        $data['experiences'] = $data['experiences'] ?? [];

        $about = About::first();
        if (!$about) {
            $about = About::create($data);
        } else {
            $about->update($data);
        }
        return back()->with('success', 'About section updated successfully!');
    }
}
