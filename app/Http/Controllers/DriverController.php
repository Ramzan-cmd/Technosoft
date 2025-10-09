<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DriverController extends Controller
{
    /**
     * Show the main Driver Dashboard (or Registration Status page).
     * Corresponds to route: GET /driver/dashboard
     */
    public function dashboard()
    {
        // For a driver, the main dashboard might be the Registration page initially,
        // or a rides overview if registration is approved.
        // We'll redirect to the registration page for this example.
        return redirect()->route('registration');
    }

    /**
     * Show the Registration Status page.
     * Corresponds to route: GET /driver/registration
     */
    public function registration()
    {
        // Data needed for the registration view (e.g., driver details, documents)
        $driver = Auth::user(); 
        
        return view('driver.registration', compact('driver'));
    }

    /**
     * Show the Availability management page.
     * Corresponds to route: GET /driver/availability
     */
    public function availability()
    {
        return view('driver.availability');
    }

    /**
     * Show the Set Fares management page.
     * Corresponds to route: GET /driver/setfare
     */
    public function setFare()
    {
        return view('driver.setfare');
    }

    /**
     * Show the Reviews and Rating page.
     * Corresponds to route: GET /driver/review
     */
    public function review()
    {
        // You might fetch reviews and rating data here
        $reviews = []; // Fetch review data from database
        $rating = 4.8; // Calculate overall rating

        return view('driver.review', compact('reviews', 'rating'));
    }

    /**
     * Show the Driver Profile page.
     * Corresponds to route: GET /driver/profile
     */
    public function profile()
    {
        // Fetch the authenticated user's data
        $driver = Auth::user();

        return view('driver.profile', compact('driver'));
    }

    // You can add methods for POST/PUT requests here later, e.g.,
    // public function updateProfile(Request $request) { ... }
}