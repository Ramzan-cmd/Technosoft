<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passenger Register</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

    <!-- Back to home -->
    <div class="back">
        <a href="{{ url('/') }}"><i class="fa-solid fa-arrow-left"></i> Back to Home</a>
    </div>

    <!-- Register Wrapper -->
    <div class="register-wrapper">
        <div class="register-card">

            <!-- Top Icon -->
            <div class="register-icon">
                <img src="{{ asset('images/users.svg') }}" alt="User Icon">
            </div>

            <h2>Create Account</h2>
            <p class="register-subtitle">Join us and start your journey</p>

            <!-- Register Form -->
            <form method="POST" action="{{ route('register') }}">
    @csrf

    <!-- Full Name -->
    <div class="register-form-group">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" 
               value="{{ old('name') }}"
               class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
               placeholder="Enter your name" required>
        @error('name')
            <p class="error">{{ $message }}</p>
        @enderror
         <small id="nameError" style="color:red; display:none;">Name must contain only letters</small>
    </div>

    <!-- Email -->
    <div class="register-form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" 
               value="{{ old('email') }}"
               class="{{ $errors->has('email') ? 'is-invalid' : '' }}"
               placeholder="Enter your email" required>
        @error('email')
            <p class="error">{{ $message }}</p>
        @enderror
    </div>

    <!-- Password -->
    <div class="register-form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password"
               class="{{ $errors->has('password') ? 'is-invalid' : '' }}"
               placeholder="Enter your password" required>
        @error('password')
            <p class="error">{{ $message }}</p>
        @enderror
    </div>

    <!-- Confirm Password -->
    <div class="register-form-group">
        <label for="password_confirmation">Confirm Password</label>
        <input type="password" id="password_confirmation" name="password_confirmation"
               class="{{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}"
               placeholder="Re-enter your password" required>
        @error('password_confirmation')
            <p class="error">{{ $message }}</p>
        @enderror
        <small id="passwordError" style="color:red; display:none;">Passwords do not match</small>
    </div>
    <input type="hidden" name="role" value="passenger">

    <button type="submit" class="register-btn-primary">Register</button>
</form>


            <div class="register-divider"></div>

            <p class="register-no-account">Already have an account?</p>
            <a href="{{ route('login') }}" class="register-btn-outline">Sign In</a>
        </div>
    </div>

</body>
<script>
const form = document.getElementById('registerForm');
const nameField = document.getElementById('name');
const nameError = document.getElementById('nameError');

const password = document.getElementById('password');
const confirmPassword = document.getElementById('password_confirmation');
const errorMsg = document.getElementById('passwordError');

// 🔹 Live validation while typing
confirmPassword.addEventListener('input', () => {
    if (confirmPassword.value && confirmPassword.value !== password.value) {
        confirmPassword.style.border = "2px solid red";
        errorMsg.style.display = "block";
    } else if (confirmPassword.value) {
        confirmPassword.style.border = "2px solid green";
        errorMsg.style.display = "none";
    } else {
        confirmPassword.style.border = "1px solid #ccc";
        errorMsg.style.display = "none";
    }
});
nameField.addEventListener('input', () => {
    const regex = /^[A-Za-z\s]+$/;  // only letters and spaces
    if (!regex.test(nameField.value)) {
        nameField.style.border = "2px solid red";
        nameError.style.display = "block";
    } else {
        nameField.style.border = "2px solid green";
        nameError.style.display = "none";
    }
});

// 🔹 Block form submit if mismatch
form.addEventListener('submit', (e) => {
    if (password.value !== confirmPassword.value) {
        e.preventDefault();
        confirmPassword.style.border = "2px solid red";
        errorMsg.style.display = "block";
    }
});
</script>
</html>
