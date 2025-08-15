@extends('admin.dashboard')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-lg">
    <h1 class="text-2xl font-bold mb-6">Manage Projects</h1>
    
    <form action="{{ route('admin.projects.store') }}" method="POST" class="space-y-4 mb-8" enctype="multipart/form-data">
        @csrf
        
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium mb-2">Project Title</label>
                <input type="text" name="title" class="w-full p-2 border rounded">
            </div>
            
            <div>
                <label class="block text-sm font-medium mb-2">Technologies Used</label>
                <input type="text" name="technologies" class="w-full p-2 border rounded">
            </div>
            
            <div class="col-span-2">
                <label class="block text-sm font-medium mb-2">Description</label>
                <textarea name="description" rows="4" class="w-full p-2 border rounded"></textarea>
            </div>
            
            <div>
                <label class="block text-sm font-medium mb-2">Project Image</label>
                <input type="file" name="image" class="w-full p-2 border rounded">
            </div>
        </div>
        
        <button type="submit" class="bg-purple-500 text-white px-4 py-2 rounded hover:bg-purple-600">
            Add Project
        </button>
    </form>
</div>
@endsection