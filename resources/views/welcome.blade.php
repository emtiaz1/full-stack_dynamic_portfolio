@extends('index')
@push('style')
    <title>Portfolio - Dashboard</title>
    
@endpush

@section('main-content')
<div class="main-section">
    <div class="profile">
        <img src="{{ asset('assets/images/profile.jpg') }}" alt="Profile Picture">
    </div>
    <div class="welcome">
<h2 id="welcome" class="welcome-text">Welcome to My Portfolio!</h2>
<div class="intro" id="intro">    
<p>
    Hi there! 👋
    I'm Emtiaz Ahmed, and I'm excited to share my work with you. This portfolio showcases the projects, skills, and ideas I've developed over time — from web development and programming to research and innovation.
</p>

<p>
    Feel free to explore, learn more about what I do, and get in touch if you'd like to collaborate or just have a chat. Thanks for stopping by!
</p></div>
<a class='btn' id="explore-button" type="button" href="{{ url('/about') }}">Explore My Profile</a>
</div>
</div>
<br>
@endsection
