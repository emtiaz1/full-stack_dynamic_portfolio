<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @stack('style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #4e54c8;
            --secondary-color: #8f94fb;
            --text-color: #333;
            --light-color: #f8f9fa;
            --nav-height: 70px;
            --dark-color: #212529;
        }

        .navbar-custom {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            padding: 15px 0;
            transition: all 0.3s ease;
        }

        .navbar-scrolled {
            padding: 10px 0;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            position: relative;
        }

        .brand-gradient {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            position: relative;
        }

        .brand-dot {
            position: absolute;
            width: 8px;
            height: 8px;
            background: var(--primary-color);
            border-radius: 50%;
            bottom: 5px;
            right: -8px;
        }

        .nav-link {
            font-weight: 500;
            color: var(--text-color) !important;
            margin: 0 5px;
            position: relative;
            transition: all 0.3s ease;
            padding: 8px 15px !important;
        }

        .nav-link:before {
            content: "";
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 50%;
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .nav-link:hover:before {
            width: 80%;
        }

        .nav-link:hover {
            color: var(--primary-color) !important;
        }

        .nav-link.active {
            color: var(--primary-color) !important;
            font-weight: 600;
        }

        .nav-link.active:before {
            width: 80%;
        }

        .contact-btn {
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            color: var(--light-color) !important;
            border-radius: 50px;
            padding: 8px 20px !important;
            margin-left: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            border: none;
        }

        .contact-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
            color: var(--dark-color) !important;
        }

        .contact-btn:before {
            display: none;
        }

        .clock-display {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(5px);
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.85rem;
            color: var(--text-color);
            font-weight: 500;
            display: flex;
            align-items: center;
        }

        .clock-display i {
            margin-right: 5px;
            color: var(--primary-color);
        }

        @media (max-width: 991px) {
            .navbar-collapse {
                background: white;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
                margin-top: 15px;
            }

            .contact-btn {
                margin-top: 10px;
                text-align: center;
                display: inline-block;
            }

            .clock-display {
                margin-top: 15px;
                justify-content: center;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom fixed-top">
        <div class="container">
            <!-- Left side: Brand name and clock (on desktop) -->
            <div class="d-flex align-items-center">
                <!-- Clock (visible on all screens) -->
                <div class="clock-display">
                    <i class="far fa-clock"></i>
                    <span id="clock">TimeDate</span>
                </div>
            </div>

            <!-- Toggler for mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navigation items -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="{{ url('/about') }}">About
                            Me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('education') ? 'active' : '' }}"
                            href="{{ url('/education') }}">Education</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('skills') ? 'active' : '' }}"
                            href="{{ url('/skills') }}">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('projects') ? 'active' : '' }}"
                            href="{{ url('/projects') }}">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link contact-btn {{ Request::is('contact') ? 'active' : '' }}"
                            href="{{ url('/contact') }}">
                            Contact <i class="fas fa-arrow-right ms-1"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Add padding to body to account for fixed navbar -->
    <div style="padding-top: var(--nav-height);"></div>

    @yield('main-content')

    <script>
        // Update both clock displays
        function updateClock() {
            const now = new Date();
            const options = {
                weekday: 'short',
                year: 'numeric',
                month: 'short',
                day: 'numeric',
                hour: '2-digit',
                minute: '2-digit'
            };
            const timeString = now.toLocaleDateString('en-US', options);

            document.getElementById('clock').textContent = timeString;

            if (document.getElementById('clock-mobile')) {
                document.getElementById('clock-mobile').textContent = timeString;
            }
        }

        // Navbar scroll effect
        window.addEventListener('scroll', function () {
            const navbar = document.querySelector('.navbar-custom');
            if (window.scrollY > 50) {
                navbar.classList.add('navbar-scrolled');
            } else {
                navbar.classList.remove('navbar-scrolled');
            }
        });

        // Initial calls
        updateClock();
        setInterval(updateClock, 60000); // Update every minute
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>