@extends('index')

@push('style')
    <title>Education - Portfolio</title>
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
            background-color: #f5f8fa;
            color: var(--dark);
        }

        .education-header {
            background: linear-gradient(135deg, #4361ee 0%, #3a0ca3 100%);
            padding: 5rem 0;
            color: white;
            margin-bottom: 4rem;
            position: relative;
            overflow: hidden;
        }

        .education-header h1 {
            font-size: 3rem;
            font-weight: 700;
        }

        .education-header p {
            font-size: 1.2rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
        }

        .timeline {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem 0;
        }

        .timeline::after {
            content: '';
            position: absolute;
            width: 6px;
            background-color: var(--primary);
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -3px;
            border-radius: 3px;
        }

        .timeline-item {
            padding: 10px 40px;
            position: relative;
            background-color: inherit;
            width: 50%;
            box-sizing: border-box;
        }

        .timeline-item::after {
            content: '';
            position: absolute;
            width: 25px;
            height: 25px;
            right: -12px;
            background-color: white;
            border: 4px solid var(--accent);
            top: 15px;
            border-radius: 50%;
            z-index: 1;
        }

        .left {
            left: 0;
        }

        .right {
            left: 50%;
        }

        .right::after {
            left: -12px;
        }

        .edu-content {
            padding: 20px 30px;
            background-color: white;
            position: relative;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .edu-content:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .edu-year {
            background-color: var(--primary);
            color: white;
            display: inline-block;
            padding: 5px 15px;
            font-size: 0.9rem;
            font-weight: 600;
            border-radius: 20px;
            margin-bottom: 10px;
        }

        .edu-degree {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 5px;
            color: var(--dark);
        }

        .edu-school {
            font-size: 1.1rem;
            color: var(--secondary);
            margin-bottom: 15px;
        }

        .edu-gpa {
            margin-top: 15px;
            font-weight: 600;
        }

        .edu-gpa span {
            font-size: 1.2rem;
            color: var(--primary);
        }
    </style>
@endpush

@section('main-content')
    <div class="education-container">
        <div class="education-header text-center">
            <h1 class="section-title">My Education</h1>
            <p>Welcome to my education section. Here you can find my academic background and achievements.</p>
        </div>

        <div class="timeline m-3">
            @if(isset($educations) && count($educations))
                @foreach($educations as $i => $edu)
                    <div class="timeline-item {{ $i % 2 == 0 ? 'left' : 'right' }}">
                        <div class="edu-content">
                            <span class="edu-year">{{ $edu->year }}</span>
                            <h3 class="edu-degree">{{ $edu->name }}</h3>
                            <p class="edu-school">{{ $edu->institute }}</p>
                            <p class="edu-gpa">GPA: <span>{{ $edu->grade }}</span></p>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="timeline-item left">
                    <div class="edu-content">
                        <h4>No education records found.</h4>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection