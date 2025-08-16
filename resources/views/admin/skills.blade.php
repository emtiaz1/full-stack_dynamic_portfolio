@extends('admin.dashboard')

@section('content')
    <div class="container bg-white p-4 rounded shadow">
        <h1 class="h3 mb-4">Manage Skills</h1>
        <form action="{{ route('admin.skills.store') }}" method="POST" id="skills-form">
            @csrf
            <label class="form-label">Skills</label>
            <div id="skills-list">
                @php
                    $skillList = old('skills', isset($skills) ? $skills->toArray() : [['name' => '', 'proficiency' => '']]);
                @endphp
                @foreach($skillList as $i => $skill)
                    <div class="row mb-2 skill-row g-2 align-items-center">
                        <div class="col-md-3"><input type="text" name="skills[{{ $i }}][name]" placeholder="Skill Name"
                                class="form-control" value="{{ $skill['name'] ?? $skill->name ?? '' }}"></div>
                        <div class="col-md-4"><input type="text" name="skills[{{ $i }}][description]" placeholder="Description"
                                class="form-control" value="{{ $skill['description'] ?? $skill->description ?? '' }}"></div>
                        <div class="col-md-3"><input type="text" name="skills[{{ $i }}][logo]" placeholder="Logo Image URL"
                                class="form-control" value="{{ $skill['logo'] ?? $skill->logo ?? '' }}"></div>
                        <div class="col-md-1"><input type="number" name="skills[{{ $i }}][proficiency]"
                                placeholder="Proficiency (%)" min="0" max="100" class="form-control"
                                value="{{ $skill['proficiency'] ?? $skill->proficiency ?? '' }}"></div>
                        <div class="col-md-1"><button type="button" class="btn btn-danger remove-skill">&times;</button></div>
                    </div>
                @endforeach
            </div>
            <button type="button" id="add-skill" class="btn btn-success mt-2">Add Skill</button>
            <button type="submit" class="btn btn-primary mt-2">Save All</button>
        </form>
    </div>

    <script>
        document.getElementById('add-skill').addEventListener('click', function () {
            const list = document.getElementById('skills-list');
            const idx = list.children.length;
            const div = document.createElement('div');
            div.className = 'row mb-2 skill-row g-2 align-items-center';
            div.innerHTML = `
                    <div class="col-md-3"><input type="text" name="skills[${idx}][name]" placeholder="Skill Name" class="form-control" value=""></div>
                    <div class="col-md-4"><input type="text" name="skills[${idx}][description]" placeholder="Description" class="form-control" value=""></div>
                    <div class="col-md-3"><input type="text" name="skills[${idx}][logo]" placeholder="Logo Image URL" class="form-control" value=""></div>
                    <div class="col-md-1"><input type="number" name="skills[${idx}][proficiency]" placeholder="Proficiency (%)" min="0" max="100" class="form-control" value=""></div>
                    <div class="col-md-1"><button type="button" class="btn btn-danger remove-skill">&times;</button></div>
                `;
            list.appendChild(div);
        });
        document.getElementById('skills-list').addEventListener('click', function (e) {
            if (e.target.classList.contains('remove-skill')) {
                e.target.closest('.skill-row').remove();
            }
        });
    </script>
@endsection