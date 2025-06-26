@extends('index')

@push('style')
    <title>Projects - Portfolio</title>
    <link rel="stylesheet" href="{{ asset('assets/css/projects.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
@endpush

@section('main-content')
<div class="projects-container">
    <h2 class="section-title">Projects</h2>
    
    <div class="project-card">
        <div class="project-icon"><i class="bi bi-person-badge-fill"></i></div>
        <div class="project-info">
            <h4>Personal Portfolio</h4>
            <p>Built with Laravel, HTML, CSS.</p>
        </div>
    </div>

    <div class="project-card">
        <div class="project-icon"><i class="bi bi-bank"></i></div>
        <div class="project-info">
            <h4>Bank Management System</h4>
            <p>Java OOP-based project with account handling and basic transaction features.</p>
        </div>
    </div>

    <div class="project-card">
        <div class="project-icon"><i class="bi bi-cash-coin"></i></div>
        <div class="project-info">
            <h4>Money Manager</h4>
            <p>A money tracking application built with Python to monitor income & expenses.</p>
        </div>
    </div>
</div>
@endsection
