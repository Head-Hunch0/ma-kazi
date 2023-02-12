@include('sweetalert::alert')
@extends('layout')
@section('content')

<form class="row g-3 needs-validation m-5 bg-light p-4 rounded" method="post" action="/user/login" enctype="multipart/form-data" novalidate>
  @csrf
  <h3 class="text-center">Log In Form</h3>
  <div class="col-md-6">
    <label for="email" class="form-label">Email Address</label>
    <input type="text" class="form-control" id="email" name="email" value="" placeholder="Johndemethew@gmail.com" required>
    <div class="valid-feedback">
      Looks good!
    </div>
    <div class="invalid-feedback">
      Email Address Required!
    </div>
    @error('email')
        <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
        <strong>{{$message}}!</strong> .
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @enderror
  </div>
  <div class="col-md-6">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" value="" placeholder="Enter Password" required>
    <div class="valid-feedback">
      Looks good!
    </div>
    <div class="invalid-feedback">
      Password Required!
    </div>
  </div>

  <div class="col-12" >
    <button class="btn btn-success" type="submit">Log In</button>
  </div>
   <div class="col-12" >
    <p>Don't have an account? 
        <a href="/user/register" class="btn btn-warning mx-3" >Register</a>
    </p>
  </div>
</form>

@endsection