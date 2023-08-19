@extends('user.main')

@section('content')
 <div class="row justify-content-center">
  <div class="col-md-12">
    @if ($applicants->isEmpty())
    <p class="text-danger">NO Applicants.</p>
    @else
    @foreach ($applicants as $applicant)
    <div class="card">
     <div class="card-header"><a href="{{ route('jobs.show', [$applicant->id, $applicant->slug]) }}">
       {{ $applicant->title }}</a></div>

     <div class="card-body">
      @foreach ($applicant->users as $user)
       <table class="table" style="width: 100%;">
        <thead class="thead-dark">
        </thead>
        <tbody>
         <tr>
          <td>
           @if ($user->profile->avatar)
            <img src="{{ asset('uploads/avatar') }}/{{ $user->profile->avatar }}" width="80">
           @else
            <img src="{{ asset('uploads/avatar/man.jpg') }}" width="80">
           @endif

           <br>Applied on: {{ date('F d, Y', strtotime($applicant->created_at)) }}
          </td>
          <td class="mt-1">Name:<br>{{ $user->name }}</td>
          <td>Email:<br>{{ $user->email }}</td>
          <td>Address:<br>{{ $user->profile->address }}</td>
          <td>Gender:<br>{{ $user->profile->gender }}</td>
          <td>Experience:<br>{{ $user->profile->experience }}</td>
          <td>Bio:<br>{{ $user->profile->bio }}</td>
          <td>Phone:<br>{{ $user->profile->phone_number }}</td>

          <td><a href="{{ Storage::url($user->profile->resume) }}">Resume</a></td>

          <td><a href="{{ Storage::url($user->profile->cover_letter) }}">Cover letter</a></td>
          <td></td>

         </tr>

        </tbody>
       </table>

     </div><br><br>
   @endforeach
  </div>
  @endforeach
    @endif
  </div>
 @endsection
