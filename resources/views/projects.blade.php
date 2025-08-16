@extends('index')
@push('style')
    <title>Projects - Portfolio</title>
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

        .projects-header {
            background: linear-gradient(135deg, #4361ee 0%, #3a0ca3 100%);
            padding: 5rem 0;
            color: white;
            margin-bottom: 4rem;
            position: relative;
            overflow: hidden;
        }

        .projects-header h1 {
            font-size: 3rem;
            font-weight: 700;
        }

        .projects-header p {
            font-size: 1.2rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
        }


        .project-card {
            border-radius: 15px;
            overflow: hidden;
            background: white;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            transition: all 0.3s ease;
            height: 100%;
        }

        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        .project-image {
            position: relative;
            overflow: hidden;
            height: 200px;
        }

        .project-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .project-card:hover .project-image img {
            transform: scale(1.1);
        }

        .project-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .project-card:hover .project-overlay {
            opacity: 1;
        }

        .project-link {
            width: 45px;
            height: 45px;
            background: white;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            margin: 0 5px;
            color: var(--primary);
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .project-link:hover {
            background: var(--primary);
            color: white;
            transform: translateY(-3px);
        }

        .project-content {
            padding: 1.5rem;
        }

        .project-title {
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 0.8rem;
            color: var(--dark);
        }

        .project-category {
            font-size: 0.85rem;
            color: var(--primary);
            font-weight: 600;
            margin-bottom: 0.8rem;
        }

        .project-tech {
            margin-top: 1rem;
        }

        .tech-tag {
            display: inline-block;
            padding: 3px 12px;
            background-color: rgba(67, 97, 238, 0.1);
            color: var(--primary);
            border-radius: 20px;
            font-size: 0.8rem;
            margin-right: 5px;
            margin-bottom: 5px;
            font-weight: 500;
        }

        .shapes {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 0;
        }

        .shape {
            position: absolute;
            background-color: rgba(255, 255, 255, 0.1);
        }

        .shape-1 {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            top: -50px;
            right: 10%;
        }

        .shape-2 {
            width: 300px;
            height: 300px;
            border-radius: 50%;
            bottom: -150px;
            left: -100px;
        }
    </style>
@endpush

@section('main-content')
    <div class="projects-header">
        <div class="shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
        </div>
        <div class="container text-center">
            <h1>My Projects</h1>
            <p>Explore my portfolio of web development projects showcasing my skills and creativity</p>
        </div>
    </div>


    <div class="container">
        <div class="row g-4">
            @forelse($projects as $project)
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="project-card">
                        <div class="project-image">
                            <img src="{{ $project->image ?? 'https://via.placeholder.com/600x400/cccccc/ffffff?text=No+Image' }}"
                                alt="{{ $project->title }}">
                            <div class="project-overlay">
                                @if($project->githublink)
                                    <a href="{{ $project->githublink }}" class="project-link" target="_blank"><i
                                            class="fab fa-github"></i></a>
                                @endif
                            </div>
                        </div>
                        <div class="project-content">
                            <div class="project-category">{{ $project->category }}</div>
                            <h3 class="project-title">{{ $project->title }}</h3>
                            <p>{{ $project->description }}</p>
                            <div class="project-tech">
                                @if(is_array($project->tags))
                                    @foreach($project->tags as $tag)
                                        <span class="tech-tag">{{ $tag }}</span>
                                    @endforeach
                                @elseif($project->tags)
                                    @foreach(json_decode($project->tags, true) ?? [] as $tag)
                                        <span class="tech-tag">{{ $tag }}</span>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 d-flex justify-content-center">
                    <div class="p-4" style="max-width: 500px;">
                        <div class="card shadow border-0" style="border-radius: 15px;">
                            <div class="card-body text-center">
                                <h4 class="mb-2 text-primary"><i class="fas fa-folder-open fa-2x mb-2"></i></h4>
                                <h4 class="mb-2">No projects found.</h4>
                                <p class="text-muted">Projects you add will appear here. Use the admin panel to add your first
                                    project!</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@endsection