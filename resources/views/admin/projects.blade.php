@extends('admin.dashboard')

@section('content')
    <div class="container bg-white p-4 rounded shadow">
        <h1 class="h3 mb-4">Manage Projects</h1>
        <form action="{{ route('admin.projects.store') }}" method="POST" id="projects-form">
            @csrf
            <label class="form-label">Projects</label>
            <div id="projects-list">
                @php
                    $projectList = old('projects', isset($projects) ? (is_array($projects) ? $projects : (method_exists($projects, 'toArray') ? $projects->toArray() : [['category' => '', 'title' => '', 'description' => '', 'tags' => '', 'image' => '', 'githublink' => '']])) : [['category' => '', 'title' => '', 'description' => '', 'tags' => '', 'image' => '', 'githublink' => '']]);
                @endphp
                @foreach($projectList as $i => $project)
                    <div class="row mb-2 project-row g-2 align-items-center">
                        <div class="col-md-2"><input type="text" name="projects[{{ $i }}][category]" placeholder="Category"
                                class="form-control" value="{{ $project['category'] ?? $project->category ?? '' }}"></div>
                        <div class="col-md-2"><input type="text" name="projects[{{ $i }}][title]" placeholder="Title"
                                class="form-control" value="{{ $project['title'] ?? $project->title ?? '' }}"></div>
                        <div class="col-md-3"><input type="text" name="projects[{{ $i }}][description]"
                                placeholder="Description" class="form-control"
                                value="{{ $project['description'] ?? $project->description ?? '' }}"></div>
                        <div class="col-md-2"><input type="text" name="projects[{{ $i }}][tags]"
                                placeholder="Tags (comma separated)" class="form-control"
                                value="{{ is_array($project['tags'] ?? $project->tags ?? '') ? implode(',', $project['tags'] ?? $project->tags ?? []) : ($project['tags'] ?? $project->tags ?? '') }}">
                        </div>
                        <div class="col-md-1"><input type="text" name="projects[{{ $i }}][image]" placeholder="Image URL"
                                class="form-control" value="{{ $project['image'] ?? $project->image ?? '' }}"></div>
                        <div class="col-md-1"><input type="text" name="projects[{{ $i }}][githublink]" placeholder="GitHub Link"
                                class="form-control" value="{{ $project['githublink'] ?? $project->githublink ?? '' }}"></div>
                        <div class="col-md-1"><button type="button" class="btn btn-danger remove-project">&times;</button></div>
                    </div>
                @endforeach
            </div>
            <button type="button" id="add-project" class="btn btn-success mt-2">Add Project</button>
            <button type="submit" class="btn btn-primary mt-2">Save All</button>
        </form>
    </div>

    <script>
        document.getElementById('add-project').addEventListener('click', function () {
            const list = document.getElementById('projects-list');
            const idx = list.children.length;
            const div = document.createElement('div');
            div.className = 'row mb-2 project-row g-2 align-items-center';
            div.innerHTML = `
                    <div class="col-md-2"><input type="text" name="projects[${idx}][category]" placeholder="Category" class="form-control" value=""></div>
                    <div class="col-md-2"><input type="text" name="projects[${idx}][title]" placeholder="Title" class="form-control" value=""></div>
                    <div class="col-md-3"><input type="text" name="projects[${idx}][description]" placeholder="Description" class="form-control" value=""></div>
                    <div class="col-md-2"><input type="text" name="projects[${idx}][tags]" placeholder="Tags (comma separated)" class="form-control" value=""></div>
                    <div class="col-md-1"><input type="text" name="projects[${idx}][image]" placeholder="Image URL" class="form-control" value=""></div>
                    <div class="col-md-1"><input type="text" name="projects[${idx}][githublink]" placeholder="GitHub Link" class="form-control" value=""></div>
                    <div class="col-md-1"><button type="button" class="btn btn-danger remove-project">&times;</button></div>
                `;
            list.appendChild(div);
        });
        document.getElementById('projects-list').addEventListener('click', function (e) {
            if (e.target.classList.contains('remove-project')) {
                e.target.closest('.project-row').remove();
            }
        });
    </script>
@endsection