<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Educa Studio')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- FontAwesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
    
    <style>
        /* Custom header top bar */
        .top-bar {
            background-color: #f2a62d;
            color: white;
            font-size: 14px;
            padding: 5px 0;
        }
        .top-bar a {
            color: white;
            text-decoration: none;
            margin-right: 15px;
        }
        .top-bar a:hover {
            text-decoration: underline;
        }

        footer {
            background-color: #222;
            color: #f2a62d;
            padding: 40px 0 20px;
            font-size: 14px;
        }
        footer a {
            color: #f2a62d;
            text-decoration: none;
            margin-right: 10px;
        }
        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<!-- Topbar -->
<div class="top-bar">
    <div class="container d-flex justify-content-between align-items-center">

        <div class="d-flex align-items-center">
            <div class="me-4"><i class="fa fa-phone"></i> <a href="tel:+622986031005" class="text-white">(+62) 298 6031005</a></div>
            <div class="me-4"><i class="fa fa-envelope"></i> <a href="mailto:cs@educastudio.com" class="text-white">cs@educastudio.com</a></div>
            <div><i class="fa fa-envelope"></i> <a href="mailto:bd@educastudio.com" class="text-white">bd@educastudio.com</a></div>
        </div>

        <div class="d-flex align-items-center">
            <a href="https://facebook.com/educastudio" class="me-3 text-white" target="_blank"><i class="fab fa-facebook-f fa-2x"></i></a>
            <a href="https://twitter.com/educastudio" class="me-3 text-white" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>
            <a href="https://instagram.com/educastudio" class="me-3 text-white" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
            <a href="https://linkedin.com/company/educastudio" class="text-white" target="_blank"><i class="fab fa-linkedin fa-2x"></i></a>
        </div>

    </div>
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
            <img src="{{ asset('https://www.educastudio.com/new_template/img/logo-educa.png?v=1.4') }}" alt="Educa Studio" style="height: 75px; margin-right: 75px;" />
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarEduca" aria-controls="navbarEduca" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarEduca">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fw-semibold">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Brands</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/">Home</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Channels</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/contact">Contact</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Programs</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/karir">Karir</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Hub</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/news">News</a></li>
                        <li><a class="dropdown-item" href="/about">About</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">🌐 INA</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-user"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Content -->
<div class="container my-5">
    @yield('content')
</div>

<!-- Footer -->
<!-- Footer -->
<footer>
    <div class="container">
        <div class="row text-light">
            <div class="col-md-4 mb-3">
                <h5>Unduh Gratis</h5>
                <div class="d-flex flex-wrap gap-2">
                    <a href="https://play.google.com/store/apps/details?id=com.educastudio.app" class="btn btn-dark btn-sm" target="_blank"><i class="fab fa-google-play"></i> Google Play</a>
                    <a href="https://apps.apple.com/app/educastudio" class="btn btn-dark btn-sm" target="_blank"><i class="fab fa-apple"></i> App Store</a>
                    <a href="https://www.amazon.com/educastudio" class="btn btn-dark btn-sm" target="_blank"><i class="fab fa-amazon"></i> Kindle Fire</a>
                    <a href="https://www.samsung.com/galaxy-store/educastudio" class="btn btn-dark btn-sm" target="_blank"><i class="fab fa-samsung"></i> Galaxy Store</a>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <h5>Hubungi Kami</h5>
                <p>Jl. Gilingrejo No. 10 Salatiga, Jawa Tengah 50743 - <a href="https://www.google.com/maps/place/Educa+Studio" target="_blank" class="text-warning">Lihat Peta</a></p>
                <p><i class="fa fa-phone"></i> <a href="tel:+622986031005" class="text-warning">(+62) 298 6031005</a></p>
                <p><i class="fa fa-envelope"></i> <a href="mailto:cs@educastudio.com" class="text-warning">cs@educastudio.com</a> | <a href="mailto:bd@educastudio.com" class="text-warning">bd@educastudio.com</a></p>
            </div>

            <div class="col-md-4 mb-3">
                <h5>Media Sosial</h5>
                <a href="https://facebook.com/educastudio" class="text-primary me-2" target="_blank"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="https://twitter.com/educastudio" class="text-info me-2" target="_blank"><i class="fab fa-twitter fa-lg"></i></a>
                <a href="https://instagram.com/educastudio" class="text-warning me-2" target="_blank"><i class="fab fa-instagram fa-lg"></i></a>
                <a href="https://linkedin.com/company/educastudio" class="text-primary me-2" target="_blank"><i class="fab fa-linkedin fa-lg"></i></a>
            </div>
        </div>

        <hr class="border-warning" />

        <div class="text-center text-warning">
            © 2011 - 2026 PT Educa Sisfomedia Indonesia. All Rights Reserved<br />
            <a href="/privacy-policy" class="text-warning">Privacy Policy</a> | <a href="/terms" class="text-warning">Terms & Conditions</a> | <a href="/eula" class="text-warning">EULA</a>
        </div>
    </div>
</footer>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>