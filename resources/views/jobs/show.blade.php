@extends('user.main')

@section('content')
 <!-- Job Detail Start -->
 <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
  <div class="container">
   <div class="row gy-5 gx-4">
    <div class="col-lg-8" id="app">
     @if (Session::has('message'))
      <div class="alert alert-success">
       {{ Session::get('message') }}
      </div>
     @endif
     <div class="d-flex align-items-center mb-5">
      <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-2.jpg" alt=""
       style="width: 80px; height: 80px;">
      <div class="text-start ps-4">
       <h3 class="mb-3">{{ $job->position }}</h3>
       <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $job->address }}</span>
       <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>{{ $job->type }}</span>
       <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
      </div>
     </div>

     <div class="mb-5">
      <h4 class="mb-3">Job description</h4>
      <p> {{ $job->description }}.</p>
      <h4 class="mb-3">Responsibility</h4>
      <p>{{ $job->roles }}</p>
      <ul class="list-unstyled">
       <li><i class="fa fa-angle-right text-primary me-2"></i>Dolor justo tempor duo ipsum accusam</li>
       <li><i class="fa fa-angle-right text-primary me-2"></i>Elitr stet dolor vero clita labore gubergren</li>
       <li><i class="fa fa-angle-right text-primary me-2"></i>Rebum vero dolores dolores elitr</li>
       <li><i class="fa fa-angle-right text-primary me-2"></i>Est voluptua et sanctus at sanctus erat</li>
       <li><i class="fa fa-angle-right text-primary me-2"></i>Diam diam stet erat no est est</li>
      </ul>
      <h4 class="mb-3">Qualifications</h4>
      <p>Magna et elitr diam sed lorem. Diam diam stet erat no est est. Accusam sed lorem stet voluptua sit sit at stet
       consetetur, takimata at diam kasd gubergren elitr dolor</p>
      <ul class="list-unstyled">
       <li><i class="fa fa-angle-right text-primary me-2"></i>Dolor justo tempor duo ipsum accusam</li>
       <li><i class="fa fa-angle-right text-primary me-2"></i>Elitr stet dolor vero clita labore gubergren</li>
       <li><i class="fa fa-angle-right text-primary me-2"></i>Rebum vero dolores dolores elitr</li>
       <li><i class="fa fa-angle-right text-primary me-2"></i>Est voluptua et sanctus at sanctus erat</li>
       <li><i class="fa fa-angle-right text-primary me-2"></i>Diam diam stet erat no est est</li>
      </ul>
     </div>
     @if (Auth::check() && (Auth::user()->role = 'seeker'))



      @if (!$job->checkApplication())
      <Apply :jobid={{ $job->id }}></Apply>
        @else
        <p class="text-danger" style="font-size: 1.5rem;">You already applied to this job.</p>
      @endif


      <Favourite :jobid={{ $job->id }} :favourited={{ $job->checkSaved() ? 'true' : 'false' }}></Favourite>


     @else
      <button class="btn btn-danger w-70" type="submit">
       <a href="{{ route('register') }}" class="text-white"> Register new Account to Apply!</a>
      </button>
     @endif

    </div>

    <div class="col-lg-4">
     <div class="bg-light rounded p-5 mb-4 wow slideInUp" data-wow-delay="0.1s">
      <h4 class="mb-4">Job Summary</h4>
      @if (empty($job->company->id))
       <p class="text-danger">Unregistered company</p>
      @else
       <p><i class="fa fa-angle-right text-primary me-2"></i><a
         href="{{ route('company.index', [$job->company->id, $job->company->slug]) }}"> Company:
         {{ $job->company->cname }}</p>
      @endif
      <p><i class="fa fa-angle-right text-primary me-2"></i>Published: {{ $job->created_at->diffForHumans() }}</p>
      <p><i class="fa fa-angle-right text-primary me-2"></i>Job Nature: {{ $job->type }}</p>
      <p><i class="fa fa-angle-right text-primary me-2"></i>Position: {{ $job->position }}</p>
      <p><i class="fa fa-angle-right text-primary me-2"></i>Salary: $123 - $456</p>
      <p><i class="fa fa-angle-right text-primary me-2"></i>Location: {{ $job->address }}</p>
      <p><i class="fa fa-angle-right text-primary me-2"></i>Last Date to Apply:
       {{ date('F d, Y', strtotime($job->last_date)) }}</p>
     </div>
     <div class="bg-light rounded p-5 wow slideInUp" data-wow-delay="0.1s">
      <h4 class="mb-4">Company Detail</h4>
      <p class="m-0">Ipsum dolor ipsum accusam stet et et diam dolores, sed rebum sadipscing elitr vero dolores. Lorem
       dolore elitr justo et no gubergren sadipscing, ipsum et takimata aliquyam et rebum est ipsum lorem diam. Et lorem
       magna eirmod est et et sanctus et, kasd clita labore.</p>
     </div>
    </div>
   </div>
  </div>
 </div>
 <!-- Job Detail End -->
@endsection
