<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index()
    {
        $skills = \App\Models\Skill::all();
        return view('admin.skills', compact('skills'));
    }

    public function store(Request $request)
    {
        $skills = $request->input('skills', []);
        \App\Models\Skill::truncate();
        foreach ($skills as $skill) {
            if (!empty($skill['name']) || !empty($skill['proficiency'])) {
                \App\Models\Skill::create([
                    'name' => $skill['name'] ?? '',
                    'description' => $skill['description'] ?? '',
                    'logo' => $skill['logo'] ?? '',
                    'proficiency' => $skill['proficiency'] ?? 0,
                ]);
            }
        }
        return back()->with('success', 'Skills updated successfully!');
    }
}
