<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>signup</title>
    <link rel="stylesheet" href="{{ asset('styles/style.css') }}" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
    <div class="container">
      <form action="{{ url('/login') }}" method="POST">
        @csrf
        <div class="title">Sign Up</div>
        
        <div class="input-box underline">
          <input type="email" name="email" placeholder="Enter Your Email" required />
          <div class="underline"></div>
        </div>

        <div class="input-box">
          <input type="password" name="password" placeholder="Enter Your Password" required />
          <div class="underline"></div>
        </div>

        <div class="input-box button">
          <input type="submit" value="Continue" />
        </div>
      </form>
      
     


      <div class="option">or Connect With Social Media</div>

      <div class="twitter">
        <a href="#"><i class="fab fa-twitter"></i>Sign in With Twitter</a>
      </div>
      
      <div class="facebook">
        <a href="#"><i class="fab fa-facebook-f"></i>Sign in With Facebook</a>
      </div>
    </div>
  </body>
</html>