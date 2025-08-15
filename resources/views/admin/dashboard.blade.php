<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-900 text-white flex flex-col p-6">
            <h2 class="text-2xl font-bold mb-8">Admin Panel</h2>
            <nav class="flex flex-col space-y-4">
                <a href="{{ route('admin.home') }}" class="hover:bg-gray-700 p-2 rounded">Home</a>
                <a href="{{ route('admin.about') }}" class="hover:bg-gray-700 p-2 rounded">About Me</a>
                <a href="{{ route('admin.education') }}" class="hover:bg-gray-700 p-2 rounded">Education</a>
                <a href="{{ route('admin.skills') }}" class="hover:bg-gray-700 p-2 rounded">Skills</a>
                <a href="{{ route('admin.projects') }}" class="hover:bg-gray-700 p-2 rounded">Projects</a>
                <a href="{{ route('admin.contact') }}" class="hover:bg-gray-700 p-2 rounded">Contact →</a>
            </nav>
        </aside>
        <!-- Main Content -->
        <main class="flex-1 p-8 overflow-y-auto">
            @yield('content')
        </main>
    </div>
</body>
</html>