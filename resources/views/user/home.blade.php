@extends('user.main')

@section('content')
 <!-- HOME -->
 <section class="home-section section-hero overlay bg-image" style="background-image: url('images/hero_1.jpg');"
  id="home-section">

  <div class="container">
   <div class="row align-items-center justify-content-center">
    <div class="col-md-12">
     <div class="mb-5 text-center">
      <h1 class="text-white font-weight-bold">The Easiest Way To Get Your Dream Job</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate est, consequuntur perferendis.</p>
     </div>
     <form method="post" class="search-jobs-form">
      <div class="row mb-5">
       <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
        <input type="text" class="form-control form-control-lg" placeholder="Job title, Company...">
       </div>
       <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
        <select class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true"
         title="Select Region">
         <option>Anywhere</option>
         <option>San Francisco</option>
         <option>Palo Alto</option>
         <option>New York</option>
         <option>Manhattan</option>
         <option>Ontario</option>
         <option>Toronto</option>
         <option>Kansas</option>
         <option>Mountain View</option>
        </select>
       </div>
       <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
        <select class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true"
         title="Select Job Type">
         <option>Part Time</option>
         <option>Full Time</option>
        </select>
       </div>
       <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
        <button type="submit" class="btn btn-primary btn-lg btn-block text-white btn-search"><span
          class="icon-search icon mr-2"></span>Search Job</button>
       </div>
      </div>
      <div class="row">
       <div class="col-md-12 popular-keywords">
        <h3>Trending Keywords:</h3>
        <ul class="keywords list-unstyled m-0 p-0">
         <li><a href="#" class="">UI Designer</a></li>
         <li><a href="#" class="">Python</a></li>
         <li><a href="#" class="">Developer</a></li>
        </ul>
       </div>
      </div>
     </form>
    </div>
   </div>
  </div>

  <a href="#next" class="scroll-button smoothscroll">
   <span class=" icon-keyboard_arrow_down"></span>
  </a>

 </section>

 <!-- CATEGORIES -->
 <section class="py-5">
  <div class="container-xxl py-5">
   <div class="container categories">
    <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s"
     style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">Explore By Category</h1>
    <div class="row g-4">

     <div class="col-lg-3 col-sm-6 wow fadeInUp mb-3" data-wow-delay="0.1s"
      style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
      <a class="cat-item rounded p-6 m-6" href="">
       <i class="fa fa-3x fa-mail-bulk text-primary mb-4 mt-4 ml-4"></i>
       <h6 class="mb-3 ml-3">Marketing</h6>
       <p class="mb-3 ml-3">123 Vacancy</p>
      </a>
     </div>


     <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s"
      style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
      <a class="cat-item rounded p-6 m-6" href="">
       <i class="fa fa-3x fa-headset text-primary mb-4 mt-4 ml-4"></i>
       <h6 class="mb-3 ml-3">Customer Service</h6>
       <p class="mb-3 ml-3">123 Vacancy</p>
      </a>
     </div>
     <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s"
      style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
      <a class="cat-item rounded p-6 m-6" href="">
       <i class="fa fa-3x fa-user-tie text-primary mb-4 mt-4 ml-4"></i>
       <h6 class="mb-3 ml-3">Human Resource</h6>
       <p class="mb-3 ml-3">123 Vacancy</p>
      </a>
     </div>
     <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s"
      style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
      <a class="cat-item rounded p-6 m-6" href="">
       <i class="fa fa-3x fa-tasks text-primary mb-4 mt-4 ml-4"></i>
       <h6 class="mb-3 ml-3">Project Management</h6>
       <p class="mb-3 ml-3">123 Vacancy</p>
      </a>
     </div>
     <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s"
      style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
      <a class="cat-item rounded p-6 m-6" href="">
       <i class="fa fa-3x fa-chart-line text-primary mb-4 mt-4 ml-4"></i>
       <h6 class="mb-3 ml-3">Business Development</h6>
       <p class="mb-3 ml-3">123 Vacancy</p>
      </a>
     </div>
     <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s"
      style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
      <a class="cat-item rounded p-6 m-6" href="">
       <i class="fa fa-3x fa-hands-helping text-primary mb-4 mt-4 ml-4"></i>
       <h6 class="mb-3 ml-3">Sales &amp; Communication</h6>
       <p class="mb-3 ml-3">123 Vacancy</p>
      </a>
     </div>
     <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s"
      style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
      <a class="cat-item rounded p-6 m-6" href="">
       <i class="fa fa-3x fa-book-reader text-primary mb-4 mt-4 ml-4"></i>
       <h6 class="mb-3 ml-3">Teaching &amp; Education</h6>
       <p class="mb-3 ml-3">123 Vacancy</p>
      </a>
     </div>
     <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s"
      style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
      <a class="cat-item rounded p-6 m-6" href="">
       <i class="fa fa-3x fa-drafting-compass text-primary mb-4 mt-4 ml-4"></i>
       <h6 class="mb-3 ml-3">Design &amp; Creative</h6>
       <p class="mb-3 ml-3">123 Vacancy</p>
      </a>
     </div>
    </div>
   </div>
  </div>
 </section>
 {{-- CATEGORIES END --}}

 <!-- JOB STATS -->
 <section class="py-5 bg-image overlay-primary fixed overlay" id="next"
  style="background-image: url('images/hero_1.jpg');">
  <div class="container">
   <div class="row mb-5 justify-content-center">
    <div class="col-md-7 text-center">
     <h2 class="section-title mb-2 text-white">JobBoard Site Stats</h2>
     <p class="lead text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita unde officiis
      recusandae sequi excepturi corrupti.</p>
    </div>
   </div>
   <div class="row pb-0 block__19738 section-counter">

    <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
     <div class="d-flex align-items-center justify-content-center mb-2">
      <strong class="number" data-number="1930">0</strong>
     </div>
     <span class="caption">Candidates</span>
    </div>

    <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
     <div class="d-flex align-items-center justify-content-center mb-2">
      <strong class="number" data-number="54">0</strong>
     </div>
     <span class="caption">Jobs Posted</span>
    </div>

    <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
     <div class="d-flex align-items-center justify-content-center mb-2">
      <strong class="number" data-number="120">0</strong>
     </div>
     <span class="caption">Jobs Filled</span>
    </div>

    <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
     <div class="d-flex align-items-center justify-content-center mb-2">
      <strong class="number" data-number="550">0</strong>
     </div>
     <span class="caption">Companies</span>
    </div>


   </div>
  </div>
 </section>
 <!-- JOB STATS END-->


 <!-- JOB LISTINGS -->
 <section class="site-section">
  <div class="container">

   <div class="row mb-5 justify-content-center">
    <div class="col-md-7 text-center">
     <h2 class="section-title mb-2">43,167 Job Listed</h2>
    </div>
   </div>


   <ul class="job-listings mb-5">
    <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
     <a href="job-single.html"></a>
     <div class="job-listing-logo">
      <img src="images/job_logo_1.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
     </div>

     <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
      <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
       <h2>Product Designer</h2>
       <strong>Adidas</strong>
      </div>
      <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
       <span class="icon-room"></span> New York, New York
      </div>
      <div class="job-listing-meta">
       <span class="badge badge-danger">Part Time</span>
      </div>
     </div>

    </li>
    <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
     <a href="job-single.html"></a>
     <div class="job-listing-logo">
      <img src="images/job_logo_2.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
     </div>

     <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
      <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
       <h2>Digital Marketing Director</h2>
       <strong>Sprint</strong>
      </div>
      <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
       <span class="icon-room"></span> Overland Park, Kansas
      </div>
      <div class="job-listing-meta">
       <span class="badge badge-success">Full Time</span>
      </div>
     </div>
    </li>

    <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
     <a href="job-single.html"></a>
     <div class="job-listing-logo">
      <img src="images/job_logo_3.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
     </div>

     <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
      <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
       <h2>Back-end Engineer (Python)</h2>
       <strong>Amazon</strong>
      </div>
      <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
       <span class="icon-room"></span> Overland Park, Kansas
      </div>
      <div class="job-listing-meta">
       <span class="badge badge-success">Full Time</span>
      </div>
     </div>
    </li>

    <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
     <a href="job-single.html"></a>
     <div class="job-listing-logo">
      <img src="images/job_logo_4.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
     </div>

     <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
      <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
       <h2>Senior Art Director</h2>
       <strong>Microsoft</strong>
      </div>
      <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
       <span class="icon-room"></span> Anywhere
      </div>
      <div class="job-listing-meta">
       <span class="badge badge-success">Full Time</span>
      </div>
     </div>
    </li>

    <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
     <a href="job-single.html"></a>
     <div class="job-listing-logo">
      <img src="images/job_logo_5.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
     </div>

     <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
      <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
       <h2>Product Designer</h2>
       <strong>Puma</strong>
      </div>
      <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
       <span class="icon-room"></span> San Mateo, CA
      </div>
      <div class="job-listing-meta">
       <span class="badge badge-success">Full Time</span>
      </div>
     </div>
    </li>
    <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
     <a href="job-single.html"></a>
     <div class="job-listing-logo">
      <img src="images/job_logo_1.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
     </div>

     <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
      <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
       <h2>Product Designer</h2>
       <strong>Adidas</strong>
      </div>
      <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
       <span class="icon-room"></span> New York, New York
      </div>
      <div class="job-listing-meta">
       <span class="badge badge-danger">Part Time</span>
      </div>
     </div>

    </li>
    <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
     <a href="job-single.html"></a>
     <div class="job-listing-logo">
      <img src="images/job_logo_2.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
     </div>

     <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
      <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
       <h2>Digital Marketing Director</h2>
       <strong>Sprint</strong>
      </div>
      <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
       <span class="icon-room"></span> Overland Park, Kansas
      </div>
      <div class="job-listing-meta">
       <span class="badge badge-success">Full Time</span>
      </div>
     </div>
    </li>




   </ul>

   <div class="row pagination-wrap">
    <div class="col-md-6 text-center text-md-left mb-4 mb-md-0">
     <span>Showing 1-7 Of 43,167 Jobs</span>
    </div>
    <div class="col-md-6 text-center text-md-right">
     <div class="custom-pagination ml-auto">
      <a href="#" class="prev">Prev</a>
      <div class="d-inline-block">
       <a href="#" class="active">1</a>
       <a href="#">2</a>
       <a href="#">3</a>
       <a href="#">4</a>
      </div>
      <a href="#" class="next">Next</a>
     </div>
    </div>
   </div>

  </div>
 </section>
 <!-- JOB LISTINGS END-->


 <!-- CALL TO ACTION -->
 <section class="py-5 bg-image overlay-primary fixed overlay" style="background-image: url('images/hero_1.jpg');">
  <div class="container">
   <div class="row align-items-center">
    <div class="col-md-8">
     <h2 class="text-white">Looking For A Job?</h2>
     <p class="mb-3 ml-3 text-white lead">Lorem ipsum dolor sit amet consectetur adipisicing elit tempora adipisci
      impedit.</p>
    </div>
    <div class="col-md-3 ml-auto">
     <a href="#" class="btn btn-warning btn-block btn-lg">Sign Up</a>
    </div>
   </div>
  </div>
 </section>
@endsection
