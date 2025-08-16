@extends('admin.dashboard')

@section('content')
    <div class="container bg-white p-4 rounded shadow">
        <h1 class="h3 mb-4">Edit About Section</h1>
        <form action="{{ route('admin.about.update') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $about->title ?? '') }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" rows="4"
                    class="form-control">{{ old('description', $about->description ?? '') }}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $about->name ?? '') }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email', $about->email ?? '') }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control" value="{{ old('phone', $about->phone ?? '') }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Degree</label>
                <input type="text" name="degree" class="form-control" value="{{ old('degree', $about->degree ?? '') }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Experience</label>
                <input type="text" name="experience" class="form-control"
                    value="{{ old('experience', $about->experience ?? '') }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Freelance</label>
                <input type="text" name="freelance" class="form-control"
                    value="{{ old('freelance', $about->freelance ?? '') }}">
            </div>
            <!-- Dynamic Skills -->
            <div class="mb-3">
                <label class="form-label">Skills</label>
                <div id="skills-list">
                    @php
                        $skills = old('skills', isset($about->skills) ? (is_array($about->skills) ? $about->skills : explode(',', $about->skills)) : ['']);
                    @endphp
                    @foreach($skills as $i => $skill)
                        <div class="input-group mb-2 skill-row">
                            <input type="text" name="skills[]" class="form-control" value="{{ $skill }}">
                            <button type="button" class="btn btn-danger remove-skill">&times;</button>
                        </div>
                    @endforeach
                </div>
                <button type="button" id="add-skill" class="btn btn-success mt-2">Add Skill</button>
            </div>
            <!-- Dynamic Experiences -->
            <div class="mb-3">
                <label class="form-label">Experiences</label>
                <div id="experiences-list">
                    @php
                        $experiences = old('experiences', isset($about->experiences) ? (is_array($about->experiences) ? $about->experiences : json_decode($about->experiences, true)) : [['title' => '', 'company' => '', 'years' => '', 'desc' => '']]);
                    @endphp
                    @foreach($experiences as $i => $exp)
                        <div class="card p-3 mb-2 experience-row">
                            <div class="row mb-2">
                                <div class="col-md-3"><input type="text" name="experiences[{{ $i }}][title]" placeholder="Title"
                                        class="form-control" value="{{ $exp['title'] ?? '' }}"></div>
                                <div class="col-md-3"><input type="text" name="experiences[{{ $i }}][company]"
                                        placeholder="Company" class="form-control" value="{{ $exp['company'] ?? '' }}"></div>
                                <div class="col-md-3"><input type="text" name="experiences[{{ $i }}][years]" placeholder="Years"
                                        class="form-control" value="{{ $exp['years'] ?? '' }}"></div>
                                <div class="col-md-2"><button type="button"
                                        class="btn btn-danger remove-experience">&times;</button></div>
                            </div>
                            <textarea name="experiences[{{ $i }}][desc]" placeholder="Description"
                                class="form-control">{{ $exp['desc'] ?? '' }}</textarea>
                        </div>
                    @endforeach
                </div>
                <button type="button" id="add-experience" class="btn btn-success mt-2">Add Experience</button>
            </div>
            <button type="submit" class="btn btn-primary">Update About Section</button>
        </form>
    </div>

    <script>
        // Skills
        document.getElementById('add-skill').addEventListener('click', function () {
            const list = document.getElementById('skills-list');
            const div = document.createElement('div');
            div.className = 'input-group mb-2 skill-row';
            div.innerHTML = `<input type="text" name="skills[]" class="form-control" value=""><button type="button" class="btn btn-danger remove-skill">&times;</button>`;
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
            div.className = 'card p-3 mb-2 experience-row';
            div.innerHTML = `
                    <div class="row mb-2">
                        <div class="col-md-3"><input type="text" name="experiences[${idx}][title]" placeholder="Title" class="form-control" value=""></div>
                        <div class="col-md-3"><input type="text" name="experiences[${idx}][company]" placeholder="Company" class="form-control" value=""></div>
                        <div class="col-md-3"><input type="text" name="experiences[${idx}][years]" placeholder="Years" class="form-control" value=""></div>
                        <div class="col-md-2"><button type="button" class="btn btn-danger remove-experience">&times;</button></div>
                    </div>
                    <textarea name="experiences[${idx}][desc]" placeholder="Description" class="form-control"></textarea>
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