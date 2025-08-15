@extends('admin.dashboard')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-lg">
    <h1 class="text-2xl font-bold mb-6">Manage Education</h1>
    
    <form action="{{ route('admin.education.store') }}" method="POST" class="space-y-4 mb-8">
        @csrf
        
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium mb-2">Degree/Certificate</label>
                <input type="text" name="degree" class="w-full p-2 border rounded">
            </div>
            
            <div>
                <label class="block text-sm font-medium mb-2">Institution</label>
                <input type="text" name="institution" class="w-full p-2 border rounded">
            </div>
            
            <div>
                <label class="block text-sm font-medium mb-2">Year</label>
                <input type="text" name="year" class="w-full p-2 border rounded">
            </div>
            
            <div>
                <label class="block text-sm font-medium mb-2">GPA/Score</label>
                <input type="text" name="gpa" class="w-full p-2 border rounded">
            </div>
        </div>
        
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
            Add Education
        </button>
    </form>
</div>
@endsection