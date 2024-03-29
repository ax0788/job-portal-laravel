@extends('user.main')
<style>
 .card {
  box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
 }

 .form-group{
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
        <div class="card-header">Create a job</div>
        <div class="card-body">

         <form action="{{ route('job.store') }}" method="POST">@csrf

          <div class="form-group">
           <label for="title">Title:</label>
           <input type="text" name="title" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}"
            value="{{ old('title') }}">
           @if ($errors->has('title'))
            <span class="invalid-feedback" role="alert">
             <strong>{{ $errors->first('title') }}</strong>
            </span>
           @endif
          </div>

          <div class="form-group">
           <label for="description">Description:</label>
           <textarea name="description" id="summernote"
            class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}">{{ old('description') }}</textarea>
           @if ($errors->has('description'))
            <span class="invalid-feedback" role="alert">
             <strong>{{ $errors->first('description') }}</strong>
            </span>
           @endif
          </div>


          <div class="form-group">
           <label for="role">Role:</label>
           <textarea name="roles" class="form-control {{ $errors->has('roles') ? ' is-invalid' : '' }}">{{ old('roles') }}</textarea>
           @if ($errors->has('roles'))
            <span class="invalid-feedback" role="alert">
             <strong>{{ $errors->first('roles') }}</strong>
            </span>
           @endif
          </div>


          <div class="form-group">
           <label for="category">Category:</label>
           <select name="category" class="form-control">
            @foreach (App\Models\Category::all() as $cat)
             <option value="{{ $cat->id }}">{{ $cat->name }}</option>
            @endforeach
           </select>

          </div>
          <div class="form-group">
           <label for="position">Position:</label>
           <input type="text" name="position" class="form-control {{ $errors->has('position') ? ' is-invalid' : '' }}"
            value="{{ old('position') }}">
           @if ($errors->has('position'))
            <span class="invalid-feedback" role="alert">
             <strong>{{ $errors->first('position') }}</strong>
            </span>
           @endif

          </div>
          <div class="form-group">
           <label for="address">Address:</label>
           <input type="text" name="address" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}"
            value="{{ old('address') }}">
           @if ($errors->has('address'))
            <span class="invalid-feedback" role="alert">
             <strong>{{ $errors->first('address') }}</strong>
            </span>
           @endif
          </div>

          <div class="form-group">
           <label for="type">Type:</label>
           <select class="form-control" name="type">
            <option value="full-time">full-time</option>
            <option value="part-time">part-time</option>
            <option value="internship">internship</option>
           </select>
          </div>
          <div class="form-group">
           <label for="status">Status:</label>
           <select class="form-control" name="status">
            <option value="1">live</option>
            <option value="0">draft</option>
           </select>
          </div>
          <div class="form-group">
           <label for="lastdate">Last date:</label>
           <input type="text"  id="datepicker" name="last_date"
            class="form-control {{ $errors->has('last_date') ? ' is-invalid' : '' }}" value="{{ old('last_date') }}">
           @if ($errors->has('last_date'))
            <span class="invalid-feedback" role="alert">
             <strong>{{ $errors->first('last_date') }}</strong>
            </span>
           @endif
          </div>

          <div class="form-group">
           <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
        </form>
       </div>




   </div>
   <div class="col-md-2"></div>

  </div>
 </div>

@endsection
