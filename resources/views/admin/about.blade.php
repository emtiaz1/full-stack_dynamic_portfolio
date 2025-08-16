@extends('admin.dashboard')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-6">Edit About Section</h1>

        <form action="{{ route('admin.about.update') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-medium mb-2">Title</label>
                <input type="text" name="title" class="w-full p-2 border rounded"
                    value="{{ old('title', $about->title ?? '') }}">
            </div>
            <div>
                <label class="block text-sm font-medium mb-2">Description</label>
                <textarea name="description" rows="4"
                    class="w-full p-2 border rounded">{{ old('description', $about->description ?? '') }}</textarea>
            </div>
            <div>
                <label class="block text-sm font-medium mb-2">Name</label>
                <input type="text" name="name" class="w-full p-2 border rounded"
                    value="{{ old('name', $about->name ?? '') }}">
            </div>
            <div>
                <label class="block text-sm font-medium mb-2">Email</label>
                <input type="email" name="email" class="w-full p-2 border rounded"
                    value="{{ old('email', $about->email ?? '') }}">
            </div>
            <div>
                <label class="block text-sm font-medium mb-2">Phone</label>
                <input type="text" name="phone" class="w-full p-2 border rounded"
                    value="{{ old('phone', $about->phone ?? '') }}">
            </div>
            <div>
                <label class="block text-sm font-medium mb-2">Degree</label>
                <input type="text" name="degree" class="w-full p-2 border rounded"
                    value="{{ old('degree', $about->degree ?? '') }}">
            </div>
            <div>
                <label class="block text-sm font-medium mb-2">Experience</label>
                <input type="text" name="experience" class="w-full p-2 border rounded"
                    value="{{ old('experience', $about->experience ?? '') }}">
            </div>
            <div>
                <label class="block text-sm font-medium mb-2">Freelance</label>
                <input type="text" name="freelance" class="w-full p-2 border rounded"
                    value="{{ old('freelance', $about->freelance ?? '') }}">
            </div>
            <!-- Dynamic Skills -->
            <div>
                <label class="block text-sm font-medium mb-2">Skills</label>
                <div id="skills-list">
                    @php
                        $skills = old('skills', isset($about->skills) ? (is_array($about->skills) ? $about->skills : explode(',', $about->skills)) : ['']);
                    @endphp
                    @foreach($skills as $i => $skill)
                        <div class="flex mb-2 skill-row">
                            <input type="text" name="skills[]" class="w-full p-2 border rounded" value="{{ $skill }}">
                            <button type="button"
                                class="ml-2 px-2 py-1 bg-red-500 text-white rounded remove-skill">&times;</button>
                        </div>
                    @endforeach
                </div>
                <button type="button" id="add-skill" class="mt-2 px-3 py-1 bg-green-500 text-white rounded">Add
                    Skill</button>
            </div>

            <!-- Dynamic Experiences -->
            <div>
                <label class="block text-sm font-medium mb-2">Experiences</label>
                <div id="experiences-list">
                    @php
                        $experiences = old('experiences', isset($about->experiences) ? (is_array($about->experiences) ? $about->experiences : json_decode($about->experiences, true)) : [['title' => '', 'company' => '', 'years' => '', 'desc' => '']]);
                    @endphp
                    @foreach($experiences as $i => $exp)
                        <div class="border p-3 mb-2 rounded experience-row bg-gray-50">
                            <div class="flex mb-2">
                                <input type="text" name="experiences[{{ $i }}][title]" placeholder="Title"
                                    class="w-1/4 p-2 border rounded mr-2" value="{{ $exp['title'] ?? '' }}">
                                <input type="text" name="experiences[{{ $i }}][company]" placeholder="Company"
                                    class="w-1/4 p-2 border rounded mr-2" value="{{ $exp['company'] ?? '' }}">
                                <input type="text" name="experiences[{{ $i }}][years]" placeholder="Years"
                                    class="w-1/4 p-2 border rounded mr-2" value="{{ $exp['years'] ?? '' }}">
                                <button type="button"
                                    class="px-2 py-1 bg-red-500 text-white rounded remove-experience">&times;</button>
                            </div>
                            <textarea name="experiences[{{ $i }}][desc]" placeholder="Description"
                                class="w-full p-2 border rounded">{{ $exp['desc'] ?? '' }}</textarea>
                        </div>
                    @endforeach
                </div>
                <button type="button" id="add-experience" class="mt-2 px-3 py-1 bg-green-500 text-white rounded">Add
                    Experience</button>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                Update About Section
            </button>
        </form>
    </div>

    <script>
        // Skills
        document.getElementById('add-skill').addEventListener('click', function () {
            const list = document.getElementById('skills-list');
            const div = document.createElement('div');
            div.className = 'flex mb-2 skill-row';
            div.innerHTML = `<input type="text" name="skills[]" class="w-full p-2 border rounded" value="">
                    <button type="button" class="ml-2 px-2 py-1 bg-red-500 text-white rounded remove-skill">&times;</button>`;
            list.appendChild(div);
        });
        document.getElementById('skills-list').addEventListener('click', function (e) {
            if (e.target.classList.contains('remove-skill')) {
                e.target.parentElement.remove();
            }
        });

        // Experiences
        document.getElementById('add-experience').addEventListener('click', function () {
            const list = document.getElementById('experiences-list');
            const idx = list.children.length;
            const div = document.createElement('div');
            div.className = 'border p-3 mb-2 rounded experience-row bg-gray-50';
            div.innerHTML = `
                    <div class="flex mb-2">
                        <input type="text" name="experiences[${idx}][title]" placeholder="Title" class="w-1/4 p-2 border rounded mr-2" value="">
                        <input type="text" name="experiences[${idx}][company]" placeholder="Company" class="w-1/4 p-2 border rounded mr-2" value="">
                        <input type="text" name="experiences[${idx}][years]" placeholder="Years" class="w-1/4 p-2 border rounded mr-2" value="">
                        <button type="button" class="px-2 py-1 bg-red-500 text-white rounded remove-experience">&times;</button>
                    </div>
                    <textarea name="experiences[${idx}][desc]" placeholder="Description" class="w-full p-2 border rounded"></textarea>
                `;
            list.appendChild(div);
        });
        document.getElementById('experiences-list').addEventListener('click', function (e) {
            if (e.target.classList.contains('remove-experience')) {
                e.target.closest('.experience-row').remove();
            }
        });
    </script>
@endsection