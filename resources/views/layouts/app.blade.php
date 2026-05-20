<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Michael.ID - Portfolio')</title>
    
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    
    <!-- Use your local CSS file directly -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: rgba(26, 32, 44, 0.95); backdrop-filter: blur(10px);">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" style="height: 40px; margin-right: 10px;">
                <span class="terminal-prompt">MICHAEL.ID</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Services</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="main-content">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="py-4 text-center">
        <div class="container">
            <p class="text-muted mb-2" style="color: #00ff00; font-family: monospace;">
                developer@portfolio:~$ status
            </p>
            <p class="text-light mb-3" style="font-family: monospace;">
                &copy; 2025 Michael Nugroho. Built with ❤️ and Modern Tech
            </p>
            <div class="d-flex justify-content-center gap-3">
                <a href="#" class="text-success"><i class="fab fa-github fa-2x"></i></a>
                <a href="#" class="text-primary"><i class="fab fa-linkedin fa-2x"></i></a>
                <a href="#" class="text-info"><i class="fab fa-twitter fa-2x"></i></a>
                <a href="#" class="text-danger"><i class="fas fa-envelope fa-2x"></i></a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>