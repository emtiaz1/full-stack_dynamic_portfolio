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
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            margin-bottom: 30px;
            transition: all 0.3s ease;
            height: 100%;
        }
        
        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
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
            background: rgba(0,0,0,0.7);
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
        <div class="col-lg-4 col-md-6">
            <div class="project-card">
                <div class="project-image">
                    <img src="https://via.placeholder.com/600x400/4361ee/ffffff?text=E-Commerce+Platform" alt="E-Commerce Platform">
                    <div class="project-overlay">
                        <a href="#" class="project-link"><i class="fas fa-link"></i></a>
                        <a href="#" class="project-link"><i class="fab fa-github"></i></a>
                    </div>
                </div>
                <div class="project-content">
                    <div class="project-category">Web Development</div>
                    <h3 class="project-title">E-Commerce Platform</h3>
                    <p>A fully functional e-commerce platform with product catalog, cart functionality, and payment integration.</p>
                    <div class="project-tech">
                        <span class="tech-tag">Laravel</span>
                        <span class="tech-tag">MySQL</span>
                        <span class="tech-tag">JavaScript</span>
                        <span class="tech-tag">Bootstrap</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-6">
            <div class="project-card">
                <div class="project-image">
                    <img src="https://via.placeholder.com/600x400/3f37c9/ffffff?text=Dashboard+UI+Design" alt="Dashboard UI Design">
                    <div class="project-overlay">
                        <a href="#" class="project-link"><i class="fas fa-link"></i></a>
                        <a href="#" class="project-link"><i class="fab fa-github"></i></a>
                    </div>
                </div>
                <div class="project-content">
                    <div class="project-category">UI/UX Design</div>
                    <h3 class="project-title">Dashboard UI Design</h3>
                    <p>A clean and intuitive dashboard interface design for a SaaS application with data visualization.</p>
                    <div class="project-tech">
                        <span class="tech-tag">Figma</span>
                        <span class="tech-tag">Adobe XD</span>
                        <span class="tech-tag">UI/UX</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-6">
            <div class="project-card">
                <div class="project-image">
                    <img src="https://via.placeholder.com/600x400/4cc9f0/ffffff?text=Portfolio+Website" alt="Portfolio Website">
                    <div class="project-overlay">
                        <a href="#" class="project-link"><i class="fas fa-link"></i></a>
                        <a href="#" class="project-link"><i class="fab fa-github"></i></a>
                    </div>
                </div>
                <div class="project-content">
                    <div class="project-category">Web Development</div>
                    <h3 class="project-title">Portfolio Website</h3>
                    <p>A dynamic portfolio website built with Laravel to showcase projects and skills.</p>
                    <div class="project-tech">
                        <span class="tech-tag">HTML5</span>
                        <span class="tech-tag">CSS3</span>
                        <span class="tech-tag">Laravel</span>
                        <span class="tech-tag">JavaScript</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-6">
            <div class="project-card">
                <div class="project-image">
                    <img src="https://via.placeholder.com/600x400/3a0ca3/ffffff?text=Fitness+Tracker+App" alt="Fitness Tracker App">
                    <div class="project-overlay">
                        <a href="#" class="project-link"><i class="fas fa-link"></i></a>
                        <a href="#" class="project-link"><i class="fab fa-github"></i></a>
                    </div>
                </div>
                <div class="project-content">
                    <div class="project-category">Mobile App</div>
                    <h3 class="project-title">Fitness Tracker App</h3>
                    <p>A mobile application to track workouts, nutrition, and fitness progress with data visualization.</p>
                    <div class="project-tech">
                        <span class="tech-tag">Flutter</span>
                        <span class="tech-tag">Firebase</span>
                        <span class="tech-tag">Dart</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-6">
            <div class="project-card">
                <div class="project-image">
                    <img src="https://via.placeholder.com/600x400/4361ee/ffffff?text=Blog+Platform" alt="Blog Platform">
                    <div class="project-overlay">
                        <a href="#" class="project-link"><i class="fas fa-link"></i></a>
                        <a href="#" class="project-link"><i class="fab fa-github"></i></a>
                    </div>
                </div>
                <div class="project-content">
                    <div class="project-category">Web Development</div>
                    <h3 class="project-title">Blog Platform</h3>
                    <p>A full-featured blog platform with content management, user authentication, and responsive design.</p>
                    <div class="project-tech">
                        <span class="tech-tag">PHP</span>
                        <span class="tech-tag">MySQL</span>
                        <span class="tech-tag">Bootstrap</span>
                        <span class="tech-tag">jQuery</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-6">
            <div class="project-card">
                <div class="project-image">
                    <img src="https://via.placeholder.com/600x400/3f37c9/ffffff?text=Mobile+App+UI" alt="Mobile App UI">
                    <div class="project-overlay">
                        <a href="#" class="project-link"><i class="fas fa-link"></i></a>
                        <a href="#" class="project-link"><i class="fab fa-github"></i></a>
                    </div>
                </div>
                <div class="project-content">
                    <div class="project-category">UI/UX Design</div>
                    <h3 class="project-title">Mobile App UI Kit</h3>
                    <p>A comprehensive UI kit for mobile applications with over 100 components and screens.</p>
                    <div class="project-tech">
                        <span class="tech-tag">Figma</span>
                        <span class="tech-tag">Sketch</span>
                        <span class="tech-tag">UI Design</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@endsection
