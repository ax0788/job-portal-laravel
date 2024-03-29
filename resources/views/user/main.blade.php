<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <title>Laravel Jobs</title>
 <meta content="width=device-width, initial-scale=1.0" name="viewport">
 <meta content="" name="keywords">
 <meta content="" name="description">

 <!-- Favicon -->
 <link href="{{ asset('img/laravel-favicon.png') }}" rel="icon">
 <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">


 <!-- Google Web Fonts -->
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
  rel="stylesheet">

 <!-- Icon Font Stylesheet -->
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

 <!-- Libraries Stylesheet -->
 <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
 <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

 <!-- Customized Bootstrap Stylesheet -->
 <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

 <!-- Template Stylesheet -->
 <link href="{{ asset('css/style.css') }}" rel="stylesheet">
 {{-- Laravel with Mix  --}}
 <link rel="stylesheet" href="{{ mix('css/app.css') }}" />


</head>

<body>
 <div class="container-xxl bg-white p-0">
  <!-- Spinner Start -->
  {{-- <div id="spinner"
   class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
   <div class="spinner-border text-secondary" style="width: 3rem; height: 3rem;" role="status">
    <span class="sr-only">Loading...</span>
   </div>
  </div> --}}
  <!-- Spinner End -->


  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg bg-white navbar-light  sticky-top p-0">
   <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
    <h1 class="m-0 text-secondary">LaraJobs</h1>
   </a>
   <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
    <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav ms-auto p-4 p-lg-0">
     <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
     @guest
     <a href="{{ route('login') }}" class="nav-item nav-link">Login</a>
     <a href="{{ route('register') }}" class="nav-item nav-link">Register</a>
     @endguest
    @if (!Auth::guest() && Auth::user()->role == 'employer')
    <a href="{{ route('company.view') }}" class="nav-item nav-link">{{ Auth::user()->company->cname }}</a>
    @elseif(!Auth::guest() && Auth::user()->role == 'seeker')
    <a href="{{ route('savedJobs') }}" class="nav-item nav-link">About</a>
    <a href="#" class="nav-item nav-link">{{ Auth::user()->name }}</a>
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
    class="text-danger  nav-item nav-link log-out"><span class="mr-2 bi bi-box-arrow-right"></span> Logout</a>

   <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
   </form>
    @endif
    </div>

    @if (!Auth::guest() && Auth::user()->role == 'employer')
       <a href="{{ route('job.create') }}" class="btn btn-secondary rounded-0 py-4 px-lg-5 d-none d-lg-block">Post A Job<i
         class="fa fa-arrow-right ms-3"></i></a>
      @endif

   </div>
  </nav>
  <!-- Navbar End -->

  <div class="container-fluid  wow fadeIn" data-wow-delay="0.1s">

  @yield('content')

</div>


  <!-- Footer Start -->
  <div class="container-fluid bg-dark text-white-50 footer pt-2 mt-2 wow fadeIn" data-wow-delay="0.1s">
   <div class="container">
    <div class="copyright">
     <div class="row">
      <div class="col-md-6 text-center text-md-start mb-3 mb-md-0"> 2023
       &copy; <a class="border-bottom" href="#">LaraJobs</a>.All Right Reserved.

       Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
      </div>
      <div class="col-md-6 text-center text-md-end">
       <div class="footer-menu">
        <a href="{{ route('home') }}">Home</a>
        <a href="#">Cookies</a>
        <a href="#">Help</a>
        <a href="#">FQAs</a>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
  <!-- Footer End -->


  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
 </div>

 <!-- JavaScript Libraries -->
 <script src="{{ mix('js/app.js') }}"></script>

 <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
 <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
 <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
 <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
 <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
 <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

 <!-- Template Javascript -->
 <script src="{{ asset('js/main.js') }}"></script>

 <script>
    $( function() {
      $( "#datepicker" ).datepicker();
    } );
    </script>

</body>

</html>
