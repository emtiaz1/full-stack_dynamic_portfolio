@extends('index')

@push('style')
    <title>My Skills</title>
    <link rel="stylesheet" href="{{ asset('assets/css/skills.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
@endpush

@section('main-content')
<div class="skills-container">
    <h2 class="section-title">My Skills</h2>

    <!-- Microsoft Office Skills -->
    <div class="skill-card">
        <div class="skill-header office">
            <i class="bi bi-microsoft"></i> Microsoft Office Skills
        </div>
        <ul class="skill-list">
            <li><i class="bi bi-file-earmark-word-fill text-primary"></i> MS Word</li>
            <li><i class="bi bi-file-earmark-ppt-fill text-danger"></i> MS PowerPoint</li>
            <li><i class="bi bi-file-earmark-excel-fill text-success"></i> MS Excel</li>
        </ul>
    </div>

    <!-- Programming Languages Skills -->
    <div class="skill-card">
        <div class="skill-header programming">
            <i class="bi bi-code-slash"></i> Programming Languages
        </div>
        <ul class="skill-list">
            <li><i class="bi bi-c-circle"></i> C</li>
            <li><i class="bi bi-filetype-cpp"></i> C++</li>
            <li><i class="bi bi-cup-hot-fill"></i> Java</li>
            <li><i class="bi bi-filetype-py"></i> Python</li>
        </ul>
    </div>

    <!-- Web Development Skills -->
    <div class="skill-card">
        <div class="skill-header web">
            <i class="bi bi-globe2"></i> Web Development Skills
        </div>
        <ul class="skill-list">
            <li><i class="bi bi-filetype-html"></i> HTML</li>
            <li><i class="bi bi-filetype-css"></i> CSS</li>
        </ul>
    </div>
</div>
@endsection
