@extends('admin.dashboard')

@section('content')
    <div class="container bg-white p-4 rounded shadow">
        <h1 class="h3 mb-4">Manage Education</h1>
        <form action="{{ route('admin.education.store') }}" method="POST" id="education-form">
            @csrf
            <label class="form-label">Education Entries</label>
            <div id="educations-list">
                @php
                    $eduList = old('educations', isset($educations) ? (is_array($educations) ? $educations : (method_exists($educations, 'toArray') ? $educations->toArray() : [['type' => '', 'name' => '', 'institute' => '', 'year' => '', 'grade' => '']])) : [['type' => '', 'name' => '', 'institute' => '', 'year' => '', 'grade' => '']]);
                @endphp
                @foreach($eduList as $i => $edu)
                    <div class="row mb-2 education-row g-2 align-items-center">
                        <div class="col-md-2"><input type="text" name="educations[{{ $i }}][type]" placeholder="Type"
                                class="form-control" value="{{ $edu['type'] ?? $edu->type ?? '' }}"></div>
                        <div class="col-md-3"><input type="text" name="educations[{{ $i }}][name]"
                                placeholder="Degree/Certificate" class="form-control"
                                value="{{ $edu['name'] ?? $edu->name ?? '' }}"></div>
                        <div class="col-md-3"><input type="text" name="educations[{{ $i }}][institute]"
                                placeholder="Institution" class="form-control"
                                value="{{ $edu['institute'] ?? $edu->institute ?? '' }}"></div>
                        <div class="col-md-2"><input type="text" name="educations[{{ $i }}][year]" placeholder="Year"
                                class="form-control" value="{{ $edu['year'] ?? $edu->year ?? '' }}"></div>
                        <div class="col-md-1"><input type="text" name="educations[{{ $i }}][grade]" placeholder="GPA/Score"
                                class="form-control" value="{{ $edu['grade'] ?? $edu->grade ?? '' }}"></div>
                        <div class="col-md-1"><button type="button" class="btn btn-danger remove-education">&times;</button>
                        </div>
                    </div>
                @endforeach
            </div>
            <button type="button" id="add-education" class="btn btn-success mt-2">Add Education</button>
            <button type="submit" class="btn btn-primary mt-2">Save All</button>
        </form>
    </div>

    <script>
        document.getElementById('add-education').addEventListener('click', function () {
            const list = document.getElementById('educations-list');
            const idx = list.children.length;
            const div = document.createElement('div');
            div.className = 'row mb-2 education-row g-2 align-items-center';
            div.innerHTML = `
                    <div class="col-md-2"><input type="text" name="educations[${idx}][type]" placeholder="Type" class="form-control" value=""></div>
                    <div class="col-md-3"><input type="text" name="educations[${idx}][name]" placeholder="Degree/Certificate" class="form-control" value=""></div>
                    <div class="col-md-3"><input type="text" name="educations[${idx}][institute]" placeholder="Institution" class="form-control" value=""></div>
                    <div class="col-md-2"><input type="text" name="educations[${idx}][year]" placeholder="Year" class="form-control" value=""></div>
                    <div class="col-md-1"><input type="text" name="educations[${idx}][grade]" placeholder="GPA/Score" class="form-control" value=""></div>
                    <div class="col-md-1"><button type="button" class="btn btn-danger remove-education">&times;</button></div>
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