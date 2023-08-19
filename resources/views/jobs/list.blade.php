@extends('user.home')
@section('content')
<style>
    .form-group{
        margin-left: 1rem;
    }

    .address{
        margin-left: .5rem;
    }
</style>
 <div class="container">
  <div class="row">
   <form action="{{ route('job.list') }}" method="GET" class="mt-5">

    <div class="form-inline d-flex">
     <div class="form-group">
      <label>Keyword&nbsp;</label>
      <input type="text" name="title" class="form-control">&nbsp;&nbsp;&nbsp;
     </div>
     <div class="form-group">
      <label>Employment type&nbsp;</label>
      <select class="form-control" name="type">
       <option value="">-select-</option>
       <option value="fulltime">fulltime</option>
       <option value="partime">partime</option>
       <option value="internship">   internship
    </option>
      </select>
      &nbsp;&nbsp;
     </div>
     <div class="form-group">
      <label>category</label>
      <select name="category_id" class="form-control">
       <option value="">-select-</option>

       @foreach (App\Models\Category::all() as $cat)
        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
       @endforeach
      </select>
      &nbsp;&nbsp;
     </div>

     <div class="form-group">
      <label>address</label>
      <input type="text" name="address" class="form-control address">&nbsp;&nbsp;
     </div>

      <button type="submit" class="btn btn-sm btn-outline-success" style="margin: 1rem">Search</button>
    </div>
   </form>


   <table class="table mb-3">

    <tbody>
     @foreach ($jobs as $job)
      <tr>
       <td><img class="flex-shrink-0 img-fluid border rounded"
        src="{{ asset('/') }}{{ $job->company->logo }}" alt=""
        style="width: 80px; height: 80px;"></td>
       <td>{{ $job->position }}
        <br>
        <i class="fa fa-clock-o"aria-hidden="true"></i>&nbsp;{{ $job->type }}
       </td>
       <td><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;{{ $job->address }}</td>
       <td><i class="fa fa-globe"aria-hidden="true"></i>&nbsp;{{ $job->created_at->diffForHumans() }}</td>
       <td>
        <a href="{{ route('jobs.show', [$job->id, $job->slug]) }}">
         <button class="btn btn-success btn-sm"> Apply
         </button>
        </a>

       </td>
      </tr>
     @endforeach
    </tbody>
   </table>
   <div class="mx-auto pb-5">

       {{ $jobs->appends(Illuminate\Support\Facades\Request::except('page'))->links() }}
   </div>

   {{-- {{ $jobs->appends(request()->query())->links() }} --}}

  </div>

 </div>
@endsection
<style>
 .fa {
  color: #4183D7;
 }
</style>
