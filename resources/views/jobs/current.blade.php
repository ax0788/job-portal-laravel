@extends('user.main')
<style>
 .card {
  box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
 }

 .form-group {
  margin-bottom: 1.5rem;
 }
</style>


@section('content')
 <div class="content-container container p-6 mt-2 mb-4">
  <div class="row mt-3 mb-2 ml-3 mr-3 p-3">
   <div class="col-md-2"></div>
   <div class="col-md-8">
    @if (Session::has('message'))
     <div class="alert alert-success">
      {{ Session::get('message') }}
     </div>
    @endif


    <div class="card">
     <div class="card-header">Current Posted Jobs</div>
     <div class="card-body">

      <table class="table">

       <tbody>

        @foreach ($jobs as $job)
         <tr>
          <td>
           @if (empty(Auth::user()->company->logo))
            <img src="{{ asset('avatar/man.jpg') }}" width="80">
           @else
            <img src="{{ asset('uploads/logo') }}/{{ Auth::user()->company->logo }}" width="80">
           @endif



          </td>
          <td>Position:{{ $job->position }}
           <br>
           <i class="fa fa-clock-o"aria-hidden="true"></i>&nbsp;{{ $job->type }}
          </td>
          <td><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;Address:{{ $job->address }}</td>
          <td><i class="fa fa-globe"aria-hidden="true"></i>&nbsp;Date:{{ $job->created_at->diffForHumans() }}</td>
          <td>
           <a href="{{ route('jobs.show', [$job->id, $job->slug]) }}">
            <button class="btn btn-success btn-sm"> Read
            </button>
           </a>
           <br><br>
           <a href="{{ route('job.edit', [$job->id]) }}"> <button class="btn btn-dark">Edit</button></a>

          </td>
         </tr>
        @endforeach
       </tbody>
      </table>


     </div>



    </div>
    <div class="col-md-2"></div>

   </div>
  </div>
 </div>
@endsection
