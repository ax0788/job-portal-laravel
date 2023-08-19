@extends('user.main')
@section('content')
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
     <div class="row justify-content-center gy-5 gx-4">
        <div class="col-md-10">
            @if(Auth::user()->role =='seeker')
            @foreach($jobs as $job)
            <div class="card mb-5">
                <div class="card-header"> <h5>Title: {{ $job->title }}</h5></div>
                <small class="badge badge-primary" style="color: black; font-size:1rem; text-align:initial;">Position: {{ $job->position }}</small>
                <div class="card-body">Description: <br> {{ $job->description }}</div>
                <div class="card-footer d-flex justify-content-between"><span><a href="{{ route('jobs.show', [$job->id, $job->slug]) }}">Read More</a></span> <br>
                <span class="float-right">Last date to apply: {{ $job->last_date }}</span></div>
            </div>
            @endforeach
            @else

            You're logged in


            @endif

        </div>
     </div>
    </div>
</div>
@endsection
