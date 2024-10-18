@extends('components.layout')

@section('title', 'Web Development - Lab 1')

@section('styles')
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Bebas+Neue&amp;family=Figtree:wght@300;600&amp;display=swap'>
    <link rel="stylesheet" href="{{ asset('styles/style_lab1.css') }}">
@endsection

@section('content')

<!-- Lab Title and Description -->
<div class="text-center mt-5">
    <h1 class="display-4">Web Development - Laboratory 1 Setup</h1>
    <p class="lead">This lab Acitivity is about setting up a Laravel project, installation, view creation, and routing.</p>
</div>

<!-- Welcome Message -->
<div class="row justify-content-center">
    <div class="col-md-6 text-center">
        <p>Here are the steps in Installing laravel and creating routes</p>
    </div>
</div>

<!-- Step Containers -->
<div class="step-container">
    <div class="section d-flex">
        <div>
            <h2 class="section-title">Step 1: Installing Laravel</h2>
            <p>The first step I took in this activity was downloading Herd and creating a project path there. 
                This process included setting up the Laravel framework along with its necessary dependencies, 
                such as routing and Blade templating. Composer made it easy to manage and update these packages.
            </p>
            <img src="{{ asset('images/herd.png') }}" alt="Step 1" class="img-fluid ml-3" style="width: 400px;">
        </div>
       
    </div>
</div>

<div class="step-container">
    <div class="section d-flex">
        <div>
            <h2 class="section-title">Step 2: Creating a Laravel Project and Git Repository</h2>
            <p>After installing Laravel, I created a new Laravel project in the command prompt. This generated the necessary file structure and base configuration for the application. I also initialized a Git repository to track changes in the project and manage version control.</p>
        </div>
        <img src="{{ asset('images/laravel.png') }}" alt="Step 2" class="img-fluid ml-3" style="width: 400px;">
    </div>
</div>

<div class="step-container">
    <div class="section d-flex">
        <div>
            <h2 class="section-title">Step 3: Configuring the .env File</h2>
            <p>I configured the .env file to establish database connectivity. The file i put in DB_CONNECTION=sqlite and DB_DATABASE=z:\database\database.sqlite which are used to set up a connection between Laravel and the database.</p>
        </div>
        <img src="{{ asset('images/env.png') }}" alt="Step 3" class="img-fluid ml-3" style="width: 400px;">
    </div>
</div>

<div class="step-container">
    <div class="section d-flex">
        <div>
            <h2 class="section-title">Step 4: Creating Views</h2>
            <p>For this lab, I created three views: home, about, and content. These views are written using Blade templating, allowing for reusable components like layouts. Each view extends a base layout, ensuring consistent design and structure across the pages.</p>
        </div>
        <img src="{{ asset('images/views.png') }}" alt="Step 4" class="img-fluid ml-3" style="width: 400px;">
    </div>
</div>

<div class="step-container">
    <div class="section d-flex">
        <div>
            <h2 class="section-title">Step 5: Setting Up Routes</h2>
            <p>I created routes in the web.php file to map specific URLs to the views I built. These routes allow users to navigate between the homepage, about, and content pages. Below is an example of the routes I set up:</p>
            <pre><code>
Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/content', function () {
    return view('content');
});
            </code></pre>
            <p>This enables seamless navigation throughout the application.</p>
        </div>
        <img src="{{ asset('images/routes.png') }}" alt="Step 5" class="img-fluid ml-3" style="width: 600px;">
    </div>
</div>

<!-- Summary -->
<div class="summary text-center">
    <h3>Description</h3>
    <p>This laboratory exercise helped me understand how the Laravel framework works, from setting up the environment, 
   creating views, to configuring routing, which are all Important for web application development. 
   One of the most challenging parts of this lab was correctly configuring the routes in the `web.php` file. 
   I had to ensure each route was properly mapped to its respective view, and troubleshooting issues when routes 
   did not render as expected required me to carefully review the syntax and structure. It was very frustrating 
   at times, especially when I couldn't figure out where the routes were going or why the route list wasn’t appearing correctly.
   
   Despite these difficulties, I learned how essential routing 
   is in building efficient and functional web applications. This experience will definitely be valuable in future projects, 
   helping me troubleshoot similar issues more effectively.
</p>

</div>

<a href="https://github.com/richardbilan/webdev.git" class="custom-button" target="_blank">Download Laboratory 1</a>
<br><br>

@endsection
