<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <div class="top-bar">
        <div class="left-items">
            <div class='time'>TimeDate</div>
        </div>
        <div class="right-item">
            <div class="menu">
                <div class="menu-item">Home</div>
                <div class="menu-item">Projects</div>
                <div class="menu-item">Skills</div>
                <div class="contact" type="button">Contact →</div>
            </div>
        </div>
    </div>
    <div class="main-section">
        <div class="profile">
            <img src="{{ asset('assets/images/profile.jpg') }}" alt="Profile Picture">
        </div>
        <div class="welcome">
    <h2 id="welcome">Welcome to My Portfolio!</h2>
    <div class="intro" id="intro">    
    <p>
        Hi there! 👋
        I'm Emtiaz Ahmed, and I'm excited to share my work with you. This portfolio showcases the projects, skills, and ideas I've developed over time — from web development and programming to research and innovation.
    </p>
    <p>
        Whether you're here to check out my latest projects, learn about my skills, or just get to know me better, I hope you find something that inspires you. My journey has been filled with challenges and achievements, and I'm always eager to take on new opportunities and collaborate with others in the tech community.
    </p>
        Feel free to explore, learn more about what I do, and get in touch if you'd like to collaborate or just have a chat. Thanks for stopping by!
    </p></div>
    <button class='btn'id="contact-button">Contact Me</button>
    </div>
    </div>
    <br>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>
