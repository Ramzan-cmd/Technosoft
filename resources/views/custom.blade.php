<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SwiftRide — Home (Complete)</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <!-- Icons (optional) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <style>
        :root{
            --indigo-600: #4f46e5;
            --indigo-50: #eef2ff;
            --muted: #6b7280;
            --radius-lg: 16px;
        }
        html,body{height:100%}
        body{font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial; background:linear-gradient(180deg,#ffffff 0%, #f8fafc 60%);color:#0f172a}

        /* NAV */
        .brand-badge{width:48px;height:48px;border-radius:12px;background:var(--indigo-600);display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700;box-shadow:0 6px 18px rgba(79,70,229,0.12)}
        .nav-link{color:rgba(15,23,42,0.7)}

        /* HERO */
        .hero-illustration{border-radius:var(--radius-lg);background:linear-gradient(135deg, rgba(79,70,229,0.06), rgba(79,70,229,0.02));padding:20px;box-shadow:0 10px 30px rgba(99,102,241,0.06)}
        .mock-map{background:#eef2ff;border-radius:10px;height:220px;display:flex;align-items:center;justify-content:center;color:var(--indigo-600);font-weight:600}
        .decor-circle{position:absolute;border-radius:50%;filter:blur(28px);opacity:.55}

        /* CARDS & FEATURES */
        .card-ghost{border-radius:14px;border:0;box-shadow:0 6px 20px rgba(15,23,42,0.04)}
        .pricing-card{border-radius:14px;border:1px solid rgba(15,23,42,0.04)}
        .pricing-highlight{transform:scale(1.02);box-shadow:0 16px 40px rgba(79,70,229,0.06)}

        /* FOOTER */
        footer .social-circle{width:40px;height:40px;border-radius:50%;display:inline-flex;align-items:center;justify-content:center;background:#f1f5f9}

        /* UTIL */
        .muted{color:var(--muted)}
        @media (max-width: 767.98px){.mock-map{height:140px}}
        h1,h2,h3{line-height:1.05}
    </style>
</head>
<body>

<!-- PAGE -->
<div class="min-vh-100 d-flex flex-column">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-3" href="#">
                <div class="brand-badge">SR</div>
                <div class="d-none d-sm-block">
                    <div class="h6 mb-0">SwiftRide</div>
                    <small class="text-muted">Platform</small>
                </div>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
                    <li class="nav-item"><a class="nav-link" href="#how">How it works</a></li>
                    <li class="nav-item"><a class="nav-link" href="#pricing">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>

                    <li class="nav-item dropdown d-none d-lg-block ms-3">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Company</a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">About</a></li>
                            <li><a class="dropdown-item" href="#">Careers</a></li>
                        </ul>
                    </li>

                    <li class="nav-item ms-3 d-none d-lg-block"><a href="#" class="btn btn-outline-primary btn-sm">Sign in</a></li>
                    <li class="nav-item ms-2"><a href="#" class="btn btn-primary btn-sm">Get started</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HERO -->
    <header class="py-5 position-relative">
        <div class="container">
            <div class="row align-items-center gy-4">
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold">Build & manage your fleet with <span style="color:var(--indigo-600)">SwiftRide</span></h1>
                    <p class="lead text-muted mt-3">Modern platform for drivers, operators and dispatchers — manage rides, track performance, and scale effortlessly.</p>

                    <div class="mt-4 d-flex flex-wrap gap-2">
                        <a href="#" class="btn btn-primary btn-lg">Get started</a>
                        <a href="#features" class="btn btn-outline-secondary btn-lg">Explore features</a>
                    </div>

                    <div class="mt-4 d-flex gap-4 flex-wrap muted">
                        <div>2500+ active drivers</div>
                        <div>·</div>
                        <div>99.9% uptime</div>
                        <div>·</div>
                        <div>24/7 support</div>
                    </div>
                </div>

                <div class="col-lg-6 position-relative">
                    <div class="hero-illustration">
                        <div class="p-3 bg-white rounded-3 shadow-sm">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <small class="text-muted">Active Ride</small>
                                    <div class="h5 mb-0">RK-1204 <small class="text-muted">• 6m ago</small></div>
                                </div>
                                <div class="text-end">
                                    <small class="text-muted">Status</small>
                                    <div class="text-success fw-semibold">En route</div>
                                </div>
                            </div>

                            <div class="mt-4 border rounded-3 overflow-hidden">
                                <div class="p-3 bg-light d-flex justify-content-between">
                                    <div>
                                        <small class="text-muted d-block">From</small>
                                        <div class="fw-medium">Airport</div>
                                    </div>
                                    <div class="text-end">
                                        <small class="text-muted d-block">ETA</small>
                                        <div class="fw-medium">12 mins</div>
                                    </div>
                                </div>
                                <div class="p-3">
                                    <div class="mock-map">Map / Mockup</div>
                                </div>
                            </div>

                            <div class="mt-3 d-flex justify-content-between text-muted small">
                                <div>Driver: Ali R.</div>
                                <div class="fw-semibold">$7.40</div>
                            </div>
                        </div>
                    </div>

                    <!-- decorative circle (adjust/replace with exact asset if needed) -->
                    <div class="decor-circle" style="width:220px;height:220px;right:-40px;top:-40px;background:var(--indigo-50);"></div>
                </div>
            </div>
        </div>
    </header>

    <!-- FEATURES GRID -->
    <section id="features" class="py-5">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="h3 fw-semibold">Platform features</h2>
                <p class="text-muted">Everything you need to run a modern ride-hailing service — dispatch, analytics, driver management, and more.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card card-ghost p-4 h-100">
                        <div class="mb-3 p-3 rounded-3" style="background:var(--indigo-50);width:54px;height:54px;display:flex;align-items:center;justify-content:center;border-radius:12px;">
                            <i class="fas fa-shuttle-van"></i>
                        </div>
                        <h5 class="fw-semibold">Dispatch & Queue</h5>
                        <p class="text-muted small">Efficiently dispatch nearby drivers and manage queue priorities.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-ghost p-4 h-100">
                        <div class="mb-3 p-3 rounded-3" style="background:var(--indigo-50);width:54px;height:54px;display:flex;align-items:center;justify-content:center;border-radius:12px;">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h5 class="fw-semibold">Driver App</h5>
                        <p class="text-muted small">Driver-facing app with turn-by-turn navigation and earnings.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-ghost p-4 h-100">
                        <div class="mb-3 p-3 rounded-3" style="background:var(--indigo-50);width:54px;height:54px;display:flex;align-items:center;justify-content:center;border-radius:12px;">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h5 class="fw-semibold">Analytics</h5>
                        <p class="text-muted small">Real-time dashboards, trip summaries and performance metrics.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-ghost p-4 h-100">
                        <div class="mb-3 p-3 rounded-3" style="background:var(--indigo-50);width:54px;height:54px;display:flex;align-items:center;justify-content:center;border-radius:12px;">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <h5 class="fw-semibold">Custom Rules</h5>
                        <p class="text-muted small">Set fare rules, surge pricing and operational constraints.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-ghost p-4 h-100">
                        <div class="mb-3 p-3 rounded-3" style="background:var(--indigo-50);width:54px;height:54px;display:flex;align-items:center;justify-content:center;border-radius:12px;">
                            <i class="fas fa-users"></i>
                        </div>
                        <h5 class="fw-semibold">Driver Management</h5>
                        <p class="text-muted small">Onboard drivers, verify documents and track earnings.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-ghost p-4 h-100">
                        <div class="mb-3 p-3 rounded-3" style="background:var(--indigo-50);width:54px;height:54px;display:flex;align-items:center;justify-content:center;border-radius:12px;">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h5 class="fw-semibold">Support & SLA</h5>
                        <p class="text-muted small">Enterprise SLAs, onboarding and 24/7 support.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- HOW IT WORKS -->
    <section id="how" class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                    <h3 class="fw-semibold">How SwiftRide works</h3>
                    <p class="text-muted mt-2">Three simple steps to start handling rides and drivers in minutes.</p>

                    <ol class="list-unstyled mt-4">
                        <li class="d-flex mb-3">
                            <div class="me-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width:44px;height:44px;">1</div>
                            <div>
                                <div class="fw-semibold">Create your fleet</div>
                                <div class="small text-muted">Add vehicles, drivers and set up fare rules.</div>
                            </div>
                        </li>

                        <li class="d-flex mb-3">
                            <div class="me-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width:44px;height:44px;">2</div>
                            <div>
                                <div class="fw-semibold">Start dispatching</div>
                                <div class="small text-muted">Auto or manual dispatch to nearby drivers.</div>
                            </div>
                        </li>

                        <li class="d-flex mb-3">
                            <div class="me-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width:44px;height:44px;">3</div>
                            <div>
                                <div class="fw-semibold">Monitor & grow</div>
                                <div class="small text-muted">Insights to optimize performance and scale.</div>
                            </div>
                        </li>
                    </ol>
                </div>

                <div class="col-lg-6">
                    <div class="card p-3 shadow-sm rounded-4">
                        <div class="mock-map">Illustration</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- DASHBOARD / DEMO PANELS -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="card p-3 h-100">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="small text-muted">Active Drivers</div>
                                <div class="h4 fw-bold">2,512</div>
                            </div>
                            <div class="text-success">+4.2%</div>
                        </div>

                        <div class="mt-3 small text-muted">Today's active drivers and quick stats.</div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card p-3 h-100">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="small text-muted">Rides Today</div>
                                <div class="h4 fw-bold">12,340</div>
                            </div>
                            <div class="text-primary">+1.1%</div>
                        </div>

                        <div class="mt-3 small text-muted">Real-time ride count and throughput.</div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card p-3 h-100">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="small text-muted">Revenue</div>
                                <div class="h4 fw-bold">$24,980</div>
                            </div>
                            <div class="text-warning">+8.4%</div>
                        </div>

                        <div class="mt-3 small text-muted">Net revenue for the day (mock).</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PRICING -->
    <section id="pricing" class="py-5 bg-white">
        <div class="container">
            <div class="text-center mb-4">
                <h3 class="fw-semibold">Pricing</h3>
                <p class="text-muted">Simple pricing for teams of all sizes.</p>
            </div>

            <div class="row g-4">
                @php
                    $plans = [
                        ['name'=>'Starter','price'=>'$49/mo','bullets'=>['Up to 100 rides','Basic support','1 admin']],
                        ['name'=>'Growth','price'=>'$149/mo','bullets'=>['Unlimited rides','Priority support','5 admins']],
                        ['name'=>'Enterprise','price'=>'Custom','bullets'=>['SLA & onboarding','Dedicated support','Custom integrations']],
                    ];
                @endphp

                @foreach($plans as $idx => $p)
                    <div class="col-md-4">
                        <div class="p-4 pricing-card h-100 {{ $p['name']==='Growth' ? 'pricing-highlight' : '' }}">
                            <div class="small text-muted">{{ $p['name'] }}</div>
                            <div class="h3 fw-bold mt-2">{{ $p['price'] }}</div>

                            <ul class="mt-3 small text-muted">
                                @foreach($p['bullets'] as $b)
                                    <li class="d-flex align-items-start mb-2">
                                        <div class="me-2 mt-1 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width:28px;height:28px;font-size:12px;">✓</div>
                                        <div>{{ $b }}</div>
                                    </li>
                                @endforeach
                            </ul>

                            <div class="mt-3">
                                <a href="#" class="btn btn-primary w-100">Choose</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- TESTIMONIALS (Carousel) -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-4">
                <h3 class="fw-semibold">Trusted by operations teams worldwide</h3>
                <p class="text-muted">What our partners say about SwiftRide.</p>
            </div>

            <div id="testimonialsCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card p-4">
                                    <div class="d-flex align-items-start gap-3">
                                        <div class="rounded-circle bg-light d-flex align-items-center justify-content-center" style="width:56px;height:56px;">AR</div>
                                        <div>
                                            <div class="fw-semibold">Ali Rehman</div>
                                            <div class="small text-muted">Operations Manager</div>
                                        </div>
                                    </div>

                                    <div class="mt-3 text-muted">"SwiftRide helped us reduce wait times by 32% and improved driver retention with clear payouts."</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card p-4">
                                    <div class="d-flex align-items-start gap-3">
                                        <div class="rounded-circle bg-light d-flex align-items-center justify-content-center" style="width:56px;height:56px;">MJ</div>
                                        <div>
                                            <div class="fw-semibold">Maya J.</div>
                                            <div class="small text-muted">Fleet Owner</div>
                                        </div>
                                    </div>

                                    <div class="mt-3 text-muted">"Integrations were straightforward and the analytics dashboard is a game-changer."</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- FAQ & CONTACT -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6">
                    <h4 class="fw-semibold">Frequently asked questions</h4>
                    <div class="accordion mt-3" id="faq">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="q1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">How long does onboarding take?</button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faq">
                                <div class="accordion-body text-muted">Onboarding can take from a few days to two weeks depending on integrations and data migrations.</div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="q2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">Can I integrate my accounting software?</button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faq">
                                <div class="accordion-body text-muted">Yes — we support common accounting platforms via webhooks and export connectors.</div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="q3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">Do you offer SLAs?</button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faq">
                                <div class="accordion-body text-muted">Enterprise plans include SLA, onboarding, and dedicated support options.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <h4 class="fw-semibold">Get in touch</h4>
                    <!-- NOTE: create a route for contact.send in your web.php or update action to your controller -->
                    <form method="POST" action="#" class="mt-3" id="contactForm">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Message</label>
                            <textarea name="message" rows="4" class="form-control" required></textarea>
                        </div>
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">Send message</button>
                            <button type="reset" class="btn btn-outline-secondary">Reset</button>
                        </div>
                        <div class="mt-2 small text-success d-none" id="contactSuccess">Message sent (demo)</div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer id="contact" class="mt-auto py-5 bg-white border-top">
        <div class="container">
            <div class="row gy-4">
                <div class="col-md-4">
                    <div class="h5 fw-semibold">SwiftRide</div>
                    <p class="text-muted small mt-2">Build and scale your ride-hailing business with the right tools.</p>
                </div>

                <div class="col-md-4 d-flex">
                    <div class="me-5">
                        <div class="fw-semibold">Product</div>
                        <ul class="list-unstyled small text-muted mt-2">
                            <li>Features</li>
                            <li>Pricing</li>
                            <li>Roadmap</li>
                        </ul>
                    </div>
                    <div>
                        <div class="fw-semibold">Company</div>
                        <ul class="list-unstyled small text-muted mt-2">
                            <li>About</li>
                            <li>Careers</li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 text-md-end">
                    <div class="fw-semibold">Get in touch</div>
                    <div class="small text-muted mt-2">hello@swiftride.example</div>
                    <div class="mt-3 d-flex justify-content-md-end gap-2">
                        <div class="social-circle">F</div>
                        <div class="social-circle">T</div>
                        <div class="social-circle">L</div>
                    </div>
                </div>
            </div>

            <div class="text-center small text-muted mt-4">© {{ date('Y') }} SwiftRide — All rights reserved</div>
        </div>
    </footer>

</div>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Close mobile nav when clicking a link
    document.addEventListener('DOMContentLoaded', function(){
        document.querySelectorAll('.navbar-collapse .nav-link').forEach(function(el){
            el.addEventListener('click', function(){
                var bsCollapse = new bootstrap.Collapse(document.getElementById('mainNav'));
                bsCollapse.hide();
            });
        });

        // Simple demo behavior for contact form (so it feels complete without backend)
        var contactForm = document.getElementById('contactForm');
        if(contactForm){
            contactForm.addEventListener('submit', function(e){
                e.preventDefault();
                var success = document.getElementById('contactSuccess');
                success.classList.remove('d-none');
                setTimeout(function(){ success.classList.add('d-none'); contactForm.reset(); }, 2200);
            });
        }
    });
</script>

</body>
</html>
