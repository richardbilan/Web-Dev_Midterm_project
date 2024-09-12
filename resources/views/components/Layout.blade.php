<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('styles') <!-- Yield for additional page-specific styles -->
</head>
<body>
    <header>
        <h1>My Website</h1>
        <nav>
    <ul>
        <li><a href="{{ route('welcome') }}">Home</a></li>
        <li><a href="{{ route('about') }}">About</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
    </ul>
</nav>

    </header>

    <main>
        @yield('content')  <!-- Yield for page-specific content -->
    </main>
    
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')  <!-- Yield for page-specific scripts -->
</body>
</html>
