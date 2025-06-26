@extends('index')

@push('style')
    <title>Contact Me</title>
    <link rel="stylesheet" href="{{ asset('assets/css/contact.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
@endpush

@section('main-content')
<div class="contact-container">
    <h2 class="section-title">Contact Me</h2>
    <div class="contact-grid">
        <div class="contact-info">
            <h3><i class="bi bi-person-lines-fill me-2"></i> Get in Touch</h3>
            <p><i class="bi bi-envelope-fill"></i> Email: rafid15@diu.edu.bd.com</p>
            <p><i class="bi bi-phone-fill"></i> Phone: +8801731834696</p>
            <p><i class="bi bi-geo-alt-fill"></i> Address: Savar, Dhaka, Bangladesh</p>
            <div class="social-icons">
                <a href="https://www.facebook.com/ezAhmed.R/"><i class="bi bi-facebook"></i></a>
                <a href="https://github.com/emtiaz1"><i class="bi bi-github"></i></a>
                <a href="https://www.linkedin.com/"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
    </div>
</div>
@endsection
