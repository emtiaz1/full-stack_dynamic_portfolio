@extends('admin.dashboard')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-6">Manage Education</h1>

        <form action="{{ route('admin.education.store') }}" method="POST" class="space-y-4 mb-8" id="education-form">
            @csrf
            <label class="block text-sm font-medium mb-2">Education Entries</label>
            <div id="educations-list">
                @php
                    $eduList = old('educations', isset($educations) ? $educations->toArray() : [['type' => '', 'name' => '', 'institute' => '', 'year' => '', 'grade' => '']]);
                @endphp
                @foreach($eduList as $i => $edu)
                    <div class="border p-3 mb-2 rounded education-row bg-gray-50">
                        <div class="flex mb-2 flex-wrap gap-2">
                            <input type="text" name="educations[{{ $i }}][type]" placeholder="Type"
                                class="w-1/5 p-2 border rounded mr-2" value="{{ $edu['type'] ?? $edu->type ?? '' }}">
                            <input type="text" name="educations[{{ $i }}][name]" placeholder="Degree/Certificate"
                                class="w-1/5 p-2 border rounded mr-2" value="{{ $edu['name'] ?? $edu->name ?? '' }}">
                            <input type="text" name="educations[{{ $i }}][institute]" placeholder="Institution"
                                class="w-1/5 p-2 border rounded mr-2" value="{{ $edu['institute'] ?? $edu->institute ?? '' }}">
                            <input type="text" name="educations[{{ $i }}][year]" placeholder="Year"
                                class="w-1/5 p-2 border rounded mr-2" value="{{ $edu['year'] ?? $edu->year ?? '' }}">
                            <input type="text" name="educations[{{ $i }}][grade]" placeholder="GPA/Score"
                                class="w-1/5 p-2 border rounded mr-2" value="{{ $edu['grade'] ?? $edu->grade ?? '' }}">
                            <button type="button"
                                class="px-2 py-1 bg-red-500 text-white rounded remove-education">&times;</button>
                        </div>
                    </div>
                @endforeach
            </div>
            <button type="button" id="add-education" class="mt-2 px-3 py-1 bg-green-500 text-white rounded">Add
                Education</button>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Save All</button>
        </form>
    </div>

    <script>
        document.getElementById('add-education').addEventListener('click', function () {
            const list = document.getElementById('educations-list');
            const idx = list.children.length;
            const div = document.createElement('div');
            div.className = 'border p-3 mb-2 rounded education-row bg-gray-50';
            div.innerHTML = `
                    <div class="flex mb-2 flex-wrap gap-2">
                        <input type="text" name="educations[${idx}][type]" placeholder="Type" class="w-1/5 p-2 border rounded mr-2" value="">
                        <input type="text" name="educations[${idx}][name]" placeholder="Degree/Certificate" class="w-1/5 p-2 border rounded mr-2" value="">
                        <input type="text" name="educations[${idx}][institute]" placeholder="Institution" class="w-1/5 p-2 border rounded mr-2" value="">
                        <input type="text" name="educations[${idx}][year]" placeholder="Year" class="w-1/5 p-2 border rounded mr-2" value="">
                        <input type="text" name="educations[${idx}][grade]" placeholder="GPA/Score" class="w-1/5 p-2 border rounded mr-2" value="">
                        <button type="button" class="px-2 py-1 bg-red-500 text-white rounded remove-education">&times;</button>
                    </div>
                `;
            list.appendChild(div);
        });
        document.getElementById('educations-list').addEventListener('click', function (e) {
            if (e.target.classList.contains('remove-education')) {
                e.target.closest('.education-row').remove();
            }
        });
    </script>
@endsection