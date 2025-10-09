<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException; // <-- Import for custom errors

class RegistrationController extends Controller // Renamed for better convention
{
    // =================================================================
    // PASSENGER LOGIN & REGISTER
    // =================================================================

    public function showPassengerLogin()
    {
        return view('userlogin.login'); // New view name
    }

    public function showPassengerRegister()
    {
        return view('UserLogin.register'); // New view name
    }

    // =================================================================
    // DRIVER LOGIN & REGISTER
    // =================================================================

    public function showDriverLogin()
    {
        return view('UserLogin.driver-login'); // New view name
    }

    public function showDriverRegister()
    {
        return view('UserLogin.driver-register'); // New view name
    }

    // =================================================================
    // GENERIC LOGIN HANDLER (Role-Enforced)
    // =================================================================

    // This method handles login for both roles but requires the 'role' field from the form.
    public function login(Request $request) {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string', 'min:6'],
            'role' => ['required', 'in:passenger,driver'], // Required from a hidden input in the login form
        ]);
        
        $credentials = $request->only('email', 'password');
        $formRole = $request->role; // Role submitted by the form (e.g., 'driver')

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $userRole = $user->role; // Role in the database (e.g., 'passenger')

            // 1. Enforce Role Match
            if ($userRole !== $formRole) {
                Auth::logout(); // Log them out immediately
                $errorMsg = ($formRole === 'driver') 
                            ? 'This email is registered as a passenger. Please use the passenger login page.'
                            : 'This email is registered as a driver. Please use the driver login page.';

                throw ValidationException::withMessages([
                    'email' => [$errorMsg],
                ]);
            }
            
            // 2. Redirect based on the matched role
            $request->session()->regenerate();
            if ($userRole === 'driver') {
                return redirect()->route('registration');
            }
            return redirect()->route('passenger.dashboard');
        }

        return back()->withErrors([
            'email' => 'Invalid email or password.',
        ])->onlyInput('email');
    }

    // =================================================================
    // GENERIC REGISTER HANDLER
    // =================================================================
    
    // The existing register method is fine, as long as the form passes the 'role' field.
    public function register(Request $request)
    {
         $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'role' => 'required|in:passenger,driver', // The role comes from a hidden field
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role, 
        ]);

        return redirect('/login')->with('success', 'Account created successfully! Please log in.');
    }

    // =================================================================
    // LOGOUT HANDLER
    // =================================================================
    
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('success', 'Logged out successfully.');
    }
}