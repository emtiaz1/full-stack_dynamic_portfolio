<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function index()
    {
        $educations = \App\Models\Education::all();
        return view('admin.education', compact('educations'));
    }

    public function store(Request $request)
    {
        $educations = $request->input('educations', []);
        // Remove all existing records
        \App\Models\Education::truncate();
        // Insert new ones
        foreach ($educations as $edu) {
            if (
                !empty($edu['type']) ||
                !empty($edu['name']) ||
                !empty($edu['institute']) ||
                !empty($edu['year']) ||
                !empty($edu['grade'])
            ) {
                \App\Models\Education::create([
                    'type' => $edu['type'] ?? '',
                    'name' => $edu['name'] ?? '',
                    'institute' => $edu['institute'] ?? '',
                    'year' => $edu['year'] ?? '',
                    'grade' => $edu['grade'] ?? '',
                ]);
            }
        }
        return back()->with('success', 'Education entries updated successfully!');
    }
    public function edit($id)
    {
        $education = \App\Models\Education::findOrFail($id);
        $educations = \App\Models\Education::all();
        return view('admin.education', compact('education', 'educations'));
    }

    public function destroy($id)
    {
        $education = \App\Models\Education::findOrFail($id);
        $education->delete();
        return back()->with('success', 'Education entry deleted successfully!');
    }
}
