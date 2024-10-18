@extends('components.layout')

@section('title', 'Web Development - Lab 2')

@section('styles')
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Bebas+Neue&amp;family=Figtree:wght@300;600&amp;display=swap'>
    <link rel="stylesheet" href="{{ asset('styles/style_lab2.css') }}">
@endsection

@section('content')

<!-- Lab Title and Description -->
<div class="text-center mt-5">
    <h1 class="display-4">Web Development - Laboratory 2: Routing & Parameters</h1>
    <p class="lead">This lab activity is about defining basic routes, handling route parameters, and using route constraints in Laravel.</p>
</div>

<!-- Welcome Message -->
<div class="row justify-content-center">
    <div class="col-md-6 text-center">
        <p>Here are the steps in creating basic routes, handling route parameters, and applying route constraints.</p>
    </div>
</div>

<!-- Step Containers -->
<div class="step-container">
    <div class="section d-flex align-items-start">
        <div class="col-md-6">
            <h2 class="section-title">Part 1: Defining Basic Routes</h2>
            <p>
                In this section, I defined routes for several pages, including a homepage, an "About Us" page, and a "Contact Us" form. 
                I also implemented a route to redirect `/home` to the homepage `/`.
            </p>
            <ul>
                <li><strong>Homepage Route:</strong> Displays a welcome message.</li>
                <li><strong>About Us Route:</strong> Returns a view for the "About Us" page.</li>
                <li><strong>Redirect Route:</strong> Redirects from `/home` to the homepage `/`.</li>
                <li><strong>Contact Us Route:</strong> Displays a contact form.</li>
            </ul>
        </div>
        <div class="col-md-6 text-right">
      
            <img src="{{ asset('images/welcomeback.png') }}" alt="Basic Routes" class="img-fluid" style="width: 220px;">

        </div>
    </div>
</div>


<div class="step-container">
    <div class="section d-flex">
        <div>
            <h2 class="section-title">Part 2: Using Route Parameters</h2>
            <p>
                In this part, I created routes that accept parameters and display dynamic content based on user input.
            </p>
            <ul>
                <li><strong>Route with Required Parameter:</strong> Displays a personalized welcome message based on the username parameter.</li>
                <li><strong>Route with Optional Parameter:</strong> If the username is not provided, displays a generic welcome message.</li>
                <li><strong>Route Constraints:</strong> The username parameter accepts only alphabetic characters (a-z, A-Z) using regular expression constraints.</li>
            </ul>
            <p>For example, the route `/user/johndoe` displays "Welcome, johndoe!" and the route `/user` displays "Welcome, Guest!".</p>
        </div>
        <img src="{{ asset('images/modal.png') }}" alt="Basic Routes" class="img-fluid mb-3" style="width: 45%;">
    </div>
</div>

<div class="step-container">
    <div class="section d-flex">
        <div>
            <h2 class="section-title">Part 3: Documentation</h2>
            <p>
                I documented the code for each part of this lab with detailed explanations and screenshots of the application running. 
                Below is an example of one of the routes I created:
            </p>
            <pre><code>
// Route with optional parameter and constraint
Route::get('/user/{name?}', function ($name = 'Guest') {
    return "Welcome, " . ucfirst($name) . "!";
})->where('name', '[A-Za-z]+');
            </code></pre>
            <p>
                This route returns a personalized welcome message if the username is provided. If not, it defaults to "Guest." The regular expression ensures only alphabetic characters are accepted.
            </p>
        </div>
        <img src="{{ asset('images/guest.png') }}" alt="Documentation" class="img-fluid ml-3" style="width: 600px;">
    </div>
</div>

<!-- Summary -->
<div class="summary text-center">
    <h3>Description</h3>
    <p>This lab taught me how to define basic routes and utilize route parameters in Laravel. I learned to create routes that not only direct users to static pages like the homepage and "About Us" but also handle dynamic content using route parameters. A major challenge was ensuring that the routes were correctly configured to manage dynamic parameters while applying the necessary constraints, particularly when it came to retrieving and displaying the username entered by the user.</p>

    <p>Implementing the feature to welcome users by their usernames required careful planning. I had to ensure that the input was validated to accept only alphabetic characters, as specified by the route constraints. This was especially challenging because I encountered various issues related to handling user input and retrieving data. It was quite difficult to display personalized welcome messages, such as "Welcome, johndoe!" or "Welcome, Guest!" if I didn’t fully understand the concepts. Integrating this functionality into a modal added another layer of complexity. I needed to ensure that the modal displayed the correct welcome message based on user input, which involved not just back-end logic but also front-end design to create an intuitive user interface. This experience provided me with valuable insights into how routing, view rendering, and user interaction work together.This experience will definitely help me build more web applications in the future, the importance of managing user input, handling routes, and designing effective.</p>
</div>
<br>


<a href="https://github.com/hempers/WebDev_Grouplab2.git" class="custom-button" target="_blank">Download Laboratory 2</a>
<br><br> <br>

@endsection
