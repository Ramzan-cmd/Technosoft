<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Passenger Dashboard')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8fafc;
      font-family: 'Poppins', sans-serif;
    }

    .dashboard-container {
      display: flex;
      min-height: 100vh;
      padding: 2rem;
      gap: 2rem;
    }

    /* Sidebar */
    .sidebar {
      background: #fff;
      border-radius: 15px;
      padding: 1.5rem 1rem;
      width: 260px;
      height: fit-content;
      box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    }

    .sidebar button {
      display: flex;
      align-items: center;
      gap: 10px;
      background: none;
      border: none;
      padding: 0.9rem 1rem;
      font-size: 1rem;
      width: 100%;
      text-align: left;
      border-radius: 10px;
      color: #333;
      transition: all 0.3s ease;
    }

    .sidebar button.active, .sidebar button:hover {
      background: #1a3df0;
      color: #fff;
    }

    /* Main content */
    .main-content {
      flex: 1;
      background: #fff;
      border-radius: 15px;
      padding: 2rem;
      box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    }

    @media (max-width: 992px) {
      .dashboard-container {
        flex-direction: column;
      }

      .sidebar {
        width: 100%;
        display: flex;
        justify-content: space-around;
      }

      .sidebar button {
        flex: 1;
        text-align: center;
        justify-content: center;
      }
    }
  </style>
</head>
<body>

  <div class="dashboard-container">
    <!-- Sidebar -->
    <div class="sidebar">
      <button class="nav-btn active" data-section="findRides">🚗 Find Rides</button>
      <button class="nav-btn" data-section="profile">👤 Profile</button>
      <button class="nav-btn" data-section="history">🕒 Ride History</button>
      <button class="nav-btn" data-section="support">📞 Contact Support</button>
    </div>

    <!-- Main Content -->
    <div class="main-content">
      @yield('content')
    </div>
  </div>

  <script>
    // Sidebar interaction
    const buttons = document.querySelectorAll('.nav-btn');
    const mainContent = document.querySelector('.main-content');

    buttons.forEach(btn => {
      btn.addEventListener('click', () => {
        buttons.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

        const section = btn.getAttribute('data-section');

        fetch(`/${section}`)
          .then(res => res.text())
          .then(html => mainContent.innerHTML = html);
      });
    });
  </script>

</body>
</html>
