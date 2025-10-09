<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passenger Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
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
                <img src="{{ asset('images/users.svg') }}" alt="User Icon">
            </div>

            <h2>Passenger Login</h2>
            <p class="subtitle">Find your next ride</p>

            <!-- Login Form -->
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" value="{{ old('email') }}" required>
                     @error('email')
            <p class="error">{{ $message }}</p>
        @enderror
                </div>
<input type="hidden" name="role" value="passenger">
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <div class="checkbox-container">
    <label>
        <input class="checkbox" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
        Remember Me
    </label>
</div>

                <button type="submit" class="btn-primary">Sign In</button>
            </form>

            <a href="{{ route('forget') }}" class="forgot">Forgot your password?</a>

            <div class="divider"></div>

            <p class="no-account">Don't have an account?</p>
            <a href="{{ route('register') }}" class="btn-outline">Create Account</a>
        </div>
    </div>

</body>
</html>
