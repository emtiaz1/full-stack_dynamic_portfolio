@extends('admin.dashboard')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-lg flex flex-col items-center">
        <h1 class="text-2xl font-bold mb-4">Welcome to Admin Panel</h1>
        <div class="w-full flex justify-center">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="p-4 bg-blue-50 rounded-lg">
                    <h2 class="font-bold text-lg mb-2">Quick Actions</h2>
                    <ul class="space-y-2">
                        <li><a href="{{ route('admin.about') }}" class="text-blue-600 hover:underline">Edit About
                                Section</a></li>
                        <li><a href="{{ route('admin.skills') }}" class="text-blue-600 hover:underline">Manage Skills</a>
                        </li>
                        <li><a href="{{ route('admin.projects') }}" class="text-blue-600 hover:underline">Update
                                Projects</a></li>
                    </ul>
                </div>
                <div class="p-4 bg-green-50 rounded-lg flex flex-col justify-center items-center">
                    <h2 class="font-bold text-lg mb-1">Recent Updates</h2>
                    <ul class="space-y-2">
                        <li>Last login: {{ now()->format('M d, Y h:i A') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection