@extends('user.main')
<style>
 .card {
  box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
 }
</style>
@section('content')
 <div class="content-container container p-6 mt-2 mb-4">
  <div class="row mt-3 mb-2 ml-3 mr-3 p-3">
   <div class="col-md-3">
    @if (empty(Auth::user()->company->logo))
     <img src="{{ asset('avatar/man.jpg') }}" width="100" style="width: 80%; border-radius:90%">
    @else
     <img src="{{ asset('uploads/logo') }}/{{ Auth::user()->company->logo }}" width="100"
      style="width: 90%; border-radius:98%">
    @endif
    <br><br>

    <form action="{{ route('company.logo') }}" method="POST" enctype="multipart/form-data">@csrf

     <div class="card">
      <div class="card-header">Update logo</div>
      <div class="card-body">
       <input type="file" class="form-control" name="company_logo">
       <br>
       <button class="btn btn-success float-right" type="submit">Update</button>
       @if ($errors->has('avatar'))
        <div class="error" style="color: red;">{{ $errors->first('avatar') }}</div>
       @endif

      </div>
     </div>
    </form>


   </div>

   <div class="col-md-5">
    @if (Session::has('message'))
     <div class="alert alert-success">
      {{ Session::get('message') }}
     </div>
    @endif



    <div class="card">
     <div class="card-header">Update Your Company Information</div>

     <form action="{{ route('company.store') }}" method="POST">@csrf


      <div class="card-body">


       <div class="form-group">
        <label for="">Address</label>
        <input type="text" class="form-control" name="address" value="{{ Auth::user()->company->address }}">
        @if ($errors->has('address'))
         <div class="error" style="color: red;">{{ $errors->first('address') }}</div>
        @endif
       </div>


       {{-- <div class="form-group">
        <label for="">Phone</label>
        <input type="text" class="form-control" name="phone"  value="{{Auth::user()->company->phone}}" >
    </div> --}}

       <div class="form-group">
        <label for="">Website</label>
        <input type="text" class="form-control" name="website" value="{{ Auth::user()->company->website }}">
       </div>
       <div class="form-group">
        <label for="">Slogan</label>
        <input type="text" class="form-control" name="slogan" value="{{ Auth::user()->company->slogan }}">
       </div>
       <div class="form-group">
        <label for="">Description</label>
        <textarea name="description" class="form-control"> {{ Auth::user()->company->description }}</textarea>
       </div>


       <div class="form-group">
        <button class="btn btn-success" type="submit">Update</button>
       </div>

      </div>
    </div>
   </div>
   </form>


   <div class="col-md-4">
    <div class="card">
     <div class="card-header">About your company</div>
     <div class="card-body">
      <p> name:{{ Auth::user()->company->cname }}</p>

      <p> address:{{ Auth::user()->company->address }}</p>

      {{-- <p> phone:{{Auth::user()->company->phone}}</p> --}}

      <p> website:<a href="{{ Auth::user()->company->website }}"> {{ Auth::user()->company->website }}</a></p>

      <p>Company slogan:{{ Auth::user()->company->slogan }}</p>
      <p>Company page:<a href="company/{{ Auth::user()->company->slug }}">View</a></p>


     </div>
    </div>
    <br>



    <form action="{{ route('company.coverphoto') }}" method="POST" enctype="multipart/form-data">
     @csrf
     <div class="card">
      <div class="card-header">Update Cover-Image</div>
      <div class="card-body">
       <input type="file" class="form-control" name="cover_photo"><br>
       <button class="btn btn-success float-right" type="submit">Update</button>
       @if ($errors->has('cover_letter'))
        <div class="error" style="color: red;">{{ $errors->first('cover_letter') }}</div>
       @endif
      </div>
     </div>
    </form>
    <br>
   </div>

  </div>
 </div>
@endsection
