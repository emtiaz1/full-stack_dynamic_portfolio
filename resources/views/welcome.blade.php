@extends('index')
@push('style')
    <title>Portfolio - Dashboard</title>
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
        }
        
        .hero-section {
            min-height: 100vh;
            background: linear-gradient(135deg, #4361ee 0%, #3a0ca3 100%);
            position: relative;
            overflow: hidden;
            color: white;
        }
        
        .hero-content {
            z-index: 10;
            position: relative;
        }
        
        .profile-img {
            width: 220px;
            height: 220px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid white;
            box-shadow: 0 0 25px rgba(0,0,0,0.3);
            transition: transform 0.5s;
        }
        
        .profile-img:hover {
            transform: scale(1.05);
        }
        
        .welcome-text {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
        }
        
        .intro {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 2rem;
            line-height: 1.8;
        }
        
        .btn-custom {
            padding: 12px 30px;
            color: white !important;
            border: none;
            border-radius: 50px;
            font-weight: 600;
            letter-spacing: 0.5px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            transition: all 0.3s;
        }
        
        .btn-custom:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.3);
            color: var(--dark) !important;
        }
        
        /* Animated Background */
        .circles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
        
        .circles li {
            position: absolute;
            display: block;
            list-style: none;
            width: 20px;
            height: 20px;
            background: rgba(255, 255, 255, 0.2);
            animation: animate 25s linear infinite;
            bottom: -150px;
            border-radius: 50%;
        }
        
        @keyframes animate {
            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 1;
                border-radius: 0;
            }
            100% {
                transform: translateY(-1000px) rotate(720deg);
                opacity: 0;
                border-radius: 50%;
            }
        }
        
        .circles li:nth-child(1) {
            left: 25%;
            width: 80px;
            height: 80px;
            animation-delay: 0s;
        }
        
        .circles li:nth-child(2) {
            left: 10%;
            width: 20px;
            height: 20px;
            animation-delay: 2s;
            animation-duration: 12s;
        }
        
        .circles li:nth-child(3) {
            left: 70%;
            width: 20px;
            height: 20px;
            animation-delay: 4s;
        }
        
        .circles li:nth-child(4) {
            left: 40%;
            width: 60px;
            height: 60px;
            animation-delay: 0s;
            animation-duration: 18s;
        }
        
        .circles li:nth-child(5) {
            left: 65%;
            width: 20px;
            height: 20px;
            animation-delay: 0s;
        }
        
        .circles li:nth-child(6) {
            left: 75%;
            width: 110px;
            height: 110px;
            animation-delay: 3s;
        }
        
        .circles li:nth-child(7) {
            left: 35%;
            width: 150px;
            height: 150px;
            animation-delay: 7s;
        }
        
        .circles li:nth-child(8) {
            left: 50%;
            width: 25px;
            height: 25px;
            animation-delay: 15s;
            animation-duration: 45s;
        }
        
        .circles li:nth-child(9) {
            left: 20%;
            width: 15px;
            height: 15px;
            animation-delay: 2s;
            animation-duration: 35s;
        }
        
        .circles li:nth-child(10) {
            left: 85%;
            width: 150px;
            height: 150px;
            animation-delay: 0s;
            animation-duration: 11s;
        }
    </style>
@endpush

@section('main-content')
<div class="hero-section">
    <!-- Animated Background -->
    <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>

    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100 hero-content">
            <div class="col-lg-8 text-center">
                <div class="mb-4 mt-4">
                    <img src="{{ asset('assets/images/profile.jpg') }}" alt="Profile Picture" class="profile-img">
                </div>
                <h1 class="welcome-text">Welcome to My Portfolio!</h1>
                <div class="intro">
                    <p>
                        Hi there! 👋
                        I'm <strong>Emtiaz Ahmed</strong>, and I'm excited to share my work with you. This portfolio showcases the projects, skills, and ideas I've developed over time — from web development and programming to research and innovation.
                    </p>
                    <p>
                        Feel free to explore, learn more about what I do, and get in touch if you'd like to collaborate or just have a chat. Thanks for stopping by!
                    </p>
                </div>
                <a class="btn btn-custom" href="{{ url('/about') }}">
                    <i class="fas fa-user-circle me-2"></i>Explore My Profile
                </a>

                <div class="social-links mt-5 mb-4">
                    <a href="#" class="btn btn-light rounded-circle mx-2"><i class="fab fa-github"></i></a>
                    <a href="#" class="btn btn-light rounded-circle mx-2"><i class="fab fa-linkedin"></i></a>
                    <a href="#" class="btn btn-light rounded-circle mx-2"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="btn btn-light rounded-circle mx-2"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@endsection
