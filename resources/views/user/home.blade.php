@extends('user.main')
@section('content')
 <!-- Carousel Start -->
 <div class="container-fluid p-0">
  <div class="owl-carousel header-carousel position-relative">
   <div class="owl-carousel-item position-relative">
    <img class="img-fluid" src="{{ asset('img/carousel-1.jpg') }}" alt="">
    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
     style="background: rgba(43, 57, 64, .5);">
     <div class="container">
      <div class="row justify-content-start">
       <div class="col-10 col-lg-8">
        <h1 class="display-3 text-white animated slideInDown mb-4">Finding jobs made easy.</h1>
        <p class="fs-5 fw-medium text-white mb-4 pb-2">We aim for a convenient and seamless job search experience.</p>
        <a href="" class="btn btn-secondary py-md-3 px-md-5 me-3 animated slideInLeft">Search For a  Job</a>
        <br>
       </div>
      </div>
     </div>
    </div>
   </div>
   <div class="owl-carousel-item position-relative owl-image-2">
    <img class="img-fluid" src="{{ asset('img/carousel-2.jpg') }}" alt="">
    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
     style="background: rgba(43, 57, 64, .5);">
     <div class="container">
      <div class="row justify-content-start">
       <div class="col-10 col-lg-8">
        <h1 class="display-3 text-white animated slideInDown mb-4">Search for the Job of your dreams!</h1>

       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
 <!-- Carousel End -->


 <!-- Search Start -->
 <div class="container-fluid bg-secondary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
  <div class="container" id="app">
   <div class="row g-2">
    <div class="col-md-10">
     <div class="row g-2">
      <div class="col-md-4">
      <Search></Search>
      </div>
      <div class="col-md-4">
       <select class="form-select border-0">
        <option selected>Category</option>
        <option value="1">Category 1</option>
        <option value="2">Category 2</option>
        <option value="3">Category 3</option>
       </select>
      </div>
      <div class="col-md-4">
       <select class="form-select border-0">
        <option selected>Location</option>
        <option value="1">Location 1</option>
        <option value="2">Location 2</option>
        <option value="3">Location 3</option>
       </select>
      </div>
     </div>
    </div>
    <div class="col-md-2">
     <button class="btn btn-dark border-0 w-100">Search</button>
    </div>
   </div>
  </div>
 </div>
 <!-- Search End -->


 <!-- Category Start -->
 <div class="container-xxl py-5">
  <div class="container">
   <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Explore By Category</h1>
   <div class="row g-4">
    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
     <a class="cat-item rounded p-4" href="">
      <i class="fa fa-3x fa-mail-bulk text-secondary mb-4"></i>
      <h6 class="mb-3">Marketing</h6>
      <p class="mb-0">123 Vacancy</p>
     </a>
    </div>
    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
     <a class="cat-item rounded p-4" href="">
      <i class="fa fa-3x fa-headset text-secondary mb-4"></i>
      <h6 class="mb-3">Customer Service</h6>
      <p class="mb-0">123 Vacancy</p>
     </a>
    </div>
    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
     <a class="cat-item rounded p-4" href="">
      <i class="fa fa-3x fa-user-tie text-secondary mb-4"></i>
      <h6 class="mb-3">Human Resource</h6>
      <p class="mb-0">123 Vacancy</p>
     </a>
    </div>
    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
     <a class="cat-item rounded p-4" href="">
      <i class="fa fa-3x fa-tasks text-secondary mb-4"></i>
      <h6 class="mb-3">Project Management</h6>
      <p class="mb-0">123 Vacancy</p>
     </a>
    </div>
    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
     <a class="cat-item rounded p-4" href="">
      <i class="fa fa-3x fa-chart-line text-secondary mb-4"></i>
      <h6 class="mb-3">Business Development</h6>
      <p class="mb-0">123 Vacancy</p>
     </a>
    </div>
    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
     <a class="cat-item rounded p-4" href="">
      <i class="fa fa-3x fa-hands-helping text-secondary mb-4"></i>
      <h6 class="mb-3">Sales & Communication</h6>
      <p class="mb-0">123 Vacancy</p>
     </a>
    </div>
    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
     <a class="cat-item rounded p-4" href="">
      <i class="fa fa-3x fa-book-reader text-secondary mb-4"></i>
      <h6 class="mb-3">Teaching & Education</h6>
      <p class="mb-0">123 Vacancy</p>
     </a>
    </div>
    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
     <a class="cat-item rounded p-4" href="">
      <i class="fa fa-3x fa-drafting-compass text-secondary mb-4"></i>
      <h6 class="mb-3">Design & Creative</h6>
      <p class="mb-0">123 Vacancy</p>
     </a>
    </div>
   </div>
  </div>
 </div>
 <!-- Category End -->


 <!-- About Start -->
 <div class="container-xxl py-5">
  <div class="container">
   <div class="row g-5 align-items-center">
    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
     <div class="row g-0 about-bg rounded overflow-hidden">
      <div class="col-6 text-start">
       <img class="img-fluid w-100" src="img/about-1.jpg">
      </div>
      <div class="col-6 text-start">
       <img class="img-fluid" src="img/about-2.jpg" style="width: 85%; margin-top: 15%;">
      </div>
      <div class="col-6 text-end">
       <img class="img-fluid" src="img/about-3.jpg" style="width: 85%;">
      </div>
      <div class="col-6 text-end">
       <img class="img-fluid w-100" src="img/about-4.jpg">
      </div>
     </div>
    </div>
    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
     <h1 class="mb-4">We Help To Get The Best Job And Find A Talent</h1>
     <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita
      erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
     <p><i class="fa fa-check text-secondary me-3"></i>Tempor erat elitr rebum at clita</p>
     <p><i class="fa fa-check text-secondary me-3"></i>Aliqu diam amet diam et eos</p>
     <p><i class="fa fa-check text-secondary me-3"></i>Clita duo justo magna dolore erat amet</p>
     <a class="btn btn-secondary py-3 px-5 mt-3" href="">Read More</a>
    </div>
   </div>
  </div>
 </div>
 <!-- About End -->


 <!-- Jobs Start -->
 <div class="container-xxl py-5">
  <div class="container">
   <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Job Listing</h1>
   <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
     <li class="nav-item">
      <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
       <h6 class="mt-n1 mb-0">Featured</h6>
      </a>
     </li>
     <li class="nav-item">
      <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
       <h6 class="mt-n1 mb-0">Full Time</h6>
      </a>
     </li>
     <li class="nav-item">
      <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
       <h6 class="mt-n1 mb-0">Part Time</h6>
      </a>
     </li>
    </ul>


    <div class="tab-content">
     <div id="tab-1" class="tab-pane fade show p-0 active">
      @foreach ($jobs as $job)
       <div class="job-item p-4 mb-4">
        <div class="row g-4">
         <div class="col-sm-12 col-md-8 d-flex align-items-center">
          <img class="flex-shrink-0 img-fluid border rounded"
           src="{{ $job->company->logo }}" alt=""
           style="width: 80px; height: 80px;">
          <div class="text-start ps-4">
           <h5 class="mb-3">{{ $job->position }}</h5>
           <span class="text-truncate me-3"><i
             class="fa fa-map-marker-alt text-secondary me-2"></i>{{ $job->address }}</span>
           <span class="text-truncate me-3 badge badge-success mt-1">{{ $job->type }}</span>
           <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-secondary me-2 mt-1"></i>$123 -
            $456</span>
          </div>
         </div>
         <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
          <div class="d-flex mb-3">
           <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-secondary"></i></a>
           <a class="btn btn-secondary" href="{{ route('jobs.show', [$job->id, $job->slug]) }}">Apply Now</a>
          </div>
          <small class="text-truncate"><i
            class="far fa-calendar-alt text-secondary me-2"></i>{{ $job->created_at->diffForHumans() }}</small>
         </div>
        </div>
       </div>
      @endforeach
      <a href="{{ route('job.list') }}" class="btn btn-secondary py-3 px-5" href="">Browse More Jobs</a>
     </div>
    </div>
    <br>
   </div>
  </div>
 </div>
 <!-- Jobs End -->
@endsection
