<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passenger Login</title>
    <link rel="stylesheet" href="{{ asset('css/forget.css') }}">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

    <!-- Back to home -->
    <div class="back">
        <a href="{{ url('/') }}"><i class="fa-solid fa-arrow-left"></i> Back to Home</a>
    </div>

    <!-- Login Wrapper -->
    <div class="login-wrapper">
        <div class="login-card">
            
            <!-- Top Icon -->
            <div class="login-icon">
           <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-question" viewBox="0 0 16 16">
  <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286m1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94"/>
</svg>
            </div>

            <h2>Forget Password</h2>
            

            <!-- Login Form -->
            <form method="POST" action="#">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" value="{{ old('email') }}" required>
                     @error('email')
            <p class="error">{{ $message }}</p>
        @enderror
                </div>


                <button type="submit" class="btn-primary">Enter Email</button>
            </form>

            <a href="{{ route('login') }}" class="btn-outline">login</a>
        </div>
    </div>

</body>
</html>
