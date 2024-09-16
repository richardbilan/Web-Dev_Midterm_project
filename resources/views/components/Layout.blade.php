<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('styles')
</head>
<body>
    <header>
        <div class="logo">
            <a href="{{ url('/') }}" style="text-decoration: none;">
                <h1 class="text"></h1>
            </a>
        </div>
        <nav class="logo">
            <ul>
                <li><a href="{{ url('/') }}" style="text-decoration: none;">Home</a></li>
                <li><a href="{{ url('/about') }}" style="text-decoration: none;">About</a></li>
                <li><a href="{{ url('/contactus') }}" style="text-decoration: none;">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <div class="content">
        @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    
    @yield('scripts')
</body>
</html>
