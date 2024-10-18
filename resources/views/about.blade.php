
@extends('components.layout') 
@section('title', 'About Us') 

@section('styles')
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Bebas+Neue&amp;family=Figtree:wght@300;600&amp;display=swap'>
    
    <link rel="stylesheet" href="{{ asset('styles/styles_a.css') }}">
@endsection

@section('content') 

    
<section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12 mx-auto text-center">
                <div class="image-container mb-4">
                    <img src="{{ URL('images/richard.png') }}" width="550" height="450" alt="Richard Bilan" class="profile-image">
                </div>
                <h1 class="text-light">RICHARD D. BILAN JR.</h1>
                <h6 class="text-light">3rd year Student of Bicol University</h6>
                <p class="intro-text text-light mt-3">
                    My name is Richard Bilan Jr., 20 years old, living in Camalig, Albay. I am a 3rd year student at Bicol University Main Campus, pursuing a Bachelor of Science in Information Technology. I am a motivated IT student eager to apply my skills in a professional setting. Despite being early in my career, my dedication to learning and strong foundation in programming, web development, and design have prepared me to contribute effectively. I am currently seeking job opportunities that require no prior experience, where I can grow, gain practical experience, and make a meaningful impact.
                </p>
            </div>
        </div>
    </div>
</section>

@endsection
