<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/img/F-icon.png" rel="icon">
  <link href="/assets/img/F-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  {{-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet"/> --}}

  <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: EstateAgency - v4.7.0
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


  
  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      
      <a class="navbar-brand text-brand" href="{{ route('home') }}">
        <svg style=" @media(max-width: 450px){width: 16px !important; height: 16px !important; }"  version="1.0" xmlns="http://www.w3.org/2000/svg"
        width="35px" height="35px" max-height="38px";  viewBox="0 0 512.000000 512.000000"
        preserveAspectRatio="xMidYMid meet">
        <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
        fill="#000000" stroke="none">
        <path d="M758 5090 c-237 -28 -433 -189 -511 -420 -21 -64 -22 -77 -25 -712
        l-3 -648 600 0 601 0 2 293 3 292 1505 5 1505 5 62 23 c267 100 433 373 393
        646 -34 234 -188 417 -414 494 l-81 27 -1785 1 c-982 1 -1815 -2 -1852 -6z"/>
        <path d="M222 2233 l3 -598 1748 -3 c1921 -2 1809 -6 1941 58 134 64 256 200
        306 341 31 88 39 250 16 339 -57 225 -235 397 -463 445 -58 12 -336 15 -1811
        15 l-1742 0 2 -597z"/>
        <path d="M222 833 c5 -358 10 -386 85 -511 115 -189 298 -293 518 -293 168 0
        302 57 422 177 79 79 142 193 162 292 7 31 11 175 11 352 l0 300 -601 0 -601
        0 4 -317z"/>
        </g>
        </svg>AR Dunyo<span class="color-b">Baraka</span></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a   class="nav-link  @yield('index')" href="{{ route('home') }}">{{ __('words.home')}}</a>
          </li> 

          <li  class="nav-item">
            <a class="nav-link  @yield('about')" href="{{ route('about') }}">{{ __('words.about') }}</a>
          </li>

          <li class="nav-item">
            <a class="nav-link @yield('property') " href="{{ route('property') }}">{{ __('words.rooms') }}</a>
          </li>


          <li class="nav-item">
            <a class="nav-link  @yield('contact')" href="{{ route('contact') }}">{{ __('words.contact') }}</a>
          </li>
        </ul>
      </div>
     
      <div class="asdasd d-flex ">
        <form class="d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" action="{{route('search')}}" method="GET" >
          <div class="input-group">
              <input class="form-control" required  type="text" name="key" placeholder="{{ __('words.search') }}" aria-label="Search for..." aria-describedby="btnNavbarSearch" />
              <button style=" background-color : rgb(17, 173, 17) !important; border-color:rgb(17, 173, 17);:focus :
                outline: none; box-shadow: none; @media(max-width: 770px){display: block !important}" class="btn btn-primary " id="btnNavbarSearch" type="submit"><i class="bi bi-search"></i></button>
          </div>
        </form>
        <div class="dropdown show d-flex widh" >
          <button class="btn btn-secondary dropdown-toggle text-dark p-md-auto" style="background-color:rgb(25, 190, 25)" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            {{ App::getLocale() }}
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"  >
            <a href="/lang/Uz" class="dropdown-item">Uz</a>
            <a class="dropdown-item" href="/lang/Ru">Ru</a>
            <a class="dropdown-item" href="/lang/En">Eng</a>
          </div>
        </div>
      </div>




      
    </div>
  </nav><!-- End Header/Navbar -->
  @yield('intro')

  <main id="main">
 
    @yield('content')
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <section class="section-footer">
    <div class="container">
      <div class="row" style="width: 50%  @media(max-width: 770px){ width: auto !important; padding: 0 20px}">
        <div  style="text-align: center" >
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Far Dunyo Baraka</h3>
            </div>
            <div class="w-body-a" >
              <p class="w-text-a color-text-a">
                {{ __('words.footrText') }}
              </p>
            </div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a">
                  <span class="color-text-a">Tel .</span> {{$contact->email}}
                </li>
                <li class="color-a">
                  <span class="color-text-a">Email .</span> {{ $contact->phone}}
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="nav-footer">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="{{ route('home') }}">{{ __('words.home') }}
              <li class="list-inline-item">
                <a href="{{ route('about') }}">{{ __('words.about') }}</a>
              </li>
              <li class="list-inline-item">
                <a href="{{ route('property') }}">{{ __('words.rooms') }}</a>
              </li>
              <li class="list-inline-item">
                <a href="{{ route('contact') }}">{{ __('words.contact') }}</a>
              </li>
            </ul>
          </nav>
          <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-linkedin" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>

</body>

</html>