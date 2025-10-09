<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>@yield('title', 'Passenger Dashboard')</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="{{ asset('css/passenger.css') }}">
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

  <style>
    :root{
      --primary:#2236c2;
      --accent:#22b573;
      --muted:#767777;
      --card-bg: #ffffff;
      --page-bg: #f5f7f9;
      --shadow: 0 10px 22px rgba(15,23,42,0.06);
    }

    html,body{
      height:100%;
      
      background: var(--page-bg);
      font-family: 'Poppins', sans-serif;
      color: #111827;
    }

    /* top bar */
    .topbar {
      height:56px;
      background: #222427;
      color: #fff;
      display:flex;
      align-items:center;
      padding:0 18px;
      font-weight:600;
      box-shadow: 0 2px 6px rgba(0,0,0,0.05);
    }

    .dashboard-wrap {
      display: flex;
      gap: 2rem;
      padding: 2% 7%;
      align-items:flex-start;
    }

    /* sidebar */
    .sidebar {
      width: 300px;
      height: 280px;
      background: var(--card-bg);
      border-radius: 14px;
      padding: 18px;
      box-shadow: var(--shadow);
      position: sticky;
      top: 20px;
      align-self:flex-start;
    }

   

    .side-nav {
      margin-top: 12px;
      display:flex;
      flex-direction: column;
      gap: 8px;
    }

    .side-nav a {
      display:flex;
      align-items:center;
      gap:12px;
      padding: 12px 10px;
      border-radius: 12px;
      color:#1f2937;
      text-decoration:none;
      transition: all .18s ease;
      font-weight:500;
    }

    .side-nav a.active {
      background: var(--primary);
      color:#fff;
      
      box-shadow: 0 6px 18px rgba(47, 64, 191, 0.12);
    }
    .side-nav a.active span svg{
      filter: invert(1);
    }
    .side-nav a:hover { transform: translateY(-2px); }

    /* main panel */
    .main-panel {
      flex: 1;
      min-width: 0;
    }

    .card-panel {
      background: var(--card-bg);
      border-radius: 14px;
      padding: 18px;
      box-shadow: var(--shadow);
      margin-bottom: 18px;
    }

    .search-input {
      height:56px;
      border-radius: 10px;
      background: #f3f4f6;
      border: none;
      padding: 12px 16px;
      font-size:15px;
    }

    .filter-row .form-control, .filter-row .form-select {
      height:48px;
      border-radius:10px;
      background: #f3f4f6;
      border: none;
    }

    /* ride card */
    .ride-card {
      display:flex;
      justify-content:space-between;
      align-items:center;
      padding:16px;
      border-radius: 12px;
      background: white;
      box-shadow: 0 8px 20px rgba(0,0,0,0.04);
      margin-bottom:14px;
    }

    .ride-left {
      display:flex;
      gap:12px;
      align-items:center;
    }

    .ride-left img {
      width:56px;
      height:56px;
      border-radius:50%;
      object-fit:cover;
      border: 3px solid #fff;
      box-shadow: 0 6px 14px rgba(0,0,0,0.06);
    }

    .ride-meta small { color:var(--muted); display:block; }

    .price {
      font-weight:700;
      color: var(--primary);
      font-size:1.25rem;
    }

    /* responsive adjustments */
    @media (max-width: 992px) {
      .dashboard-wrap { padding: 18px; gap: 1rem; flex-direction: column; }
      .sidebar { width:100%; display:flex;   justify-content:space-between; align-items:center; padding:12px 12px; position: relative;  margin-bottom: 3%;}
      .side-nav { flex-direction:column; gap:6px; }
      .side-nav a {width:25rem;   padding:10px; font-size:14px; border-radius:10px; }
      .sidebar .logo { display:none; }
      .topbar { font-size:14px; padding: 8px 12px; }
    }

    @media (max-width: 576px) {
      .ride-left img { width:48px; height:48px; }
      .search-input { height:48px; }
    }
  </style>

  @stack('head')
</head>
<body>
  <div class="topbar">
    <div style="flex:1">SwiftRide Platform Design</div>
    
    <div style="opacity:.9">Passenger Dashboard</div>
    <div> 
        <a href="#" 
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
           style="color: white; text-decoration: none; padding: 5px 10px; border-radius: 4px; transition: background-color 0.2s;">
           Logout
        </a>
    </div>
  </div>
  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

  <div class="dashboard-wrap container-fluid">
    <!-- SIDEBAR -->
    <aside class="sidebar">
      <nav class="side-nav" id="side-nav">


        <a href="{{ route('passenger.dashboard') }}" class="{{ request()->routeIs('passenger.dashboard') ? 'active' : '' }}">
          <span><svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg></span> <span class=" d-lg-inline">Find Rides</span>
        </a>


        <a href="{{ route('passenger.profile') }}" class="{{ request()->routeIs('passenger.profile') ? 'active' : '' }}">
          <span>
<svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5 21C5 17.134 8.13401 14 12 14C15.866 14 19 17.134 19 21M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg></span> <span class=" d-lg-inline">Profile</span>
        </a>


        <a href="{{ route('passenger.history') }}" class="{{ request()->routeIs('passenger.history') ? 'active' : '' }}">
          <span><svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M12 8V12L14.5 14.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M5.60414 5.60414L5.07381 5.07381V5.07381L5.60414 5.60414ZM4.33776 6.87052L3.58777 6.87429C3.58984 7.28556 3.92272 7.61844 4.33399 7.62051L4.33776 6.87052ZM6.87954 7.6333C7.29375 7.63539 7.63122 7.30129 7.6333 6.88708C7.63538 6.47287 7.30129 6.1354 6.88708 6.13332L6.87954 7.6333ZM5.07496 4.3212C5.07288 3.90699 4.73541 3.5729 4.3212 3.57498C3.90699 3.57706 3.5729 3.91453 3.57498 4.32874L5.07496 4.3212ZM3.82661 10.7849C3.88286 10.3745 3.59578 9.99627 3.1854 9.94002C2.77503 9.88377 2.39675 10.1708 2.3405 10.5812L3.82661 10.7849ZM18.8622 5.13777C15.042 1.31758 8.86873 1.27889 5.07381 5.07381L6.13447 6.13447C9.33358 2.93536 14.5571 2.95395 17.8016 6.19843L18.8622 5.13777ZM5.13777 18.8622C8.95796 22.6824 15.1313 22.7211 18.9262 18.9262L17.8655 17.8655C14.6664 21.0646 9.44291 21.0461 6.19843 17.8016L5.13777 18.8622ZM18.9262 18.9262C22.7211 15.1313 22.6824 8.95796 18.8622 5.13777L17.8016 6.19843C21.0461 9.44291 21.0646 14.6664 17.8655 17.8655L18.9262 18.9262ZM5.07381 5.07381L3.80743 6.34019L4.86809 7.40085L6.13447 6.13447L5.07381 5.07381ZM4.33399 7.62051L6.87954 7.6333L6.88708 6.13332L4.34153 6.12053L4.33399 7.62051ZM5.08775 6.86675L5.07496 4.3212L3.57498 4.32874L3.58777 6.87429L5.08775 6.86675ZM2.3405 10.5812C1.93907 13.5099 2.87392 16.5984 5.13777 18.8622L6.19843 17.8016C4.27785 15.881 3.48663 13.2652 3.82661 10.7849L2.3405 10.5812Z" fill="#1C274C"/>
</svg></span> <span class=" d-lg-inline">Ride History</span>
        </a>


        <a href="{{ route('passenger.support') }}" class="{{ request()->routeIs('passenger.support') ? 'active' : '' }}">
          <span><svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M21.97 18.33C21.97 18.69 21.89 19.06 21.72 19.42C21.55 19.78 21.33 20.12 21.04 20.44C20.55 20.98 20.01 21.37 19.4 21.62C18.8 21.87 18.15 22 17.45 22C16.43 22 15.34 21.76 14.19 21.27C13.04 20.78 11.89 20.12 10.75 19.29C9.6 18.45 8.51 17.52 7.47 16.49C6.44 15.45 5.51 14.36 4.68 13.22C3.86 12.08 3.2 10.94 2.72 9.81C2.24 8.67 2 7.58 2 6.54C2 5.86 2.12 5.21 2.36 4.61C2.6 4 2.98 3.44 3.51 2.94C4.15 2.31 4.85 2 5.59 2C5.87 2 6.15 2.06 6.4 2.18C6.66 2.3 6.89 2.48 7.07 2.74L9.39 6.01C9.57 6.26 9.7 6.49 9.79 6.71C9.88 6.92 9.93 7.13 9.93 7.32C9.93 7.56 9.86 7.8 9.72 8.03C9.59 8.26 9.4 8.5 9.16 8.74L8.4 9.53C8.29 9.64 8.24 9.77 8.24 9.93C8.24 10.01 8.25 10.08 8.27 10.16C8.3 10.24 8.33 10.3 8.35 10.36C8.53 10.69 8.84 11.12 9.28 11.64C9.73 12.16 10.21 12.69 10.73 13.22C11.27 13.75 11.79 14.24 12.32 14.69C12.84 15.13 13.27 15.43 13.61 15.61C13.66 15.63 13.72 15.66 13.79 15.69C13.87 15.72 13.95 15.73 14.04 15.73C14.21 15.73 14.34 15.67 14.45 15.56L15.21 14.81C15.46 14.56 15.7 14.37 15.93 14.25C16.16 14.11 16.39 14.04 16.64 14.04C16.83 14.04 17.03 14.08 17.25 14.17C17.47 14.26 17.7 14.39 17.95 14.56L21.26 16.91C21.52 17.09 21.7 17.3 21.81 17.55C21.91 17.8 21.97 18.05 21.97 18.33Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10"/>
</svg></span> <span class=" d-lg-inline">Contact Support</span>
        </a>
      </nav>
    </aside>

    <!-- MAIN -->
    <main class="main-panel">
      @if(session('status'))
        <div class="card-panel alert alert-success">{{ session('status') }}</div>
      @endif

      @yield('content')
    </main>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  @stack('scripts')
</body>
</html>
