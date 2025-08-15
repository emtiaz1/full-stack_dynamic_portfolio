@extends('admin.dashboard')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-lg">
    <h1 class="text-2xl font-bold mb-6">Edit About Section</h1>
    
    <form action="{{ route('admin.about.update') }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')
        
        <div>
            <label class="block text-sm font-medium mb-2">Title</label>
            <input type="text" name="title" class="w-full p-2 border rounded" value="{{ old('title') }}">
        </div>
        
        <div>
            <label class="block text-sm font-medium mb-2">Description</label>
            <textarea name="description" rows="6" class="w-full p-2 border rounded">{{ old('description') }}</textarea>
        </div>
        
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            Update About Section
        </button>
    </form>
</div>
@endsection