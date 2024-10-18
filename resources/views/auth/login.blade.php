<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('styles/login.css') }}">
</head>
<body>
    <br><br><br><br><br><br>
    <div class="cont">
        <!-- Sign-In Form -->
        <div class="form sign-in">
            <h2>Welcome</h2>
            <label>
                <span>Name</span>
                <input type="text" name="name" required />
            </label>
            <label>
                <span>Age</span>
                <input type="number" name="age" required />
            </label>
            <button type="button" class="submit">Sign In</button>
            <p style="text-align: center;">or</p>
            <!-- Login as Guest Button -->
            <button type="button" class="guest-btn">Login as Guest</button>
        </div>

        <div class="sub-cont">
            <!-- Side Image and Text -->
            <div class="img">
                <div class="img__text m--up">
                    <h3>Are you Looking For a Trusted Web Developer? Explore my Portfolio.</h3>
                    <br><br>
                </div>
               
            </div>
        </div>

    <!-- Modal Structure -->
    <div id="loginModal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Welcome, <span id="userName"></span>!</h2>
            <p>You have successfully signed in.</p>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
    // Redirect to the welcome page for guest login
    document.querySelector('.guest-btn').addEventListener('click', function() {
        window.location.href = '/welcome?guest=true'; // Pass the guest parameter
    });

    // Handle the Sign In button click
    document.querySelector('.sign-in .submit').addEventListener('click', function() {
        var name = document.querySelector('input[name="name"]').value;
        var age = document.querySelector('input[name="age"]').value;

        if (name.trim() !== "" && age.trim() !== "") {
            // Redirect to the welcome page with the user's name and age
            window.location.href = '/welcome?username=' + encodeURIComponent(name) + '&age=' + encodeURIComponent(age);
        } else {
            alert('Please enter both your name and age.');
        }
    });
</script>

</body>
</html>