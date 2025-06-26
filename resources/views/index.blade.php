<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @stack('style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <div class="top-bar">
    <div class="left-items">
        <div id='clock'>TimeDate</div>
    </div>
    <div class="right-item">
        <div class="menu">
            <div class="menu-item"><a href="{{ url('/') }}">Home</a></div>
            <div class="menu-item"><a href="{{ url('/about') }}">About Me</a></div>
            <div class="menu-item"><a href="{{ url('/education') }}">Education</a></div>
            <div class="menu-item"><a href="{{ url('/skills') }}">Skills</a></div>
            <div class="menu-item"><a href="{{ url('/projects') }}">Projects</a></div>
            <a class="menu-item6" type="button" href="{{ url('/contact') }}" style="text-decoration: none;">Contact →</a>
        </div>
    </div>
</div>
    @yield('main-content')
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>