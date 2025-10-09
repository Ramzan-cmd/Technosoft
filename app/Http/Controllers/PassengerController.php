<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PassengerController extends Controller
{
    protected function dummyRides()
    {
        // Dummy rides dataset used in Find Rides & Ride History
        return [
            [
                'id' => 1,
                'name' => 'John Smith',
                'avatar' => 'https://i.pravatar.cc/80?img=12',
                'vehicle' => 'Toyota Camry',
                'type' => 'Sedan',
                'rating' => 4.8,
                'rating_count' => 125,
                'distance_km' => 2.3,
                'eta_min' => 8,
                'price' => 15.5
            ],
            [
                'id' => 2,
                'name' => 'Maria Garcia',
                'avatar' => 'https://i.pravatar.cc/80?img=8',
                'vehicle' => 'Honda CR-V',
                'type' => 'SUV',
                'rating' => 4.9,
                'rating_count' => 89,
                'distance_km' => 1.8,
                'eta_min' => 6,
                'price' => 18.0
            ],
            [
                'id' => 3,
                'name' => 'Ahmed Khan',
                'avatar' => 'https://i.pravatar.cc/80?img=5',
                'vehicle' => 'Nissan Versa',
                'type' => 'Sedan',
                'rating' => 4.2,
                'rating_count' => 42,
                'distance_km' => 4.5,
                'eta_min' => 14,
                'price' => 12.0
            ],
            [
                'id' => 4,
                'name' => 'Lisa Wong',
                'avatar' => 'https://i.pravatar.cc/80?img=14',
                'vehicle' => 'Tesla Model 3',
                'type' => 'Electric',
                'rating' => 4.7,
                'rating_count' => 210,
                'distance_km' => 0.9,
                'eta_min' => 4,
                'price' => 22.0
            ],
            [
                'id' => 5,
                'name' => 'Mark Davis',
                'avatar' => 'https://i.pravatar.cc/80?img=20',
                'vehicle' => 'Ford Transit',
                'type' => 'Van',
                'rating' => 3.9,
                'rating_count' => 30,
                'distance_km' => 6.2,
                'eta_min' => 20,
                'price' => 25.0
            ],
        ];
    }

public function findRides()
{
    // get rides (always ensure array)
    $rides = $this->dummyRides() ?? [];

    // derive vehicle types from rides (always defined)
    $vehicleTypes = collect($rides)->pluck('type')->unique()->values()->all();

    return view('passenger.find-rides', compact('rides', 'vehicleTypes'));
}



    public function profile()
    {
        $profile = [
            'full_name' => 'Alex Johnson',
            'email' => 'alex.johnson@email.com',
            'phone' => '+1 (555) 123-4567',
            'emergency' => '+1 (555) 987-6543'
        ];

        return view('passenger.profile', compact('profile'));
    }

    public function history()
    {
        // reuse rides as history items (dummy)
        $history = collect($this->dummyRides())->map(function ($r) {
            return array_merge($r, [
                'date' => now()->subDays(rand(1, 20))->format('Y-m-d'),
                'from' => 'Downtown',
                'to' => 'Airport'
            ]);
        })->all();

        return view('passenger.history', compact('history'));
    }

    public function support()
    {
        return view('passenger.support');
    }

    public function updateProfile(Request $request)
    {
        // demo: pretend to save, then redirect back
        return redirect()->route('passenger.profile')->with('status', 'Profile updated (demo).');
    }

    public function submitSupport(Request $request)
    {
        // demo: pretend to submit
        return redirect()->route('passenger.support')->with('status', 'Support request submitted (demo).');
    }
}
