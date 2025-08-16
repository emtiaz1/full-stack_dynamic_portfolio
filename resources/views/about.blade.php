@extends('index')
@push('style')
    <title>About Me - Portfolio</title>
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

        .about-section {
            padding: 5rem 0;
        }

        .about-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .about-card:hover {
            transform: translateY(-10px);
        }

        .about-header {
            background: linear-gradient(135deg, #4361ee 0%, #3a0ca3 100%);
            padding: 2rem;
            color: white;
            position: relative;
        }

        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .about-content {
            padding: 2rem;
        }

        .section-title {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary);
            position: relative;
            display: inline-block;
            margin-bottom: 1.5rem;
        }

        .section-title::after {
            content: '';
            position: absolute;
            width: 50%;
            height: 4px;
            background: var(--accent);
            bottom: -10px;
            left: 0;
        }

        .info-item {
            margin-bottom: 1.5rem;
        }

        .info-label {
            font-weight: 600;
            color: var(--secondary);
        }

        .skills-container {
            margin-top: 2rem;
        }

        .skill-item {
            margin-bottom: 1rem;
        }

        .skill-name {
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .skill-bar {
            height: 10px;
            background: #e9ecef;
            border-radius: 5px;
            overflow: hidden;
        }

        .skill-progress {
            height: 100%;
            background: linear-gradient(90deg, var(--primary), var(--accent));
            border-radius: 5px;
        }

        .timeline {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
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
        }

        .timeline-item {
            padding: 10px 40px;
            position: relative;
            background-color: inherit;
            width: 50%;
        }

        .timeline-item::after {
            content: '';
            position: absolute;
            width: 25px;
            height: 25px;
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

        .left::after {
            right: -13px;
        }

        .right::after {
            left: -13px;
        }

        .timeline-content {
            padding: 20px 30px;
            background-color: white;
            position: relative;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        @media screen and (max-width: 768px) {
            .timeline::after {
                left: 31px;
            }

            .timeline-item {
                width: 100%;
                padding-left: 70px;
                padding-right: 25px;
            }

            .timeline-item::after {
                left: 18px;
            }

            .left::after,
            .right::after {
                left: 18px;
            }

            .right {
                left: 0%;
            }
        }
    </style>
@endpush

@section('main-content')
    <div class="about-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="about-card mb-5">
                        <div class="about-header text-center">
                            <img src="{{ asset($about->profile_image ?? 'assets/images/profile.jpg') }}"
                                alt="Profile Picture" class="profile-img mb-3">
                            <h1>{{ $about->name ?? '' }}</h1>
                            <p class="mb-0">{{ $about->title ?? '' }}</p>
                        </div>
                        <div class="about-content">
                            <h2 class="section-title">About Me</h2>
                            <p>{{ $about->description ?? '' }}</p>

                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <div class="info-item">
                                        <span class="info-label">Name:</span> {{ $about->name ?? '' }}
                                    </div>
                                    <div class="info-item">
                                        <span class="info-label">Email:</span> {{ $about->email ?? '' }}
                                    </div>
                                    <div class="info-item">
                                        <span class="info-label">Phone:</span> {{ $about->phone ?? '' }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info-item">
                                        <span class="info-label">Degree:</span> {{ $about->degree ?? '' }}
                                    </div>
                                    <div class="info-item">
                                        <span class="info-label">Experience:</span> {{ $about->experience ?? '' }}
                                    </div>
                                    <div class="info-item">
                                        <span class="info-label">Freelance:</span> {{ $about->freelance ?? '' }}
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="btn btn-primary mt-3">Download CV</a>
                        </div>
                    </div>

                    <div class="about-card mb-5">
                        <div class="about-content">
                            <h2 class="section-title">Skills</h2>
                            <div class="skills-container">
                                <div class="row">
                                    @if(!empty($about->skills))
                                        @foreach($about->skills as $skill)
                                            @php
                                                // Support both "Skill:Percent" and ["name"=>..., "percent"=>...]
                                                if (is_array($skill)) {
                                                    $skillName = $skill['name'] ?? $skill[0] ?? '';
                                                    $skillPercent = $skill['percent'] ?? $skill[1] ?? '';
                                                } else {
                                                    $parts = explode(':', $skill);
                                                    $skillName = $parts[0] ?? '';
                                                    $skillPercent = $parts[1] ?? '';
                                                }
                                            @endphp
                                            <div class="col-md-6">
                                                <div class="skill-item">
                                                    <div class="skill-name">{{ $skillName }} <span
                                                            class="float-end">{{ $skillPercent }}%</span></div>
                                                    <div class="skill-bar">
                                                        <div class="skill-progress" style="width: {{ $skillPercent }}%"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="about-card">
                        <div class="about-content">
                            <h2 class="section-title">Experience</h2>
                            <div class="timeline">
                                @if(!empty($about->experiences))
                                    @foreach($about->experiences as $i => $exp)
                                        <div class="timeline-item {{ $i % 2 == 0 ? 'left' : 'right' }}">
                                            <div class="timeline-content">
                                                <h3>{{ $exp['title'] ?? '' }}</h3>
                                                <h6>{{ ($exp['company'] ?? '') }} • {{ ($exp['years'] ?? '') }}</h6>
                                                <p>{{ $exp['desc'] ?? '' }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@endsection