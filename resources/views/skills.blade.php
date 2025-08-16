@extends('index')
@push('style')
    <title>Skills - Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary: #4361ee;
            --secondary: #3f37c9;
            --accent: #4cc9f0;
            --light: #f8f9fa;
            --dark: #212529;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--light);
            color: var(--dark);
        }

        .skills-section {
            padding: 5rem 0;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 3rem;
            text-align: center;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            width: 100px;
            height: 5px;
            background: linear-gradient(to right, var(--primary), var(--accent));
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 10px;
        }

        .skill-category {
            margin-bottom: 5rem;
        }

        .category-title {
            font-size: 1.8rem;
            margin-bottom: 2rem;
            color: var(--secondary);
            position: relative;
            display: inline-block;
        }

        .category-title::after {
            content: '';
            position: absolute;
            width: 40%;
            height: 3px;
            background: var(--accent);
            bottom: -8px;
            left: 0;
            border-radius: 5px;
        }

        .skill-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            height: 100%;
            border-top: 5px solid var(--primary);
        }

        .skill-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .skill-icon {
            font-size: 3rem;
            color: var(--primary);
            margin-bottom: 1rem;
        }

        .skill-name {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--dark);
        }

        .skill-level {
            display: flex;
            margin-top: 1rem;
        }

        .skill-level .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            margin-right: 5px;
            background-color: #e9ecef;
        }

        .skill-level .dot.filled {
            background-color: var(--primary);
        }

        .skill-card-body {
            padding: 2rem;
        }

        .skills-header {
            background: linear-gradient(135deg, #4361ee 0%, #3a0ca3 100%);
            padding: 4rem 0;
            margin-bottom: 4rem;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .skills-header .shape {
            position: absolute;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }

        .skills-header .shape-1 {
            width: 300px;
            height: 300px;
            top: -150px;
            right: -100px;
        }

        .skills-header .shape-2 {
            width: 200px;
            height: 200px;
            bottom: -100px;
            left: 50px;
        }
    </style>
@endpush

@section('main-content')
    <div class="skills-header">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="container">
            <h1 class="text-center display-4 fw-bold">My Skills & Expertise</h1>
            <p class="text-center fs-5 mt-3">A showcase of my technical abilities and competencies</p>
        </div>
    </div>


    <div class="skills-section">
        <div class="container">
            <div class="row g-4">
                @forelse($skills as $skill)
                    <div class="col-md-4 col-sm-6">
                        <div class="skill-card">
                            <div class="skill-card-body text-center">
                                <div class="skill-icon mb-2">
                                    @if($skill->logo)
                                        <img src="{{ $skill->logo }}" alt="{{ $skill->name }} logo"
                                            style="max-width:48px;max-height:48px;object-fit:contain;" loading="lazy">
                                    @else
                                        <i class="fas fa-star"></i>
                                    @endif
                                </div>
                                <h3 class="skill-name">{{ $skill->name }}</h3>
                                <p>{{ $skill->description }}</p>
                                <div class="skill-level">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <span class="dot{{ $i <= $skill->proficiency ? ' filled' : '' }}"></span>
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <p class="text-center">No skills found.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@endsection