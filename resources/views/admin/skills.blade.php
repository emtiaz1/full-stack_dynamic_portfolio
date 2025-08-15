@extends('admin.dashboard')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-lg">
    <h1 class="text-2xl font-bold mb-6">Manage Skills</h1>
    
    <form action="{{ route('admin.skills.store') }}" method="POST" class="space-y-4 mb-8">
        @csrf
        
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium mb-2">Skill Name</label>
                <input type="text" name="name" class="w-full p-2 border rounded">
            </div>
            
            <div>
                <label class="block text-sm font-medium mb-2">Proficiency (%)</label>
                <input type="number" name="proficiency" min="0" max="100" class="w-full p-2 border rounded">
            </div>
        </div>
        
        <button type="submit" class="bg-indigo-500 text-white px-4 py-2 rounded hover:bg-indigo-600">
            Add Skill
        </button>
    </form>
</div>
@endsection