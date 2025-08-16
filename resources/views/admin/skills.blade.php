@extends('admin.dashboard')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-6">Manage Skills</h1>

        <form action="{{ route('admin.skills.store') }}" method="POST" class="space-y-4 mb-8" id="skills-form">
            @csrf
            <label class="block text-sm font-medium mb-2">Skills</label>
            <div id="skills-list">
                @php
                    $skillList = old('skills', isset($skills) ? $skills->toArray() : [['name' => '', 'proficiency' => '']]);
                @endphp
                @foreach($skillList as $i => $skill)
                    <div class="flex mb-2 skill-row gap-2 flex-wrap">
                        <input type="text" name="skills[{{ $i }}][name]" placeholder="Skill Name"
                            class="w-1/4 p-2 border rounded" value="{{ $skill['name'] ?? $skill->name ?? '' }}">
                        <input type="text" name="skills[{{ $i }}][description]" placeholder="Description"
                            class="w-1/2 p-2 border rounded" value="{{ $skill['description'] ?? $skill->description ?? '' }}">
                        <input type="text" name="skills[{{ $i }}][logo]" placeholder="Logo Image URL"
                            class="w-1/4 p-2 border rounded" value="{{ $skill['logo'] ?? $skill->logo ?? '' }}">
                        <input type="number" name="skills[{{ $i }}][proficiency]" placeholder="Proficiency (%)" min="0"
                            max="100" class="w-1/6 p-2 border rounded"
                            value="{{ $skill['proficiency'] ?? $skill->proficiency ?? '' }}">
                        <button type="button" class="ml-2 px-2 py-1 bg-red-500 text-white rounded remove-skill">&times;</button>
                    </div>
                @endforeach
            </div>
            <button type="button" id="add-skill" class="mt-2 px-3 py-1 bg-green-500 text-white rounded">Add Skill</button>
            <button type="submit" class="bg-indigo-500 text-white px-4 py-2 rounded hover:bg-indigo-600">Save All</button>
        </form>
    </div>

    <script>
        document.getElementById('add-skill').addEventListener('click', function () {
            const list = document.getElementById('skills-list');
            const idx = list.children.length;
            const div = document.createElement('div');
            div.className = 'flex mb-2 skill-row gap-2 flex-wrap';
            div.innerHTML = `
                            <input type="text" name="skills[${idx}][name]" placeholder="Skill Name" class="w-1/4 p-2 border rounded" value="">
                            <input type="text" name="skills[${idx}][description]" placeholder="Description" class="w-1/2 p-2 border rounded" value="">
                            <input type="text" name="skills[${idx}][logo]" placeholder="Logo Image URL" class="w-1/4 p-2 border rounded" value="">
                            <input type="number" name="skills[${idx}][proficiency]" placeholder="Proficiency (%)" min="0" max="100" class="w-1/6 p-2 border rounded" value="">
                            <button type="button" class="ml-2 px-2 py-1 bg-red-500 text-white rounded remove-skill">&times;</button>
                        `;
            list.appendChild(div);
        });
        document.getElementById('skills-list').addEventListener('click', function (e) {
            if (e.target.classList.contains('remove-skill')) {
                e.target.parentElement.remove();
            }
        });
    </script>
@endsection