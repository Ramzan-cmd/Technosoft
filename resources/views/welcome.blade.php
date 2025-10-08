<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="{{ asset('css/home.css') }}">
     <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
          <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
        <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <title>Welcome Page</title>


</head>
<body>
    <!-- Header -->
 <header class="navbar">
  <div class="logo">
      <div class="image">
        <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 24.00 24.00" fill="none" stroke="#000000" stroke-width="1.6799999999999997" stroke-linecap="round" stroke-linejoin="round">

<g id="SVGRepo_bgCarrier" stroke-width="0"/>

<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.096"/>

<g id="SVGRepo_iconCarrier"> <path d="M14 16H9m10 0h3v-3.15a1 1 0 00-.84-.99L16 11l-2.7-3.6a1 1 0 00-.8-.4H5.24a2 2 0 00-1.8 1.1l-.8 1.63A6 6 0 002 12.42V16h2"/> <circle cx="6.5" cy="16.5" r="2.5"/> <circle cx="16.5" cy="16.5" r="2.5"/> </g>

</svg>
      </div>
      SwiftRide
  </div>

  <!-- Desktop nav -->
  <nav>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">For Passengers</a></li>
      <li><a href="#">For Drivers</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </nav>

  <div class="buttons">
    <a href="#" class="btn-outline">Sign In</a>
    <a href="#" class="btn-primary23">Get Started</a>
  </div>

  <!-- Hamburger -->
  <div class="hamburger" id="hamburger"><i class="fas fa-bars"></i></div>
</header>

<!-- Mobile menu -->
<div class="mobile-menu" id="mobileMenu">
  <ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">For Passengers</a></li>
    <li><a href="#">For Drivers</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Contact</a></li>
  </ul>
  <div class="footer-divider" role="separator"></div>
  <div class="buttons">
    <a href="#" class="btn-outline23">Sign In</a>
    <a href="#" class="btn-primary23">Get Started</a>
  </div>
</div>
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-left">
            <span class="badge23">🚖 Trusted by 10,000+ riders</span>
            <h1>Find Your Ride. <br><span>Connect Instantly.</span></h1>
            <p>Connect with verified drivers in your area instantly. 
               No apps needed – just direct WhatsApp contact for quick, reliable rides.</p>

            <div class="ride-box">
                <p class="ride-label">Where do you want to go?</p>
                <div class="ride-input">
                    <input type="text" placeholder="Enter pickup location">
                    <button class="auto-detect"><i class="bi bi-send"></i> Auto-detect</button>
                </div>
                <div class="ride-actions">
                    <button class="btn-primary1"><i class="fa-solid fa-magnifying-glass"></i>
Find Ride <i class="fa-solid fa-arrow-right"></i></button>
                    <button class="btn-outline1">Register as Driver <i class="fa-solid fa-arrow-right"></i></button>
                </div>
      
            </div>
                      <div class='data'>
  <div class="row">
    <div class="point1"></div>
    <p>Verified Driver</p>
  </div>
  <div class="row">
    <div class="point2"></div>
    <p>24/7 Support</p>
  </div>
  <div class="row">
    <div class="point3"></div>
    <p>Secure Platform</p>
  </div>
</div>
        </div>

        <div class="hero-right">
            <div class="outline">
            <div class="driver-card">
                
                <div class="card-text">
                    <h4>Ready to Serve</h4>
                    <p>Professional drivers nearby</p>
                </div>
            </div>
            </div>

            <div class="stats">
                <div class="stat">
                    <h2 class="s1">2.5k+</h2>
                    <p>Active Drivers</p>
                </div>
                <div class="stat">
                    <h2 class="s2">50k+</h2>
                    <p>Happy Riders</p>
                </div>
                <div class="stat">
                    <h2 class="s3">4.8 ⭐</h2>
                    <p>Average Rating</p>
                </div>
                <div class="stat">
                    <h2 class="s4">99%</h2>
                    <p>Success Rate</p>
                </div>
            </div>
        </div>
    </section>

<section class="how-works-section">
  <div class="container">
    <div class="intro">
      <div class="tag">✨ Simple Process</div>
      <h2 class="title">How <span class="brand">SwiftRide</span> Works</h2>
      <p class="subtitle">
        Getting a ride has never been easier. Follow these simple steps and you'll be on your way in minutes.
      </p>
    </div>

    <div class="steps-row">
      {{-- Step 1 --}}
      <article class="step-card">
        <div class="icon-wrap">
          <!-- simple location pin icon (SVG) -->
          <div class="icon-bg1">
           <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-geo-alts" viewBox="0 0 16 16">
  <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
  <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
</svg>
          </div>
          <div class="step-number">01</div>
        </div>
        <div class="contents">
            <h3 class="step-title">Enter Location</h3>
        <p class="step-desc">
          Simply enter your pickup location using our search bar or enable auto-detection for instant location finding.
        </p>
        <div class="card-action">→</div>
        </div>
        
        <div class="line"></div>
      </article>
    {{-- <div class="line1"></div> --}}
      {{-- Step 2 --}}
      <article class="step-card">
        <div class="icon-wrap">
          <div class="icon-bg2">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
</svg>
          </div>
          <div class="step-number">02</div>
        </div>
        <div class="contents">
        <h3 class="step-title">View Drivers</h3>
        <p class="step-desc">
          Browse through available verified drivers in your area with ratings, vehicle details, and estimated fares.
        </p>
        <div class="card-action">→</div>
        </div>
        <div class="line"></div>
      </article>
{{-- <div class="line1"></div> --}}
      {{-- Step 3 --}}
      <article class="step-card">
        <div class="icon-wrap">
          <div class="icon-bg3">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
  <path d="M2.678 11.894a1 1 0 0 1 .287.801 11 11 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8 8 0 0 0 8 14c3.996 0 7-2.807 7-6s-3.004-6-7-6-7 2.808-7 6c0 1.468.617 2.83 1.678 3.894m-.493 3.905a22 22 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a10 10 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105"/>
</svg>
          </div>
          <div class="step-number">03</div>
        </div>
         <div class="contents">
        <h3 class="step-title">Contact via WhatsApp</h3>
        <p class="step-desc">
          Connect instantly with your chosen driver through WhatsApp for quick communication and ride confirmation.
        </p>
        <div class="card-action">→</div>
         </div>
        <div class="line"></div>
      </article>
      {{-- <div class="line1"></div> --}}
      {{-- Step 4 --}}
      <article class="step-card">
        <div class="icon-wrap">
          <div class="icon-bg4">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
  <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z"/>
</svg>
          </div>
          <div class="step-number">04</div>
        </div>
         <div class="contents">
        <h3 class="step-title">Rate & Feedback</h3>
        <p class="step-desc">
          After your ride, rate your experience and provide feedback to help maintain our high service standards.
        </p>
         </div>
      </article>
    </div>
  </div>
</section>
<section class="Feature">
  <div class="container">
    <div class="intro">
      <div class="tag">✨ Powerful Feature</div>
      <h2 class="title">Features & <span class="brand">Benefits</span></h2>
      <p class="subtitle">
        Everything you need for a seamless ride-sharing experience, whether you're a passenger or driver.
      </p>
    </div>
    <div class="passenger-feature">
        <div class="feature-title">
            <h1 class="highlight">For Passenger </h1> <h1 class="head">Your Journey, Simplified </h1>
        </div>
        
        <div class='description'>
            <p>Experience hassle-free transportation with features designed for your convenience and safety.</p>
            <Button>
                Get started <i class="fa-solid fa-arrow-right"></i>
            </Button>
        </div>
        <!-- Main Section -->
<section class="tracking-section">
  <div class="tracking-container">
    <!-- Left Content -->
    <div class="tracking-content">
      <h2>Smart Location Tracking</h2>
      <p>
        Find your ride with precision. Our advanced GPS technology ensures
        accurate pickup locations every time.
      </p>
      <ul>
        <li>Real-time GPS tracking</li>
      </ul>
    </div>

    <!-- Right Image -->
    <div class="tracking-image">
      <img src="{{ asset('images/Passenger.jpg') }}" alt="Driver steering car" />
    </div>
  </div>
</section>

<!-- Features Section -->
<section class="features">
  <div class="feature-card">
    <div class="icon">
 <div class="icon-wrap">
          <!-- simple location pin icon (SVG) -->
          <div class="iconbgg1">
           <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-geo-alts" viewBox="0 0 16 16">
  <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
  <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
</svg>
          </div>
        </div>
    </div>
    <h3>Smart Location Finding</h3>
    <p>
      Auto-detect your location or manually enter pickup points with our
      intelligent search system.
    </p>
  </div>

    <div class="feature-card">
    <div class="icon">
 <div class="icon-wrap">
          <!-- simple location pin icon (SVG) -->
          <div class="iconbgg2">
           <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
</svg>
          </div>
        </div>
    </div>
    <h3>Verified Drivers</h3>
    <p>
      All drivers undergo thorough background checks and document verification for your safety.
    </p>
  </div>
    <div class="feature-card">
    <div class="icon">
 <div class="icon-wrap">
          <!-- simple location pin icon (SVG) -->
          <div class="iconbgg3">
           <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-star1" viewBox="0 0 16 16">
  <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z"/>
</svg>
          </div>
        </div>
    </div>
    <h3>Rating System</h3>
    <p>
      Choose drivers based on real passenger reviews and ratings to ensure quality service.
    </p>
  </div>
    <div class="feature-card">
    <div class="icon">
 <div class="icon-wrap">
          <!-- simple location pin icon (SVG) -->
          <div class="iconbgg4">
           <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
  <path d="M2.678 11.894a1 1 0 0 1 .287.801 11 11 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8 8 0 0 0 8 14c3.996 0 7-2.807 7-6s-3.004-6-7-6-7 2.808-7 6c0 1.468.617 2.83 1.678 3.894m-.493 3.905a22 22 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a10 10 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105"/>
</svg>
          </div>
        </div>
    </div>
    <h3>Instant Communication</h3>
    <p>
      Connect with drivers directly through WhatsApp for quick and convenient coordination.
    </p>
  </div>

    <div class="feature-card">
    <div class="icon">
 <div class="icon-wrap">
          <!-- simple location pin icon (SVG) -->
          <div class="iconbgg5">
           <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
  <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022zm2.004.45a7 7 0 0 0-.985-.299l.219-.976q.576.129 1.126.342zm1.37.71a7 7 0 0 0-.439-.27l.493-.87a8 8 0 0 1 .979.654l-.615.789a7 7 0 0 0-.418-.302zm1.834 1.79a7 7 0 0 0-.653-.796l.724-.69q.406.429.747.91zm.744 1.352a7 7 0 0 0-.214-.468l.893-.45a8 8 0 0 1 .45 1.088l-.95.313a7 7 0 0 0-.179-.483m.53 2.507a7 7 0 0 0-.1-1.025l.985-.17q.1.58.116 1.17zm-.131 1.538q.05-.254.081-.51l.993.123a8 8 0 0 1-.23 1.155l-.964-.267q.069-.247.12-.501m-.952 2.379q.276-.436.486-.908l.914.405q-.24.54-.555 1.038zm-.964 1.205q.183-.183.35-.378l.758.653a8 8 0 0 1-.401.432z"/>
  <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0z"/>
  <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5"/>
</svg>
          </div>
        </div>
    </div>
    <h3>Ride History</h3>
    <p>
      Keep track of all your rides with detailed history and easy rebooking options.
    </p>
  </div>

    <div class="feature-card">
    <div class="icon">
 <div class="icon-wrap">
          <!-- simple location pin icon (SVG) -->
          <div class="iconbgg6">
           <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-shield" viewBox="0 0 16 16">
  <path d="M5.338 1.59a61 61 0 0 0-2.837.856.48.48 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.7 10.7 0 0 0 2.287 2.233c.346.244.652.42.893.533q.18.085.293.118a1 1 0 0 0 .101.025 1 1 0 0 0 .1-.025q.114-.034.294-.118c.24-.113.547-.29.893-.533a10.7 10.7 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.8 11.8 0 0 1-2.517 2.453 7 7 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7 7 0 0 1-1.048-.625 11.8 11.8 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 63 63 0 0 1 5.072.56"/>
</svg>
          </div>
        </div>
    </div>
    <h3>Safety First</h3>
    <p>
      24/7 support, emergency contacts, and comprehensive safety measures for peace of mind.
    </p>
  </div>

  
</section>
<div class="passenger-button">
    <button>Get Started as a Passenger  <i class="fa-solid fa-arrow-right"></i></button>
</div>

    </div>

 <div class="driver-feature">
  <div class="feature-title">
            <h1 class="highlight1">For Driver </h1> <h1 class="head">Drive, Earn, Succeed </h1>
        </div>
  <div class="driver-description">
    <p>
      Empowering drivers with tools to manage rides efficiently, increase
      earnings, and ensure safety on every journey.
    </p>
    <button>
      Join as Driver <i class="fa-solid fa-arrow-right"></i>
    </button>
  </div>

  <!-- Main Section -->
  <section class="driver-tracking-section">
    <div class="driver-tracking-container">
      <!-- Left Content -->
      <div class="driver-tracking-image">
        <img src="{{ asset('images/driver.jpg') }}" alt="Driver app demo" />
      </div>
      <div class="driver-tracking-content">
        <h2>Advanced Driver Dashboard</h2>
        <p>
          Complete control over your driving business. Track earnings, manage availability, and connect with passengers seamlessly.
        </p>
        <ul>
          <li>Real-time earnings tracking
</li>
<li> Instant availability toggle</li>

        </ul>
      </div>

      <!-- Right Image -->
      
    </div>
  </section>

  <!-- Features Section -->
  <section class="features">
  <div class="feature-card">
    <div class="icon">
 <div class="icon-wrap">
          <!-- simple location pin icon (SVG) -->
          <div class="iconbg1">
           <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
  <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73z"/>
</svg>
          </div>
        </div>
    </div>
    <h3>Set Your Fare</h3>
    <p>
    Complete control over your pricing with flexible base fares and per-kilometer rates.


    </p>
  </div>

    <div class="feature-card">
    <div class="icon">
 <div class="icon-wrap">
          <!-- simple location pin icon (SVG) -->
          <div class="iconbg2">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
  <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
</svg>
          </div>
        </div>
    </div>
    <h3>Flexible Schedule</h3>
    <p>
     
Work when you want with our availability toggle. Perfect for full-time or part-time earning.
    </p>
  </div>
    <div class="feature-card">
    <div class="icon">
 <div class="icon-wrap">
          <!-- simple location pin icon (SVG) -->
          <div class="iconbg3">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-file-earmark-check" viewBox="0 0 16 16">
  <path d="M10.854 7.854a.5.5 0 0 0-.708-.708L7.5 9.793 6.354 8.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0z"/>
  <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
</svg>
          </div>
        </div>
    </div>
    <h3>Document Verification</h3>
    <p>
      
Secure document upload and verification system to establish trust with passengers.
    </p>
  </div>
    <div class="feature-card">
    <div class="icon">
 <div class="icon-wrap">
          <!-- simple location pin icon (SVG) -->
          <div class="iconbg4">
       
<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-star1" viewBox="0 0 16 16">
  <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z"/>
</svg>
          </div>
        </div>
    </div>
    <h3>Build Your Reputation</h3>
    <p>
      
Earn positive reviews and build a strong reputation to attract more passengers.
    </p>
  </div>

    <div class="feature-card">
    <div class="icon">
 <div class="icon-wrap">
          <!-- simple location pin icon (SVG) -->
          <div class="iconbg5">
           <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
  <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492M5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0"/>
  <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115z"/>
</svg>
          </div>
        </div>
    </div>
    <h3>Profile Management</h3>
    <p>
      
Complete control over your driver profile, vehicle details, and service preferences.
    </p>
  </div>

    <div class="feature-card">
    <div class="icon">
 <div class="icon-wrap">
          <!-- simple location pin icon (SVG) -->
          <div class="iconbg6">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
  <path d="M2.678 11.894a1 1 0 0 1 .287.801 11 11 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8 8 0 0 0 8 14c3.996 0 7-2.807 7-6s-3.004-6-7-6-7 2.808-7 6c0 1.468.617 2.83 1.678 3.894m-.493 3.905a22 22 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a10 10 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105"/>
</svg>

          </div>
        </div>
    </div>
    <h3>Direct Communication
</h3>
    <p>
WhatsApp integration for seamless communication with passengers and support.
     
    </p>
  </div>

  
</section>
<div class="driver-button">
    <button>Join as Driver  <i class="fa-solid fa-arrow-right"></i></button>
</div>
</div>

</div>
  </div>
</section>
<section class="experience">
<div class="container">
    <div class="intro">
      <div class="tag">✨ Experience SwiftRide</div>
      <h2 class="title">See the <span class="brand">SwiftRide</span>Difference</h2>
      <p class="subtitle">
        Real people, real experiences. Discover why thousands choose SwiftRide for their daily transportation needs.
      </p>
    </div>
</div>



<section class="offers-section">
  <div class="container">
    <div class="offers-grid">
      <!-- Card 1 -->
      <article class="offer-card">
        <div class="card-media" style="background-image:url('{{ asset('images/card1.jpg') }}')">
          <div class="media-badges">
            <div class="meta-pill">
              <!-- user-family icon -->
              <i class="fa-solid fa-users"></i>
              <span>Family-Friendly</span>
            </div>
          </div>

          <h3 class="media-title">Happy Families</h3>
        </div>

        <div class="card-body">
          <p class="card-desc">
            Safe, reliable rides for families with children. Our verified drivers ensure comfort and security for all passengers.
          </p>

          <div class="card-footer">
            <div class="rating">
              <svg class="star" width="14" height="14" viewBox="0 0 16 16" fill="currentColor" aria-hidden>
                <path d="M2.866 14.85c-.078.444.36.79.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73z"/>
              </svg>
              <span class="rating-value">4.9/5</span>
            </div>

            <div class="chips">
              <span class="chip"><li>Child-safe vehicles</li> </span>
            </div>
          </div>
        </div>
      </article>

      <!-- Card 2 -->
      <article class="offer-card">
        <div class="card-media" style="background-image:url('{{ asset('images/card2.jpg') }}')">
          <div class="media-badges">
            <div class="meta-pill">
              <!-- car icon -->
     <i class="fa-solid fa-car"></i>
              <span>Professional</span>
            </div>
          </div>

          <h3 class="media-title">Expert Drivers</h3>
        </div>

        <div class="card-body">
          <p class="card-desc">
            Experienced, background-checked drivers who prioritize your safety and comfort on every journey.
          </p>

          <div class="card-footer">
            <div class="chips">
                
              <span class="chip verified"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-shield" viewBox="0 0 16 16">
  <path d="M5.338 1.59a61 61 0 0 0-2.837.856.48.48 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.7 10.7 0 0 0 2.287 2.233c.346.244.652.42.893.533q.18.085.293.118a1 1 0 0 0 .101.025 1 1 0 0 0 .1-.025q.114-.034.294-.118c.24-.113.547-.29.893-.533a10.7 10.7 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.8 11.8 0 0 1-2.517 2.453 7 7 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7 7 0 0 1-1.048-.625 11.8 11.8 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 63 63 0 0 1 5.072.56"/>
</svg>Verified</span>
              <span class="chip"><li>Licensed &amp; Insured</li> </span>
            </div>
          </div>
        </div>
      </article>

      <!-- Card 3 -->
      <article class="offer-card">
        <div class="card-media" style="background-image:url('{{ asset('images/card3.jpg') }}')">
          <div class="media-badges">
            <div class="meta-pill">
              <!-- star icon -->
              <i class="fa-regular fa-star"></i>
              <span>Business Class</span>
            </div>
          </div>

          <h3 class="media-title">Business Travel</h3>
        </div>

        <div class="card-body">
          <p class="card-desc">
            Reliable, punctual service for business professionals. Wi-Fi enabled vehicles and quiet environments.
          </p>

          <div class="card-footer">
            <div class="chips">
              <span class="chip premium"><i class="fa-solid fa-car"></i> Premium</span>
              <span class="chip"><li>Wi-Fi Available</li> </span>
            </div>
          </div>
        </div>
      </article>
    </div>
  </div>
   <section class="car-section">
    <div class="car-container">
      <!-- Left Content -->
      <div class="car-image">
        <img src="{{ asset('images/car3.jpg') }}" alt="Driver app demo" />
      </div>
      <div class="car-content">
        <div class="tag1">✨ Premium SwiftRide</div>
        <h2>Clean, Modern Vehicles</h2>
        <p>
          Every vehicle in our fleet is maintained to the highest standards. Experience comfort, cleanliness, and modern amenities on every ride.
        </p>
        <ul>
          <li>Regular sanitization
</li>
<li> Air conditioning & heating</li>
<li> Phone charging ports</li>
        </ul>
        <button> Experience Now </button>
      </div>

      <!-- Right Image -->
      
    </div>
  </section>
</section>
<section class="carimages">
     <div class="carimage" style="background-image:url('{{ asset('images/car1.jpg') }}')">
          
            <div class="meta">
              <!-- car icon -->
     <i class="fa-solid fa-car"></i>
              <span>
Safety First
</span>
            </div>
             <h3 class="heading">Advanced Safety</h3>
          <p class="text">
Real-time tracking and emergency support</p>
          </div>

         
      
 <div class="carimage" style="background-image:url('{{ asset('images/car2.jpg') }}')">
          
            <div class="meta">
              <!-- car icon -->
     <i class="fa-solid fa-car"></i>
              <span>
Safety First
</span>
            </div>
             <h3 class="heading">Advanced Safety</h3>
          <p class="text">
Real-time tracking and emergency support</p>
          </div>

</section>


</section>

<section class="Live-Preview">
<div class="container">
    <div class="intro">
      <div class="tag">✨ Live Preview</div>
      <h2 class="title">See Available <span class="brand">Rides</span> Near You</h2>
      <p class="subtitle">
        Get a real-time view of available drivers in your area with detailed information to help you choose the perfect ride.
      </p>
    </div>
</div>

<div class="split">
    <div class="left-side">
      <div class="container">
        <p class="tag0">John - $15.50</p>
        <p class="tag2">Maria - $18.00</p>
        <p class="tag3">David - $12.75</p>
        <p class="tag4">📍 Your Location</p>
      </div>
      <div class="downtown">
        <div class="icon">
             <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-geo-alts" viewBox="0 0 16 16">
  <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
  <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
</svg>
        </div>
        <div class="content">
            <p class="up">Downtown Area</p>
            <p class="down">4 drivers available nearby</p>
        </div>
         </div>
    </div>
    <div class="right-side">
     <div class="available-drivers-section">
    <div class="swiftride-header">
        <h2>Available Drivers</h2>
        <button class="drivers-available-btn">3 Available</button>
    </div>
    <div class="swiftride-drivers-list">
        <!-- Driver 1 -->
        <div class="swiftride-driver-card">
            <img src="{{ asset('images/person1.jpg') }}" alt="John Smith" class="driver-photo">
            <div class="driver-info">
                <h3>John Smith</h3>
                <p><i class="fa fa-car"></i> Toyota Camry <span class="car-type">Sedan</span></p>
                <div class="ratings-time-distance">
                    <span class="rating">⭐ 4.8 (125)</span>
                    <span class="time-distance"><i class="fa fa-clock"></i> 8 min</span>
                    <span class="time-distance">2.3 km</span>
                </div>
            </div>
            <div class="price-contact">
                <div class="price">$15.5</div>
                <button class="contact-btn">Contact</button>
            </div>
        </div>

        <!-- Driver 2 -->
        <div class="swiftride-driver-card">
            <img src="{{ asset('images/maria_garcia.jpg') }}" alt="Maria Garcia" class="driver-photo placeholder">
            <div class="driver-info">
                <h3>Maria Garcia</h3>
                <p><i class="fa fa-car"></i> Honda CR-V <span class="car-type">SUV</span></p>
                <div class="ratings-time-distance">
                    <span class="rating">⭐ 4.9 (89)</span>
                    <span class="time-distance"><i class="fa fa-clock"></i> 6 min</span>
                    <span class="time-distance">1.8 km</span>
                </div>
            </div>
            <div class="price-contact">
                <div class="price">$18</div>
                <button class="contact-btn">Contact</button>
            </div>
        </div>

        <!-- Driver 3 -->
        <div class="swiftride-driver-card">
            <img src="{{ asset('images/person2.jpg') }}" alt="David Chen" class="driver-photo">
            <div class="driver-info">
                <h3>David Chen</h3>
                <p><i class="fa fa-car"></i> Honda Civic <span class="car-type">Hatchback</span></p>
                <div class="ratings-time-distance">
                    <span class="rating">⭐ 4.7 (67)</span>
                    <span class="time-distance"><i class="fa fa-clock"></i> 12 min</span>
                    <span class="time-distance">3.1 km</span>
                </div>
            </div>
            <div class="price-contact">
                <div class="price">$12.75</div>
                <button class="contact-btn">Contact</button>
            </div>
        </div>

        <!-- Driver 4 Unavailable -->
        <div class="swiftride-driver-card unavailable">
            <img src="{{ asset('images/person4.jpg') }}" alt="Sarah Johnson" class="driver-photo">
            <div class="driver-info">
                <h3>Sarah Johnson</h3>
                <p><i class="fa fa-car"></i> Nissan Rogue <span class="car-type">SUV</span></p>
                <div class="ratings-time-distance">
                    <span class="rating">⭐ 4.6 (93)</span>
                    <span class="time-distance"><i class="fa fa-clock"></i> 10 min</span>
                    <span class="time-distance">2.7 km</span>
                </div>
            </div>
            <div class="price-contact unavailable-price">
                <div class="price">$16.25</div>
                <button class="contact-btn" disabled>Unavailable</button>
            </div>
        </div>
    </div>
    <div class="swiftride-action">
        <p><span>Want to see more drivers?</span><br/>
Sign up to access all available drivers in your area with real-time updates.</p>
<button>Get Started</button>
    </div>
</div>

    </div>
</div>

</section>




<section class="Choose-Us">
<div class="container">
    <div class="intro">
      <div class="tag">✨ Why Choose Us</div>
      <h2 class="title">Why <span class="brand">SwiftRide</span> is Different</h2>
      <p class="subtitle">
        Compare SwiftRide with traditional ride-sharing platforms and see why we're the smarter choice for both passengers and drivers.
      </p>
    </div>
</div>
<div class="swiftride-benefits-section">
    <div class="swiftride-benefit-cards">
        <!-- For Passengers -->
        <div class="swiftride-benefit-card swiftride-benefit-passengers">
            <div class="swiftride-benefit-icon passenger">
                <i class="fa fa-users"></i>
            </div>
            <h2 class="swiftride-benefit-title">For Passengers</h2>
            <div class="swiftride-benefit-subtitle">
                Why passengers love SwiftRide over traditional platforms
            </div>
            <ul class="swiftride-benefit-list">
                <li><i class="fa fa-check"></i> Choose your preferred driver</li>
                <li><i class="fa fa-check"></i> See exact fare before booking</li>
                <li><i class="fa fa-check"></i> Direct WhatsApp communication</li>
                <li><i class="fa fa-check"></i> No surge pricing surprises</li>
                <li><i class="fa fa-check"></i> Build relationships with drivers</li>
            </ul>
            <a href="#" class="swiftride-benefit-btn passenger">
                Start as Passenger <span class="arrow">&rarr;</span>
            </a>
        </div>
        <!-- For Drivers -->
        <div class="swiftride-benefit-card swiftride-benefit-drivers">
            <div class="swiftride-benefit-icon driver">
                <i class="fa fa-car"></i>
            </div>
            <h2 class="swiftride-benefit-title">For Drivers</h2>
            <div class="swiftride-benefit-subtitle">
                Why drivers earn more and work better with SwiftRide
            </div>
            <ul class="swiftride-benefit-list">
                <li><i class="fa fa-check"></i> Set your own rates and keep 100%</li>
                <li><i class="fa fa-check"></i> No platform commission fees</li>
                <li><i class="fa fa-check"></i> Choose your passengers</li>
                <li><i class="fa fa-check"></i> Work completely on your schedule</li>
                <li><i class="fa fa-check"></i> Build your own customer base</li>
            </ul>
            <a href="#" class="swiftride-benefit-btn driver">
                Start as Driver <span class="arrow">&rarr;</span>
            </a>
        </div>
    </div>
</div>
<div class="swiftride-feature-comparison-section">
    <h2 class="swiftride-feature-title">Feature Comparison</h2>
    <p class="swiftride-feature-subtitle">
        See how SwiftRide compares to traditional ride-sharing platforms
    </p>

    <!-- Scrollable Wrapper -->
    <div class="swiftride-feature-table-wrapper">
        <div class="swiftride-feature-table">
            <div class="swiftride-feature-table-header">
                <div class="swiftride-feature-label">Features</div>
                <div class="swiftride-platform-header">
                    <div class="swiftride-platform-name active">SwiftRide</div>
                    <div class="swiftride-platform-subtitle">Our Platform</div>
                </div>
                <div class="swiftride-platform-header">
                    <div class="swiftride-platform-name">Traditional</div>
                    <div class="swiftride-platform-subtitle">Other Platforms</div>
                </div>
            </div>

            <div class="swiftride-feature-row">
                <div class="feature-item"><i class="fa fa-dollar-sign"></i> Set Your Own Rates</div>
                <div class="feature-check">&#10003;</div>
                <div class="feature-cross">&#10007;</div>
            </div>

            <div class="swiftride-feature-row">
                <div class="feature-item"><i class="fa fa-comment"></i> Direct Communication</div>
                <div class="feature-check">&#10003;</div>
                <div class="feature-cross">&#10007;</div>
            </div>

            <div class="swiftride-feature-row">
                <div class="feature-item"><i class="fa fa-clock"></i> Flexible Schedule</div>
                <div class="feature-check">&#10003;</div>
                <div class="feature-check">&#10003;</div>
            </div>

            <div class="swiftride-feature-row">
                <div class="feature-item"><i class="fa fa-shield-alt"></i> Driver Verification</div>
                <div class="feature-check">&#10003;</div>
                <div class="feature-check">&#10003;</div>
            </div>

            <div class="swiftride-feature-row">
                <div class="feature-item"><i class="fa fa-check"></i> No Platform Commission</div>
                <div class="feature-check">&#10003;</div>
                <div class="feature-cross">&#10007;</div>
            </div>

            <div class="swiftride-feature-row">
                <div class="feature-item"><i class="fa fa-users"></i> Choose Your Driver</div>
                <div class="feature-check">&#10003;</div>
                <div class="feature-cross">&#10007;</div>
            </div>

            <div class="swiftride-feature-row">
                <div class="feature-item"><i class="fa fa-comment-alt"></i> WhatsApp Integration</div>
                <div class="feature-check">&#10003;</div>
                <div class="feature-cross">&#10007;</div>
            </div>

            <div class="swiftride-feature-row">
                <div class="feature-item"><i class="fa fa-star"></i> Rate Transparency</div>
                <div class="feature-check">&#10003;</div>
                <div class="feature-cross">&#10007;</div>
            </div>
        </div>
    </div>
</div>

<div class="section-footer">
    <h1>Ready to Experience the Difference?</h1>
    <div>
        <p>
            Join thousands of satisfied passengers and drivers who have made the switch to SwiftRide.
        </p>
    </div>
    <div class="section-buttons">
        <button class="pas">
            <i class="fa fa-users"></i> Join As Passenger <i class="fa-solid fa-arrow-right"></i>
        </button>
        <button class="driv">
            <i class="fa fa-car"></i> Join as Driver <i class="fa-solid fa-arrow-right"></i>
        </button>
    </div>
</div>

</section>

<section class="review">
    <div class="container">
    <div class="intro">
      <h2 class="title">what Our <span class="brands">Community</span> Says</h2>
      <p class="subtitle">
        Compare SwiftRide with traditional ride-sharing platforms and see why we're the smarter choice for both passengers and drivers.
      </p>
    </div>
</div>
<div class="swift-ride-carousel-container">
        <div class="swift-ride-carousel-track" id="swiftRideReviewTrack">
            <div class="swift-ride-review-card">
                <div class="swift-ride-stars">
                    <span class="swift-ride-star">⭐</span>
                    <span class="swift-ride-star">⭐</span>
                    <span class="swift-ride-star">⭐</span>
                    <span class="swift-ride-star">⭐</span>
                    <span class="swift-ride-star">⭐</span>
                </div>
                <p class="swift-ride-review-text">
                    "SwiftRide has transformed my daily commute. The drivers are professional, the app is intuitive, and I always feel safe. Highly recommended!"
                </p>
                <div class="swift-ride-reviewer-info">
                    <img src="{{ asset('images/person3.jpg') }}" alt="Sarah Johnson" class="swift-ride-reviewer-avatar">
                    <div class="swift-ride-reviewer-details">
                        <p class="swift-ride-reviewer-name">Sarah Johnson</p>
                        <p class="swift-ride-reviewer-role">Regular Passenger</p>
                    </div>
                </div>
            </div>

            <div class="swift-ride-review-card">
                <div class="swift-ride-stars">
                    <span class="swift-ride-star">⭐</span>
                    <span class="swift-ride-star">⭐</span>
                    <span class="swift-ride-star">⭐</span>
                    <span class="swift-ride-star">⭐</span>
                    <span class="swift-ride-star">☆</span> </div>
                <p class="swift-ride-review-text">
                    "I've been using SwiftRide for months, and it's consistently reliable. The app is user-friendly, and the pricing is fair. Great service overall!"
                </p>
                <div class="swift-ride-reviewer-info">
                    <img src="{{ asset('images/person5.jpg') }}" alt="David Smith" class="swift-ride-reviewer-avatar">
                    <div class="swift-ride-reviewer-details">
                        <p class="swift-ride-reviewer-name">David Smith</p>
                        <p class="swift-ride-reviewer-role">Frequent Rider</p>
                    </div>
                </div>
            </div>
            <div class="swift-ride-review-card">
                <div class="swift-ride-stars">
                    <span class="swift-ride-star">⭐</span>
                    <span class="swift-ride-star">⭐</span>
                    <span class="swift-ride-star">⭐</span>
                    <span class="swift-ride-star">⭐</span>
                    <span class="swift-ride-star">☆</span> </div>
                <p class="swift-ride-review-text">
                    "I've been using SwiftRide for months, and it's consistently reliable. The app is user-friendly, and the pricing is fair. Great service overall!"
                </p>
                <div class="swift-ride-reviewer-info">
                    <img src="{{ asset('images/person1.jpg') }}" alt="David Smith" class="swift-ride-reviewer-avatar">
                    <div class="swift-ride-reviewer-details">
                        <p class="swift-ride-reviewer-name">David Smith</p>
                        <p class="swift-ride-reviewer-role">Frequent Rider</p>
                    </div>
                </div>
            </div>

            </div>
    </div>

    <div class="swift-ride-carousel-nav">
        <div class="swift-ride-carousel-nav-btn"> <button class="swift-ride-nav-arrow" id="swiftRidePrevBtn"><</button>
        
        <button class="swift-ride-nav-arrow" id="swiftRideNextBtn">></button></div>
        
        <div class="swift-ride-dot-indicators" id="swiftRideDotIndicators">
            <span class="swift-ride-dot swift-ride-active-dot"></span>
            <span class="swift-ride-dot"></span>
            </div>
    </div>
</section>

<section class="QA">
     <div class="container">
    <div class="intro">
        <div class="tag">✨ Why Choose Us</div>
      <h2 class="title">Frequently Asked <span class="brand">Questions</span></h2>
      <p class="subtitle">
       Get quick answers to the most common questions about using SwiftRide for passengers and drivers.
      </p>
    </div>
</div>
<section class="swift-ride-faq-section-container">
    <div class="swift-ride-faq-content-wrapper">

        <div class="swift-ride-faq-accordion-column">
            
            <div class="swift-ride-faq-item swift-ride-is-active">
                <button class="swift-ride-faq-question" aria-expanded="true">
                    How do I book a ride on SwiftRide?
                    <span class="swift-ride-icon"><i class="bi bi-chevron-down"></i></span>
                </button>
                <div class="swift-ride-faq-answer" style="max-height: 200px;">
                    <p>
                        Simply enter your pickup location on our homepage, browse available drivers with their rates and ratings, then contact your chosen driver directly through **WhatsApp** to confirm your ride.
                    </p>
                </div>
            </div>

            <div class="swift-ride-faq-item">
                <button class="swift-ride-faq-question" aria-expanded="false">
                    How are fares determined?
                    <span class="swift-ride-icon"><i class="bi bi-chevron-down"></i></span>
                </button>
                <div class="swift-ride-faq-answer">
                    <p>
                        Fares are determined by the driver based on distance, time of day, and demand. The price listed next to the driver is their set rate for the estimated journey.
                    </p>
                </div>
            </div>

            <div class="swift-ride-faq-item">
                <button class="swift-ride-faq-question" aria-expanded="false">
                    Is SwiftRide safe to use?
                    <span class="swift-ride-icon"><i class="bi bi-chevron-down"></i></span>
                </button>
                <div class="swift-ride-faq-answer">
                    <p>
                        Driver safety is our top priority. All drivers are verified, and since you contact them directly via WhatsApp, you have a direct line of communication for peace of mind.
                    </p>
                </div>
            </div>

            <div class="swift-ride-faq-item">
                <button class="swift-ride-faq-question" aria-expanded="false">
                    Can I choose my driver?
                    <span class="swift-ride-icon"><i class="bi bi-chevron-down"></i></span>
                </button>
                <div class="swift-ride-faq-answer">
                    <p>
                        Absolutely! Our platform allows you to browse all available drivers, view their ratings, vehicle type, and rates, giving you full control over who you choose to ride with.
                    </p>
                </div>
            </div>

            <div class="swift-ride-faq-item">
                <button class="swift-ride-faq-question" aria-expanded="false">
                    How do drivers get paid?
                    <span class="swift-ride-icon"><i class="bi bi-chevron-down"></i></span>
                </button>
                <div class="swift-ride-faq-answer">
                    <p>
                        Payment terms are arranged directly between you and the driver, typically upon completion of the ride, via cash or mobile payment options. SwiftRide does not handle payments directly.
                    </p>
                </div>
            </div>

            <div class="swift-ride-faq-item">
                <button class="swift-ride-faq-question" aria-expanded="false">
                    What if I need to cancel a ride?
                    <span class="swift-ride-icon"><i class="bi bi-chevron-down"></i></span>
                </button>
                <div class="swift-ride-faq-answer">
                    <p>
                        Please contact your chosen driver directly via WhatsApp as soon as possible to communicate any changes or cancellations.
                    </p>
                </div>
            </div>

        </div>

        <div class="swift-ride-support-column">

            <div class="swift-ride-support-card swift-ride-help-card">
                <div class="swift-ride-support-icon-circle swift-ride-icon-blue">?</div>
                <h3 class="swift-ride-support-title">Need More Help?</h3>
                <p class="swift-ride-support-text">
                    Visit our comprehensive help center for detailed guides, tutorials, and more answers.
                </p>
                <a href="#" class="swift-ride-support-btn swift-ride-btn-blue">
                    Visit Help Center <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

            <div class="swift-ride-support-card swift-ride-contact-card">
                <div class="swift-ride-support-icon-circle swift-ride-icon-green">💬</div>
                <h3 class="swift-ride-support-title">Still Have Questions?</h3>
                <p class="swift-ride-support-text">
                    Our friendly support team is here to help you with any questions or concerns.
                </p>
                <a href="#" class="swift-ride-support-btn swift-ride-btn-green-solid">
                    Contact Support
                </a>
                <a href="#" class="swift-ride-support-btn swift-ride-btn-green-outline">
                    WhatsApp Us
                </a>
            </div>

            <div class="swift-ride-support-card swift-ride-help-card">
  <h3 class="swift-ride-support-title">Supportive Statistics</h3>
  <div class="content">
    <p><span class="label">Avg. Response Time</span><span class="value1">< 5 min</span></p>
    <p><span class="label">Issue Resolution</span><span class="value2">98.5%</span></p>
    <p><span class="label">Customer Satisfaction</span><span class="value3">4.9/5</span></p>
    <p><span class="label">Support Channels</span><span class="value4">24/7</span></p>
  </div>
</div>

        </div>
    </div>
</section>
<section class="popular-help-topics">
  <h1>
    Popular Help Topics
  </h1>
  <div class="cards">
    <div class="card">
      <div class="icon">
        🚀
      </div>
      <div class="text">Getting started</div>
    </div>
     <div class="card">
      <div class="icon">
        💳
      </div>
      <div class="text">Payment & Pricing
</div>
    </div>
     <div class="card">
      <div class="icon">
        🛡️
      </div>
      <div class="text">Safety Guidelines</div>
    </div>
     <div class="card">
      <div class="icon">
        ⚙️
      </div>
      <div class="text">Account Settings</div>
    </div>
  </div>
</section>
</section>

<section class="trust-safety">
  <div class="container">
    <div class="intro">
      <div class="tag">🛡️ Safety First</div>
      <h2 class="title">Trust & <span class="brand">Safety</span></h2>
      <p class="subtitle">
        Your safety is our top priority. We've built comprehensive security measures to ensure every ride is safe and secure.   </p>
    </div>
</div>
<div class="security-section">
    <div class="security-info">
        <h2><strong>Multi-Layer <span class="highlighter">Security</span> System</strong></h2>
        <p>We employ multiple layers of security checks and monitoring to create the safest possible environment for both passengers and drivers. Every interaction is monitored and every driver is thoroughly vetted.</p>
        <div class="info-boxes">
            <div class="info-box">
                <h1>99.8%</h1>
                <strong>Safety Rating</strong>
                <p>Of all rides completed without incidents</p>
            </div>
            <div class="info-box">
                <h1>&lt; 2min</h1>
                <strong>Response Time</strong>
                <p>Average emergency support response</p>
            </div>
            <div class="info-box">
                <h1>100%</h1>
                <strong>Driver Verification</strong>
                <p>All drivers undergo complete verification</p>
            </div>
            <div class="info-box">
                <h1>24/7</h1>
                <strong>Support Available</strong>
                <p>Round-the-clock safety monitoring</p>
            </div>
        </div>
        <div class="buttons">
            <button class="btn-primary">Learn More <i class="fa-solid fa-arrow-right"></i></button>
            <button class="btn-secondary">Contact Security Team</button>
        </div>
    </div>
    <div class="security-image">
        <img src="{{ asset('images/verification.jpg') }}" alt="Verified Driver" />
        <div class="badge">
            <span class="checkmark">&#10003;</span>
            <div class="badge-text">
                <strong>Verified Driver </strong>
                <small>Background Checked</small>
            </div>
        </div>
    </div>
</div>

</section>
<section class="comprehensive">
  <div class="content">
    <h1>Comprehensive <span>Safety Features</span></h1>
    <h3>Every aspect of our platform is designed with safety in mind, from driver onboarding to ride completion.</h3>
  </div>
  <section class="features">
  <div class="feature-card">
    <div class="icon">
 <div class="icon-wrap">
          <!-- simple location pin icon (SVG) -->
          <div class="iconbg1">
           <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-file-earmark-check" viewBox="0 0 16 16">
  <path d="M10.854 7.854a.5.5 0 0 0-.708-.708L7.5 9.793 6.354 8.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0z"/>
  <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
</svg>
          </div>
        </div>
    </div>
    <h3>Document Verification</h3>
    <p>
    All drivers must submit and verify their license, vehicle registration, and insurance before approval.


    </p>
  </div>

    <div class="feature-card">
    <div class="icon">
 <div class="icon-wrap">
          <!-- simple location pin icon (SVG) -->
          <div class="iconbg2">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
</svg>
          </div>
        </div>
    </div>
    <h3>Background Checks
</h3>
    <p>
Comprehensive background screening ensures only qualified and trustworthy drivers join our platform.
    </p>
  </div>
    <div class="feature-card">
    <div class="icon">
 <div class="icon-wrap">
          <!-- simple location pin icon (SVG) -->
          <div class="iconbg3">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
</svg>
          </div>
        </div>
    </div>
    <h3>  Admin Oversight</h3>
    <p>
24/7 admin monitoring with real-time oversight of all driver applications and passenger complaints.
    </p>
  </div>
    <div class="feature-card">
    <div class="icon">
 <div class="icon-wrap">
          <!-- simple location pin icon (SVG) -->
          <div class="iconsbg4">
       
<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-telephones" viewBox="0 0 16 16">
  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
</svg>
          </div>
        </div>
    </div>
    <h3>  Emergency Support</h3>
    <p>

Round-the-clock emergency support available through multiple channels including WhatsApp and phone.
    </p>
  </div>

    <div class="feature-card">
    <div class="icon">
 <div class="icon-wrap">
          <!-- simple location pin icon (SVG) -->
          <div class="iconsbg5">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-shield1" viewBox="0 0 16 16">
  <path d="M5.338 1.59a61 61 0 0 0-2.837.856.48.48 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.7 10.7 0 0 0 2.287 2.233c.346.244.652.42.893.533q.18.085.293.118a1 1 0 0 0 .101.025 1 1 0 0 0 .1-.025q.114-.034.294-.118c.24-.113.547-.29.893-.533a10.7 10.7 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.8 11.8 0 0 1-2.517 2.453 7 7 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7 7 0 0 1-1.048-.625 11.8 11.8 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 63 63 0 0 1 5.072.56"/>
</svg>
          </div>
        </div>
    </div>
    <h3>Identity Verification</h3>
    <p>
      
Multi-step identity verification process with photo ID confirmation for both drivers and passengers.
    </p>
  </div>

    <div class="feature-card">
    <div class="icon">
 <div class="icon-wrap">
          <!-- simple location pin icon (SVG) -->
          <div class="iconsbg6">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
  <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.15.15 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.2.2 0 0 1-.054.06.1.1 0 0 1-.066.017H1.146a.1.1 0 0 1-.066-.017.2.2 0 0 1-.054-.06.18.18 0 0 1 .002-.183L7.884 2.073a.15.15 0 0 1 .054-.057m1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767z"/>
  <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z"/>
</svg>
          </div>
        </div>
    </div>
    <h3>Incident Reporting
</h3>
    <p>
Easy-to-use incident reporting system with fast response times and proper resolution tracking.
     
    </p>
  </div>



  
</section>
<section class="support-cta">
  <div class="support-card">
    <div class="icon-circle" aria-hidden="true">
      <!-- phone icon -->
      <svg width="28" height="28" viewBox="0 0 24 24" fill="none" aria-hidden="true">
        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.86 19.86 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.86 19.86 0 0 1 2.08 4.18 2 2 0 0 1 4 2h3a2 2 0 0 1 2 1.72c.12 1.05.38 2.07.77 3.03a2 2 0 0 1-.45 2.11L8.91 10.91a16 16 0 0 0 6 6l1.05-1.05a2 2 0 0 1 2.11-.45c.96.39 1.98.65 3.03.77A2 2 0 0 1 22 16.92z" fill="#fff"/>
      </svg>
    </div>

    <h2 class="support-title">Need Help? We're Here 24/7</h2>

    <p class="support-lead">
      Our safety team is always available to help. Whether it's an emergency or you have safety concerns, we respond immediately.
    </p>

    <div class="support-actions">
      <a href="tel:+15551234567" class="btn btn-danger">
        <!-- phone icon small -->
        <svg class="btn-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true">
          <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.86 19.86 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.86 19.86 0 0 1 2.08 4.18 2 2 0 0 1 4 2h3a2 2 0 0 1 2 1.72c.12 1.05.38 2.07.77 3.03a2 2 0 0 1-.45 2.11L8.91 10.91a16 16 0 0 0 6 6l1.05-1.05a2 2 0 0 1 2.11-.45c.96.39 1.98.65 3.03.77A2 2 0 0 1 22 16.92z" fill="#fff"/>
        </svg>
        Emergency: (555) 123-4567
      </a>

      <a href="#" class="btn btn-whatsapp" rel="noopener">
        <!-- whatsapp icon -->
        
        WhatsApp Safety Team
      </a>
    </div>

    <p class="support-note">Available in multiple languages • Response within 2 minutes</p>
  </div>
</section>
</section>
<section class="sr-ride-hero">
<div class="sr-container">
<header class="srt-hero-header">
<h1 class="srt-title">Ready to Ride <span class="accent">Smarter?</span></h1>
<p class="srt-lead">Join thousands of satisfied users who have already made the switch to SwiftRide. Experience the future of ride-sharing today.</p>


<ul class="sr-kpis">
<li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star1" viewBox="0 0 16 16">
  <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z"/>
</svg> <strong>4.8/5</strong> Rating</li>
<li><i class="bi bi-people"></i><strong>50,000+</strong> Users</li>
<li><img src="{{ asset('images/car.png') }}" alt=""><strong>2,500+</strong> Drivers</li>
<li><i class="bi bi-geo-alt"></i> <strong>25+</strong> Cities</li>
</ul>
</header>


<div class="sr-image-cards">
<a href="#" class="sr-img-card">
<img src="{{ asset('images/footer1.jpg') }}" alt="Happy Passengers">
<div class="sr-overlay">
<h3>Happy Passengers</h3>
<p>Connecting instantly via WhatsApp</p>
</div>
</a>


<a href="#" class="sr-img-card">
<img src="{{ asset('images/footer2.jpg') }}" alt="Professional Drivers">
<div class="sr-overlay">
<h3>Professional Drivers</h3>
<p>Verified and ready to serve</p>
</div>
</a>
</div>

<div class="sr-feature-section">

  <div class="sr-feature-row">
    <div class="sr-feature-card">
      <div class="sr-icon-circle" aria-hidden>
        <svg width="40px" height="40px" viewBox="0 0 24 24" fill="#00b3a6" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_1251_98416)">
<path fill-rule="evenodd" clip-rule="evenodd" d="M9 0C5.96243 0 3.5 2.46243 3.5 5.5C3.5 8.53757 5.96243 11 9 11C12.0376 11 14.5 8.53757 14.5 5.5C14.5 2.46243 12.0376 0 9 0ZM5.5 5.5C5.5 3.567 7.067 2 9 2C10.933 2 12.5 3.567 12.5 5.5C12.5 7.433 10.933 9 9 9C7.067 9 5.5 7.433 5.5 5.5Z" fill="#000000"/>
<path d="M15.5 0C14.9477 0 14.5 0.447715 14.5 1C14.5 1.55228 14.9477 2 15.5 2C17.433 2 19 3.567 19 5.5C19 7.433 17.433 9 15.5 9C14.9477 9 14.5 9.44771 14.5 10C14.5 10.5523 14.9477 11 15.5 11C18.5376 11 21 8.53757 21 5.5C21 2.46243 18.5376 0 15.5 0Z" fill="#000000"/>
<path d="M19.0837 14.0157C19.3048 13.5096 19.8943 13.2786 20.4004 13.4997C22.5174 14.4246 24 16.538 24 19V21C24 21.5523 23.5523 22 23 22C22.4477 22 22 21.5523 22 21V19C22 17.3613 21.0145 15.9505 19.5996 15.3324C19.0935 15.1113 18.8625 14.5217 19.0837 14.0157Z" fill="#000000"/>
<path d="M6 13C2.68629 13 0 15.6863 0 19V21C0 21.5523 0.447715 22 1 22C1.55228 22 2 21.5523 2 21V19C2 16.7909 3.79086 15 6 15H12C14.2091 15 16 16.7909 16 19V21C16 21.5523 16.4477 22 17 22C17.5523 22 18 21.5523 18 21V19C18 15.6863 15.3137 13 12 13H6Z" fill="#000000"/>
</g>
<defs>
<clipPath id="clip0_1251_98416">
<rect width="24" height="24" fill="white"/>
</clipPath>
</defs>
</svg>
      </div>
      <h3 class="sr-card-title">For Passengers</h3>
      <p class="sr-muted">Find reliable rides instantly. Choose your driver, see exact fares, and enjoy safe transportation.</p>

      <ul class="sr-points">
        <li>Browse verified drivers</li>
        <li>No surge pricing</li>
        <li>Direct communication</li>
        <li>24/7 safety support</li>
      </ul>

      <a class="sr-btn sr-btn-light" href="#">
        <span class="sr-btn-icon" aria-hidden><svg width="15px" height="15px" class="icononbuttons" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_1251_98416)" currentcolor="#00b3a6">
<path fill-rule="evenodd" clip-rule="evenodd" d="M9 0C5.96243 0 3.5 2.46243 3.5 5.5C3.5 8.53757 5.96243 11 9 11C12.0376 11 14.5 8.53757 14.5 5.5C14.5 2.46243 12.0376 0 9 0ZM5.5 5.5C5.5 3.567 7.067 2 9 2C10.933 2 12.5 3.567 12.5 5.5C12.5 7.433 10.933 9 9 9C7.067 9 5.5 7.433 5.5 5.5Z" fill="#000000"/>
<path d="M15.5 0C14.9477 0 14.5 0.447715 14.5 1C14.5 1.55228 14.9477 2 15.5 2C17.433 2 19 3.567 19 5.5C19 7.433 17.433 9 15.5 9C14.9477 9 14.5 9.44771 14.5 10C14.5 10.5523 14.9477 11 15.5 11C18.5376 11 21 8.53757 21 5.5C21 2.46243 18.5376 0 15.5 0Z" fill="#000000"/>
<path d="M19.0837 14.0157C19.3048 13.5096 19.8943 13.2786 20.4004 13.4997C22.5174 14.4246 24 16.538 24 19V21C24 21.5523 23.5523 22 23 22C22.4477 22 22 21.5523 22 21V19C22 17.3613 21.0145 15.9505 19.5996 15.3324C19.0935 15.1113 18.8625 14.5217 19.0837 14.0157Z" fill="#000000"/>
<path d="M6 13C2.68629 13 0 15.6863 0 19V21C0 21.5523 0.447715 22 1 22C1.55228 22 2 21.5523 2 21V19C2 16.7909 3.79086 15 6 15H12C14.2091 15 16 16.7909 16 19V21C16 21.5523 16.4477 22 17 22C17.5523 22 18 21.5523 18 21V19C18 15.6863 15.3137 13 12 13H6Z" fill="#000000"/>
</g>
<defs>
<clipPath id="clip0_1251_98416">
<rect width="24" height="24" fill="white"/>
</clipPath>
</defs>
</svg></span>
        <span>Start Finding Rides</span>
        <span class="sr-btn-arrow" aria-hidden>➜</span>
      </a>
    </div>

    <div class="sr-feature-card sr-feature-card--accent">
      <div class="sr-icon-circle" aria-hidden><svg xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" viewBox="0 0 24.00 24.00" fill="none" stroke="#000000" stroke-width="1.6799999999999997" stroke-linecap="round" stroke-linejoin="round">

<g id="SVGRepo_bgCarrier" stroke-width="0"/>

<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.096"/>

<g id="SVGRepo_iconCarrier"> <path d="M14 16H9m10 0h3v-3.15a1 1 0 00-.84-.99L16 11l-2.7-3.6a1 1 0 00-.8-.4H5.24a2 2 0 00-1.8 1.1l-.8 1.63A6 6 0 002 12.42V16h2"/> <circle cx="6.5" cy="16.5" r="2.5"/> <circle cx="16.5" cy="16.5" r="2.5"/> </g>

</svg></div>
      <h3 class="sr-card-title">For Drivers</h3>
      <p class="sr-muted">Earn more by keeping 100% of your fares. Set your own rates and work on your schedule.</p>

      <ul class="sr-points">
        <li>Set your own rates</li>
        <li>No commission fees</li>
        <li>Flexible schedule</li>
        <li>Build your reputation</li>
      </ul>

      <a class="sr-btn sr-btn-primary" href="#">
        <span class="sr-btn-icon" aria-hidden><!-- inline SVG: stroke uses currentColor -->
<svg class="sr-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.68" stroke-linecap="round" stroke-linejoin="round">
  <g id="SVGRepo_iconCarrier">
    <path d="M14 16H9m10 0h3v-3.15a1 1 0 00-.84-.99L16 11l-2.7-3.6a1 1 0 00-.8-.4H5.24a2 2 0 00-1.8 1.1l-.8 1.63A6 6 0 002 12.42V16h2"/>
    <circle cx="6.5" cy="16.5" r="2.5"/>
    <circle cx="16.5" cy="16.5" r="2.5"/>
  </g>
</svg>
</span>
        <span>Start Earning Today</span>
        <span class="sr-btn-arrow" aria-hidden>➜</span>
      </a>
    </div>
  </div>

  <div class="sr-stats-bar" role="group" aria-label="statistics">
    <div class="sr-stat"><strong>$2.5M+</strong><span>Earned by Drivers</span></div>
    <div class="sr-stat"><strong>500K+</strong><span>Rides Completed</span></div>
    <div class="sr-stat"><strong>99.8%</strong><span>Safety Rating</span></div>
    <div class="sr-stat"><strong>&lt; 5min</strong><span>Avg. Wait Time</span></div>
    
  </div>

<div class="footer-divider" role="separator"></div>
<p class="bottom-text">Join the SwiftRide community today and experience transportation the way it should be.</p>
</div>

</section>
<footer class="site-footer">

  <div class="footer-inner">
    <div class="footer-grid">

      <!-- Column 1: Brand + description + contact -->
      <div class="footer-col footer-brand">
        <div class="brand-row">
          <div class="brand-mark"><img src="{{ asset('images/car.png') }}" alt=""></div>
          <div class="brand-name">SwiftRide</div>
        </div>

        <p class="brand-desc">
          Connecting passengers and drivers for safe, reliable, and convenient transportation. Experience the future of ride-sharing with SwiftRide.
        </p>

        <ul class="contact-list">
          <li><i class="bi bi-envelope"></i> support@swiftride.com</li>
          <li><i class="bi bi-telephone"></i> +1 (555) 123-4567</li>
          <li><i class="bi bi-geo-alt"></i> 123 Main St, City, State 12345</li>
        </ul>

        <a class="whatsapp-btn" href="#" rel="noopener">
         <i class="bi bi-chat"></i>
          WhatsApp Support
        </a>
      </div>

      <!-- Column 2: Quick Links -->
      <div class="footer-col">
        <h4>Quick Links</h4>
        <ul class="footer-links">
          <li><a href="#">Home</a></li>
          <li><a href="#">For Passengers</a></li>
          <li><a href="#">For Drivers</a></li>
          <li><a href="#">Help Center</a></li>
        </ul>
      </div>

      <!-- Column 3: Company -->
      <div class="footer-col">
        <h4>Company</h4>
        <ul class="footer-links">
          <li><a href="#">About Us</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Careers</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Press</a></li>
        </ul>
      </div>

      <!-- Column 4: Legal & Support -->
      <div class="footer-col">
        <h4>Legal & Support</h4>
        <ul class="footer-links">
          <li><a href="#">Terms of Service</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Safety Guidelines</a></li>
          <li><a href="#">Community Guidelines</a></li>
          <li><a href="#">Cookie Policy</a></li>
        </ul>
      </div>
    </div> <!-- /footer-grid -->

    <!-- Divider -->
    <div class="footer-divider" role="separator"></div>

    <!-- Bottom row: left copyright + center downloads + right social -->
    <div class="footer-bottom">
      <div class="copyright">
        <p>© 2024 SwiftRide Technologies Inc. All rights reserved.</p>
        <p class="made-with">Made with <span class="heart">❤</span> for better transportation</p>
      </div>

      <div class="download-area">
        <div class="download-title">Download Our App</div>
        <div class="download-buttons">
          <a class="app-btn app-store" href="#">App Store</a>
          <a class="app-btn google-play" href="#">Google Play</a>
        </div>
      </div>

      <div class="social-area">
        <div class="follow-title">Follow Us</div>
        <div class="social-icons">
          <a class="social" href="#" aria-label="Instagram">🐦</a>
          <a class="social" href="#" aria-label="Facebook">📘</a>
          <a class="social" href="#" aria-label="Twitter">📸</a>
          <a class="social" href="#" aria-label="LinkedIn">💼</a>
        </div>
      </div>
    </div> <!-- /footer-bottom -->

    <!-- Bottom badges row -->
   
<div class="footer-divider" role="separator"></div>
<!-- SwiftRide Footer Badges -->
<div class="swiftride-footer-badges">
  <span class="swiftride-badge"><em class="swiftride-badge-dot green"></em> SSL Secured</span>
  <span class="swiftride-badge"><em class="swiftride-badge-dot blue"></em> GDPR Compliant</span>
  <span class="swiftride-badge"><em class="swiftride-badge-dot gold"></em> SOC 2 Certified</span>
  <span class="swiftride-badge"><em class="swiftride-badge-dot red"></em> 24/7 Monitored</span>
</div>

  </div> <!-- /footer-inner -->


</footer>

</body>

<script>
  const hamburger = document.getElementById('hamburger');
  const mobileMenu = document.getElementById('mobileMenu');

  hamburger.addEventListener('click', () => {
    mobileMenu.classList.toggle('active');

    // toggle icon between bars and X
    const icon = hamburger.querySelector('i');
    if (mobileMenu.classList.contains('active')) {
      icon.classList.remove('fa-bars');
      icon.classList.add('fa-times');
    } else {
      icon.classList.remove('fa-times');
      icon.classList.add('fa-bars');
    }
  });

document.addEventListener('DOMContentLoaded', () => {
    const track = document.getElementById('swiftRideReviewTrack');
    const cards = Array.from(track.children);
    const prevBtn = document.getElementById('swiftRidePrevBtn');
    const nextBtn = document.getElementById('swiftRideNextBtn');
    const dotIndicators = document.getElementById('swiftRideDotIndicators');

    let currentIndex = 0;
    let cardWidth = cards[0].offsetWidth + (parseFloat(getComputedStyle(cards[0]).marginLeft) * 2); // Card width + left/right margin

    // Function to update carousel position
    function updateCarousel() {
        track.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
        updateDots();
    }

    // Function to update dot indicators
    function updateDots() {
        Array.from(dotIndicators.children).forEach((dot, index) => {
            if (index === currentIndex) {
                dot.classList.add('swift-ride-active-dot');
            } else {
                dot.classList.remove('swift-ride-active-dot');
            }
        });
    }

    // Create dots dynamically based on the number of cards
    function createDots() {
        dotIndicators.innerHTML = ''; // Clear existing dots
        cards.forEach((_, index) => {
            const dot = document.createElement('span');
            dot.classList.add('swift-ride-dot');
            dot.addEventListener('click', () => {
                currentIndex = index;
                updateCarousel();
            });
            dotIndicators.appendChild(dot);
        });
        updateDots(); // Set initial active dot
    }

    // Event Listeners for Navigation Buttons
    prevBtn.addEventListener('click', () => {
        currentIndex = (currentIndex > 0) ? currentIndex - 1 : cards.length - 1;
        updateCarousel();
    });

    nextBtn.addEventListener('click', () => {
        currentIndex = (currentIndex < cards.length - 1) ? currentIndex + 1 : 0;
        updateCarousel();
    });

    // Recalculate card width on window resize
    window.addEventListener('resize', () => {
        cardWidth = cards[0].offsetWidth + (parseFloat(getComputedStyle(cards[0]).marginLeft) * 2);
        updateCarousel(); // Adjust carousel position to new width
    });

    // Initial setup
    createDots();
    updateCarousel();
});

document.addEventListener('DOMContentLoaded', () => {
    const questions = document.querySelectorAll('.swift-ride-faq-question');

    questions.forEach(question => {
        question.addEventListener('click', () => {
            const item = question.closest('.swift-ride-faq-item');
            const answer = item.querySelector('.swift-ride-faq-answer');
            const isActive = item.classList.contains('swift-ride-is-active');

            // 1. Close all open items
            document.querySelectorAll('.swift-ride-faq-item.swift-ride-is-active').forEach(activeItem => {
                if (activeItem !== item) {
                    activeItem.classList.remove('swift-ride-is-active');
                    activeItem.querySelector('.swift-ride-faq-answer').style.maxHeight = 0;
                    activeItem.querySelector('.swift-ride-faq-question').setAttribute('aria-expanded', 'false');
                }
            });

            // 2. Toggle the clicked item
            if (!isActive) {
                // Open
                item.classList.add('swift-ride-is-active');
                answer.style.maxHeight = answer.scrollHeight + 'px'; // Set height for smooth transition
                question.setAttribute('aria-expanded', 'true');
            } else {
                // Close
                item.classList.remove('swift-ride-is-active');
                answer.style.maxHeight = 0;
                question.setAttribute('aria-expanded', 'false');
            }
        });
    });
});
</script>
</html>


