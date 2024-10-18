@extends('components.layout')

@section('title', 'Web Development - Lab 1')

@section('styles')
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Bebas+Neue&amp;family=Figtree:wght@300;600&amp;display=swap'>
    <link rel="stylesheet" href="{{ asset('styles/style_lab1.css') }}">
@endsection

@section('content')


<!-- Lab Title and Description -->
<div class="text-center mt-5">
    <h1 class="display-4">Web Development - Laboratory 3 Layout</h1>
    <p class="lead">This lab activity is about setting up a Laravel project, installation, view creation, and routing.</p>
</div>

<!-- Welcome Message -->
<div class="row justify-content-center">
    <div class="col-md-6 text-center">
        <p>Here are the steps in creating Layoutfiles</p>
    </div>
</div>

<!-- Step Containers -->
<div class="step-container">
    <div class="section d-flex">
        <div>
            <h2 class="section-title">Part 1: Creating a Layout File</h2>
            <p>In this step, I created a new folder named "Components" in the <code>resources/views</code> directory and created a file named <code>Layout.blade.php</code> inside it. This file contains the basic HTML structure of my application, including sections for the title, styles, and content.</p>
            <img src="{{ asset('images/components.png') }}" alt="Step 1" class="img-fluid ml-3" style="width: 400px;">
        </div>
    </div>
</div>
<div class="step-container">
    <div class="section d-flex">
        <div>
            <h2 class="section-title">Part 2: Creating Views</h2>
            <p>For this part, I created three new Blade files: <code>home.blade.php</code>, <code>about.blade.php</code>, and <code>content.blade.php</code> in the <code>resources/views</code> directory. Each of these files extends the layout and includes specific content for that page.</p>
        </div>
        <img src="{{ asset('images/threeviews.png') }}" alt="Step 2" class="img-fluid ml-3" style="width: 400px;">
    </div>
</div>

<div class="step-container">
    <div class="section d-flex">
        <div>
            <h2 class="section-title">Part 3: Updating Routes</h2>
            <p>In this step, I updated the <code>routes/web.php</code> file to define routes for each view. This allows users to navigate to different pages of the application. For instance, I mapped the root URL to the <code>home.blade.php</code> view.</p>
        </div>
        <img src="{{ asset('images/routeslay.png') }}" alt="Step 3" class="img-fluid ml-3" style="width: 400px;">
    </div>
</div>

<div class="step-container">
    <div class="section d-flex">
        <div>
            <h2 class="section-title">Part 4: Layout and Extending the Layout</h2>
            <p>Lastly, the Layout.  A layout file serves as a template that contains the common structure of your web pages. This typically includes the HTML head tag section (for metadata and styles), a header, a footer, and any other repeated elements. The layout file defines sections using the yield directive. This indicates where content from child views should be inserted.
            In the example above, the view defines its content within the "section" directive, which gets injected into the layout's 
            This allows each view to specify its styles while keeping the layout file clean
</p>
        </div>
        <img src="{{ asset('images/lay1.png') }}" alt="Step 4" class="img-fluid ml-3" style="width: 400px;">
        <img src="{{ asset('images/lay2.png') }}" alt="Step 4" class="img-fluid ml-3" style="width: 400px;">
        <img src="{{ asset('images/lay3.png') }}" alt="Step 4" class="img-fluid ml-3" style="width: 400px;">
        <img src="{{ asset('images/lay4.png') }}" alt="Step 4" class="img-fluid ml-3" style="width: 400px;">
    </div>
</div>

<!-- Summary -->
<div class="summary text-center">
    <h3>Description</h3>
  

</div>

<p>In this activity, I created a structured Laravel application using Components, which involved defining a layout file and multiple views. The layout file acts as a foundation, providing a consistent structure and style across all pages by including shared elements like headers and footers. Each view extends this layout, allowing for specific content to be inserted where needed.

One of the most challenging aspects of this activity was ensuring that the routing in web.php accurately mapped to the corresponding views. Initially, I faced several syntax errors that caused the application to break, making it difficult to identify the root cause of the issues. To resolve this, I systematically reviewed each route definition, carefully checking for typos and ensuring that the correct view names were being referenced. Additionally, I utilized Laravel's built-in debugging tools, which helped highlight the specific lines causing errors. This process not only resolved the routing issues but also deepened my understanding of how Laravel handles view rendering and routing.</p>
<br>
<a href="https://github.com/richardbilan/webdev.git" class="custom-button" target="_blank">Download Laboratory 3</a>
<br><br>
@endsection


