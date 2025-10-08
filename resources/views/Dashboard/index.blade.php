<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passenger Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
@if(session('success'))
    <div style="color:green;">
        {{ session('success') }}
    </div>
@endif

    <div class="dashboard-container">

        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-logo">
                <i class="fa-solid fa-bus"></i> MyApp
            </div>
            <ul class="sidebar-menu">
                <li><a href="#"><i class="fa-solid fa-house"></i> Dashboard</a></li>
                <li><a href="#"><i class="fa-solid fa-user"></i> Profile</a></li>
                <li><a href="#"><i class="fa-solid fa-car"></i> My Rides</a></li>
                <li><a href="#"><i class="fa-solid fa-gear"></i> Settings</a></li>
                <li>
             
</li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Header -->
            <header class="header">
                <h2>Welcome, {{ Auth::user()->name ?? 'User' }}</h2>
                <div class="header-actions">
                    <i class="fa-solid fa-bell"></i>
                    <i class="fa-solid fa-user-circle"></i>
                     <form action="{{ route('logout') }}" method="POST" style="display: inline;">
    @csrf
    <button type="submit" style="background: none; border: none; color: #1f3bb3; cursor: pointer;">
        Logout
    </button>
</form>
                </div>
            </header>

            <!-- Content -->
            <section class="content">
                <h3>Dashboard Overview</h3>
                <div class="cards">
                    <div class="card">
                        <h4>Total Rides</h4>
                        <p>12</p>
                    </div>
                    <div class="card">
                        <h4>Upcoming</h4>
                        <p>3</p>
                    </div>
                    <div class="card">
                        <h4>Completed</h4>
                        <p>9</p>
                    </div>
                </div>
            </section>
        </main>

    </div>

</body>
</html>
