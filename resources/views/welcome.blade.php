@extends('components.layout')

@section('title', 'Web Development')

@section('styles')
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Bebas+Neue&amp;family=Figtree:wght@300;600&amp;display=swap'>
    <link rel="stylesheet" href="{{ asset('styles/styles_h.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
@endsection

@section('content')

<!-- Welcome Message -->
<div class="row justify-content-center">
    <div class="col-md-6 text-center mt-5">
        <h1 class="display-4">Welcome</h1>
        <p class="lead">Explore my Laravel Activities below!</p>
    </div>
</div>

<!-- Modal Structure -->
<div id="loginModal" style="display:none;">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2 id="modalTitle">Welcome!</h2>
        <p id="modalMessage"></p>
    </div>
</div>
<div class="row mt-5">
    <!-- Card 1 -->
    <div class="col-md-3">
        <div class="outer">
            <div class="dot"></div>
            <div class="card1">
                <div class="ray"></div>
                <div class="text">Laravel Activity 1</div>
                <div>Views</div>
                <a href="{{ url('/Lab1') }}" class="btn btn-primary">Go to Laboratory 1</a>
                <div class="line topl"></div>
                <div class="line leftl"></div>
                <div class="line bottoml"></div>
                <div class="line rightl"></div>
            </div>
        </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-3">
        <div class="outer">
            <div class="dot"></div>
            <div class="card2">
                <div class="ray"></div>
                <div class="text">Laravel Activity 2</div>
                <div>Views</div>
                <a href="{{ url('/Lab2') }}" class="btn btn-primary">Go to Laboratory 2</a>
                <div class="line topl"></div>
                <div class="line leftl"></div>
                <div class="line bottoml"></div>
                <div class="line rightl"></div>
            </div>
        </div>
    </div>

    <!-- Card 3 -->
    <div class="col-md-3">
        <div class="outer">
            <div class="dot"></div>
            <div class="card3">
                <div class="ray"></div>
                <div class="text">Laravel Activity 3</div>
                <div>Views</div>
                <a href="{{ url('/Lab3') }}" class="btn btn-primary">Go to Laboratory 3</a>
                <div class="line topl"></div>
                <div class="line leftl"></div>
                <div class="line bottoml"></div>
                <div class="line rightl"></div>
            </div>
        </div>
    </div>

    <!-- Card 4 -->
    <div class="col-md-3">
        <div class="outer">
            <div class="dot"></div>
            <div class="card4">
                <div class="ray"></div>
                <div class="text">Laravel Activity 4</div>
                <div>Views</div>
                <a href="{{ url('/Lab4') }}" class="btn btn-primary">Go to Laboratory 4</a>
                <div class="line topl"></div>
                <div class="line leftl"></div>
                <div class="line bottoml"></div>
                <div class="line rightl"></div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('scripts')
<script>
    // Function to open the modal and display appropriate greeting
    function showModal(greetingMessage) {
        const modal = document.getElementById('loginModal');
        document.getElementById('modalMessage').innerText = greetingMessage;
        modal.style.display = 'block';

        // Close modal when clicking on the close button
        document.querySelector('.close').addEventListener('click', function() {
            modal.style.display = 'none';
        });

        // Close modal when clicking outside the modal
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        }
    }

    // Get URL parameters (e.g., ?username=John&age=25 or ?guest=true)
    const urlParams = new URLSearchParams(window.location.search);
    const username = urlParams.get('username');
    const isGuest = urlParams.get('guest');

    // Set modal content based on user or guest
    if (username) {
        const age = urlParams.get('age');
        showModal(`Welcome, ${username}! You are Login as  ${username}. Enjoy exploring my portfolio.`);
    } else if (isGuest) {
        showModal("Welcome, guest!");
    }

    // Automatically display the modal on page load
    window.onload = function() {
        if (username || isGuest) {
            document.getElementById('loginModal').style.display = 'block';
        }
    };
</script>
@endsection
