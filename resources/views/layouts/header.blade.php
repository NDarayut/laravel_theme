@section('header')
  
<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Company</h1><span>.</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
<<<<<<< HEAD:laravel_theme/resources/views/layouts/header.blade.php
          <li><a href="/">Home</a></li>
=======
          <li><a href="#hero">Home</a></li>
>>>>>>> 8eb9a7a210ad34cf802d296832338c8634a2c306:resources/views/layouts/header.blade.php
          <li class="dropdown"><a href="{{ url('about') }}" class="active"><span>About</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="team.html">Team</a></li>
              <li><a href="testimonials.html">Testimonials</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
            </ul>
          </li>

          <!-- route url home to service page -->
          <li><a href="{{ url('services') }}">Services</a></li>
          <li><a href="{{ url('portfolio') }}">Portfolio</a></li>
          <li><a href="{{ url('pricing') }}">Pricing</a></li>
          <li><a href="{{ url('blog') }}">Blog</a></li>
          <li><a href="{{ url('contact') }}">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header>

@endsection