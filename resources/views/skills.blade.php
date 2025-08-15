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
            <div class="skill-category">
                <h2 class="category-title">Frontend Development</h2>
                <div class="row g-4">
                    <div class="col-md-4 col-sm-6">
                        <div class="skill-card">
                            <div class="skill-card-body text-center">
                                <div class="skill-icon">
                                    <i class="fab fa-html5"></i>
                                </div>
                                <h3 class="skill-name">HTML5</h3>
                                <p>Semantic markup, accessibility, and modern web standards</p>
                                <div class="skill-level">
                                    <span class="dot filled"></span>
                                    <span class="dot filled"></span>
                                    <span class="dot filled"></span>
                                    <span class="dot filled"></span>
                                    <span class="dot filled"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="skill-card">
                            <div class="skill-card-body text-center">
                                <div class="skill-icon">
                                    <i class="fab fa-css3-alt"></i>
                                </div>
                                <h3 class="skill-name">CSS3</h3>
                                <p>Responsive design, animations, and modern layouts with flexbox and grid</p>
                                <div class="skill-level">
                                    <span class="dot filled"></span>
                                    <span class="dot filled"></span>
                                    <span class="dot filled"></span>
                                    <span class="dot filled"></span>
                                    <span class="dot"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="skill-card">
                            <div class="skill-card-body text-center">
                                <div class="skill-icon">
                                    <i class="fab fa-js"></i>
                                </div>
                                <h3 class="skill-name">JavaScript</h3>
                                <p>ES6+, DOM manipulation, async programming, and modern JS frameworks</p>
                                <div class="skill-level">
                                    <span class="dot filled"></span>
                                    <span class="dot filled"></span>
                                    <span class="dot filled"></span>
                                    <span class="dot filled"></span>
                                    <span class="dot"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="skill-category">
                <h2 class="category-title">Backend Development</h2>
                <div class="row g-4">
                    <div class="col-md-4 col-sm-6">
                        <div class="skill-card">
                            <div class="skill-card-body text-center">
                                <div class="skill-icon">
                                    <i class="fab fa-php"></i>
                                </div>
                                <h3 class="skill-name">PHP</h3>
                                <p>OOP, MVC architecture, and backend web development</p>
                                <div class="skill-level">
                                    <span class="dot filled"></span>
                                    <span class="dot filled"></span>
                                    <span class="dot filled"></span>
                                    <span class="dot filled"></span>
                                    <span class="dot"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="skill-card">
                            <div class="skill-card-body text-center">
                                <div class="skill-icon">
                                    <i class="fab fa-laravel"></i>
                                </div>
                                <h3 class="skill-name">Laravel</h3>
                                <p>Full-stack development with Laravel framework and its ecosystem</p>
                                <div class="skill-level">
                                    <span class="dot filled"></span>
                                    <span class="dot filled"></span>
                                    <span class="dot filled"></span>
                                    <span class="dot"></span>
                                    <span class="dot"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="skill-card">
                            <div class="skill-card-body text-center">
                                <div class="skill-icon">
                                    <i class="fas fa-database"></i>
                                </div>
                                <h3 class="skill-name">MySQL</h3>
                                <p>Database design, optimization, and advanced SQL queries</p>
                                <div class="skill-level">
                                    <span class="dot filled"></span>
                                    <span class="dot filled"></span>
                                    <span class="dot filled"></span>
                                    <span class="dot"></span>
                                    <span class="dot"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="skill-category">
                <h2 class="category-title">Tools & Others</h2>
                <div class="row g-4">
                    <div class="col-md-4 col-sm-6">
                        <div class="skill-card">
                            <div class="skill-card-body text-center">
                                <div class="skill-icon">
                                    <i class="fab fa-git-alt"></i>
                                </div>
                                <h3 class="skill-name">Git</h3>
                                <p>Version control, collaboration, and CI/CD workflows</p>
                                <div class="skill-level">
                                    <span class="dot filled"></span>
                                    <span class="dot filled"></span>
                                    <span class="dot filled"></span>
                                    <span class="dot filled"></span>
                                    <span class="dot"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="skill-card">
                            <div class="skill-card-body text-center">
                                <div class="skill-icon">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                                <h3 class="skill-name">Responsive Design</h3>
                                <p>Creating mobile-first, adaptive websites for all devices</p>
                                <div class="skill-level">
                                    <span class="dot filled"></span>
                                    <span class="dot filled"></span>
                                    <span class="dot filled"></span>
                                    <span class="dot filled"></span>
                                    <span class="dot filled"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="skill-card">
                            <div class="skill-card-body text-center">
                                <div class="skill-icon">
                                    <i class="fas fa-paint-brush"></i>
                                </div>
                                <h3 class="skill-name">UI/UX Design</h3>
                                <p>Creating user-centered interfaces and engaging experiences</p>
                                <div class="skill-level">
                                    <span class="dot filled"></span>
                                    <span class="dot filled"></span>
                                    <span class="dot filled"></span>
                                    <span class="dot"></span>
                                    <span class="dot"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@endsection