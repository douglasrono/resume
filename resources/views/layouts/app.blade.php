<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <header id="header" class="fixed-top d-flex align-items-center bg-info">
            <div class="container d-flex align-items-center justify-content-between">
                <div class="logo">
                    <h1>
                        <a href="/" class="text-uppercase text-success">Douglas Rono</a>
                    </h1>
                </div>

                <nav id="navbar" class="navbar text-uppercase">
                    <ul>
                        <li>
                            <a class="nav-link scrollto active" href="/">Home</a>
                        </li>
                        <li>
                            <a class="nav-link scrollto" href="/about">About</a>
                        </li>
                        <li>
                            <a class="nav-link scrollto" href="/services">Services</a>
                        </li>
                        <li>
                            <a class="nav-link scrollto" href="/portfolio">Projects</a>
                        </li>
                        <li>
                            <a class="nav-link scrollto" href="/contact">Contact</a>
                        </li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>
            </div>
        </header>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
      <!-- Vendor JS Files -->
      <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
      <script src="assets/vendor/aos/aos.js"></script>
      <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
      <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
      <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
      <script src="assets/vendor/php-email-form/validate.js"></script>

      <!-- Template Main JS File -->
      <script src="assets/js/main.js"></script>
</body>

</html>
