@extends('index')

@push('style')
    <title>My Education</title>
    <link rel="stylesheet" href="{{ asset('assets/css/education.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
@endpush

@section('main-content')
<div class="education-container">
    <h2 class="section-title">Education</h2>

    <!-- SSC -->
    <div class="edu-card">
        <div class="edu-img">
            <img src="{{ asset('assets/images/school.jpg') }}" alt="SSC School">
        </div>
        <div class="edu-info">
            <h3><i class="bi bi-mortarboard-fill me-2"></i>SSC</h3>
            <p><strong>Institution:</strong> Mawna ML High School</p>
            <p><strong>Result:</strong> GPA 5.00</p>
            <p><strong>Board:</strong> Dhaka</p>
            <p><strong>Passing Year:</strong> 2018</p>
        </div>
    </div>

    <!-- HSC -->
    <div class="edu-card">
        <div class="edu-img">
            <img src="{{ asset('assets/images/college.jpg') }}" alt="HSC College">
        </div>
        <div class="edu-info">
            <h3><i class="bi bi-mortarboard-fill me-2"></i>HSC</h3>
            <p><strong>Institution:</strong> Gazipur Cantonment College</p>
            <p><strong>Result:</strong> GPA 5.00</p>
            <p><strong>Board:</strong> Dhaka</p>
            <p><strong>Passing Year:</strong> 2020</p>
        </div>
    </div>

    <!-- University -->
    <div class="edu-card">
        <div class="edu-img">
            <img src="{{ asset('assets/images/university.jpg') }}" alt="University">
        </div>
        <div class="edu-info">
            <h3><i class="bi bi-building-fill me-2"></i>University</h3>
            <p>Now I'm a <strong>fourth-year student</strong> in the <strong>Computer Science and Engineering</strong> undergraduate program at <strong>Daffodil International University</strong>.</p>
        </div>
    </div>
</div>
@endsection
