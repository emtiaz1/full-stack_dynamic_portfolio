@extends('index')

@push('style')
    <title>About Me</title>
    <link rel="stylesheet" href="{{ asset('assets/css/about.css') }}">
@endpush

@section('main-content')
<div class="about-container">
    <h2 class="section-title">About Me</h2>
    <div class="about-grid">
        <div class="personal-info card1">
    <div class="card1-flex">
        <div class="profileimg">
            <img src="{{ asset('assets/images/profile2.jpg') }}" alt="profile">
        </div>
        <div class="info-text">
            <h4>Personal Information</h4>
            <ul>
                <li><strong>Name:</strong> Emtiaz Ahmed Rafid</li>
                <li><strong>Age:</strong> 22 years</li>
                <li><strong>Height:</strong> 5'8"</li>
                <li><strong>Weight:</strong> 60 Kg</li>
                <li><strong>Religion:</strong> Islam</li>
                <li><strong>Marital Status:</strong> Single</li>
                <li><strong>Blood Group:</strong> A+</li>
                <li><strong>Favorite Colors:</strong> Red, Blue, Black</li>
                <li><strong>Hobby:</strong> Watching movies and reading books</li>
                <li><strong>Present Address:</strong><br>
                    Yunus Khan Scholar Garden-2,<br>
                    Daffodil International University,<br>
                    Ashulia, Savar, Dhaka
                </li>
            </ul>
        </div>
    </div>
</div>

    <br>
    <div class="card2">
            <h4>Hello, I'm Emtiaz Ahmed Rafid</h4>
            <p>
                My hometown is <strong>Noakhali</strong>. My father is employed in the private sector, and my mother is a housewife.
                I completed my <strong>SSC from Mawna ML High School</strong>, Gazipur, and my <strong>HSC from Gazipur Cantonment College</strong>.
                Currently, I am pursuing a <strong>BSc in Computer Science and Engineering</strong> at <strong>Daffodil International University</strong>.
            </p>
            <p>
                I enjoy watching movies, reading books, and playing video games. I am a self-learner who is passionate about exploring new technologies and staying updated with them.
            </p>
            <p>
                My ambition is to become a <strong>game developer</strong>, and I am diligently working towards achieving that goal. With determination and dedication,
                I am confident that I will fulfill my aspirations and reach my destination.
            </p>
            <a href="{{ url('/skills') }}" class="skillbtn">Explore My Skills</a>
        </div>
</div>
@endsection
