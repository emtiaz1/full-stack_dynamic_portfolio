<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = \App\Models\Project::all();
        return view('admin.projects', compact('projects'));
    }

    public function store(Request $request)
    {
        $projects = $request->input('projects', []);
        \App\Models\Project::truncate();
        foreach ($projects as $project) {
            if (!empty($project['title']) || !empty($project['category'])) {
                \App\Models\Project::create([
                    'category' => $project['category'] ?? '',
                    'title' => $project['title'] ?? '',
                    'description' => $project['description'] ?? '',
                    'tags' => isset($project['tags']) ? array_map('trim', explode(',', $project['tags'])) : [],
                    'image' => $project['image'] ?? '',
                    'githublink' => $project['githublink'] ?? '',
                ]);
            }
        }
        return back()->with('success', 'Projects updated successfully!');
    }
}
