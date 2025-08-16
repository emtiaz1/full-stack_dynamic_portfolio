<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #e0e7ff 0%, #f8fafc 100%);
        }

        .sidebar {
            background: linear-gradient(160deg, #232526 0%, #414345 100%);
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.08);
        }

        .sidebar .nav-link {
            border-radius: 8px;
            transition: background 0.2s, color 0.2s;
        }

        .sidebar .nav-link.active,
        .sidebar .nav-link:hover {
            background: #6366f1;
            color: #fff !important;
        }

        .sidebar-logo {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 1rem;
            border: 2px solid #fff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        .dashboard-header {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .dashboard-header .fa {
            font-size: 2rem;
            color: #6366f1;
        }
    </style>
</head>


<body class="bg-light">
    <div class="container-fluid min-vh-100">
        <div class="row h-100">
            <!-- Sidebar -->
            <nav class="col-md-3 col-lg-2 d-md-block sidebar py-4 text-white min-vh-100">
                <div class="sidebar-sticky d-flex flex-column align-items-center">
                    <img src="{{ asset('assets/images/profile.jpg') }}"
                        alt="Admin Avatar" class="sidebar-logo">
                    <h2 class="h4 mb-4 px-3">Admin Panel</h2>
                    <ul class="nav flex-column mb-4 w-100 px-2">
                        <li class="nav-item mb-2"><a href="{{ route('admin.home') }}"
                                class="nav-link text-white {{ request()->routeIs('admin.home') ? 'active' : '' }}"><i
                                    class="fa fa-home me-2"></i>Home</a></li>
                        <li class="nav-item mb-2"><a href="{{ route('admin.about') }}"
                                class="nav-link text-white {{ request()->routeIs('admin.about') ? 'active' : '' }}"><i
                                    class="fa fa-user me-2"></i>About Me</a></li>
                        <li class="nav-item mb-2"><a href="{{ route('admin.education') }}"
                                class="nav-link text-white {{ request()->routeIs('admin.education') ? 'active' : '' }}"><i
                                    class="fa fa-graduation-cap me-2"></i>Education</a></li>
                        <li class="nav-item mb-2"><a href="{{ route('admin.skills') }}"
                                class="nav-link text-white {{ request()->routeIs('admin.skills') ? 'active' : '' }}"><i
                                    class="fa fa-cogs me-2"></i>Skills</a></li>
                        <li class="nav-item mb-2"><a href="{{ route('admin.projects') }}"
                                class="nav-link text-white {{ request()->routeIs('admin.projects') ? 'active' : '' }}"><i
                                    class="fa fa-briefcase me-2"></i>Projects</a></li>
                        <li class="nav-item mb-2"><a href="{{ route('admin.contact') }}"
                                class="nav-link text-white {{ request()->routeIs('admin.contact') ? 'active' : '' }}"><i
                                    class="fa fa-envelope me-2"></i>Contact</a></li>
                        <li class="nav-item mb-2"><a href="{{ route('admin.messages') }}"
                                class="nav-link text-white {{ request()->routeIs('admin.messages') ? 'active' : '' }}"><i
                                    class="fa fa-comments me-2"></i>Messages</a></li>
                    </ul>
                    <a href="{{ route('admin.logout') }}" class="btn btn-danger w-100"><i
                            class="fa fa-sign-out-alt me-2"></i>Logout</a>
                </div>
            </nav>
            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                @yield('content')
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>