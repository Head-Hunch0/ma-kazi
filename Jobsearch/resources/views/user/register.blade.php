@include('sweetalert::alert')
@extends('layout')
@section('content')

<form class="row g-3 needs-validation m-5 bg-light p-4 rounded" method="post" action="/user/store" enctype="multipart/form-data" novalidate>
  @csrf
  <h3 class="text-center">Registration Form</h3>
  <div class="col-md-6">
    <label for="name" class="form-label">Full Names</label>
    <input type="text" class="form-control" name="name" id="name" value="" placeholder="John Demethew" required>
    <div class="valid-feedback">
      Looks good!
    </div>
    <div class="invalid-feedback">
      Name Required!
    </div>
  </div>
  <div class="col-md-6">
    <label for="email" class="form-label">Email Address</label>
    <input type="text" class="form-control" id="email" name="email" value="" placeholder="Johndemethew@gmail.com" required>
    <div class="valid-feedback">
      Looks good!
    </div>
    <div class="invalid-feedback">
      Email Address Required!
    </div>
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
  {{-- <div class="col-md-6">
    <label for="password" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="password" name="password_confirmation" value="" placeholder="Confirm Password" minlength="8" required>
    <div class="valid-feedback">
      Looks good!
    </div>
    <div class="invalid-feedback">
      Password Required!
    </div>
  </div> --}}
    {{-- <div class="col-md-6">
    <label for="role" class="form-label">User Type</label>
 <select class="form-select" id="role">
    <option  disabled=""></option>
    <option value="employer" selected>Employee</option>
    <option value="employee">Employer</option>
  </select>
      <div class="valid-feedback">
      Looks good!
    </div>
    <div class="invalid-feedback">
      UserType Required!
    </div>
  </div> --}}
  {{-- <div class="col-md-6 pt-lg-4">
    <div class="input-group mb-3">
  <label class="input-group-text" for="role">User Type</label>
  <select class="form-select" id="role">
    <option  disabled=""></option>
    <option value="employer" selected>Employee</option>
    <option value="employee">Employer</option>
  </select>
</div>
    <div class="valid-feedback">
      Looks good!
    </div>
    <div class="invalid-feedback">
      Invalid Email!
    </div>
  </div> --}}

  <div class="col-md-6" >
    <button class="btn btn-success" type="submit">Register</button>
  </div>
  <div class="col-md-6" >
    <p>Already have an account? 
        <a href="/user/login/form" class="btn btn-warning mx-3" >Login</a>
    </p>
    {{-- <button class="btn btn-success" type="submit">Register</button> --}}
  </div>
</form>

@endsection