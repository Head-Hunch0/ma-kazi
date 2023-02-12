@include('sweetalert::alert')
@extends('layout')
@section('content')


<form class="row g-3 needs-validation m-5 bg-light p-4 rounded" method="post" action="/listings/store" enctype="multipart/form-data" novalidate>
  @csrf
  <h3 class="text-center">Create Job Listing</h3>
  <div class="col-md-6">
    <label for="title" class="form-label">Job Title</label>
    <input type="text" class="form-control" name="title" id="title" value="" placeholder="Front End Developer" required>
    <div class="valid-feedback">
      Looks good!
    </div>
    <div class="invalid-feedback">
      Job Title Required!
    </div>
  </div>
  <div class="col-md-6">
    <label for="tags" class="form-label">Job Tags</label>
    <input type="text" class="form-control" id="tags" name="tags" value="" placeholder="Full-time , Remote" required>
    <div class="valid-feedback">
      Looks good!
    </div>
    <div class="invalid-feedback">
      Job Tags Required!
    </div>
  </div>
  <div class="col-md-6">
    <label for="company" class="form-label">Company Name</label>
    <input type="text" class="form-control" id="company" name="company" value="" placeholder="Underdog.io Network" required>
    <div class="valid-feedback">
      Looks good!
    </div>
    <div class="invalid-feedback">
      Company Name Required!
    </div>
  </div>
  <div class="col-md-6">
    <label for="location" class="form-label">Job Location</label>
    <input type="text" class="form-control" id="location" name="location" value="" placeholder="Lesotho" required>
    <div class="valid-feedback">
      Looks good!
    </div>
    <div class="invalid-feedback">
      Job Location Required!
    </div>
  </div>
  <div class="col-md-6">
    <label for="email" class="form-label">Company Email</label>
    <input type="email" class="form-control" id="email" name="email" value="" placeholder="hr@underdog.io" required>
    <div class="valid-feedback">
      Looks good!
    </div>
    <div class="invalid-feedback">
      Invalid Email!
    </div>
  </div>
  <div class="col-md-6">
    <label for="website" class="form-label">Company Website</label>
    <input type="text" class="form-control" id="website" name="website" value="" placeholder="Underdog.io" required>
    <div class="valid-feedback">
      Looks good!
    </div>
    <div class="invalid-feedback">
      Company Website Required!
    </div>
  </div>

  <div class="col-md-6">
  <label for="logo" class="form-label">Company Logo</label>
  <input class="form-control" value="" type="file" name="logo" id="logo" required>
  <div class="valid-feedback">
      Looks good!
    </div>
    <div class="invalid-feedback">
      Company Logo Required!
    </div>
  </div>

  <div class="col-md-6">
    <label for="salary" class="form-label">Salary</label>
    <input type="number" class="form-control" value="" id="salary" name="salary" placeholder="122,151 - 132,833 " required>
    <div class="valid-feedback">
      Looks good!
    </div>
    <div class="invalid-feedback">
      Salary Required!
    </div>
  </div>

  {{-- <div class="col-md-6">
    <label for="currency mt-3" class="firm-label"></label>
     <button class="btn btn-outline-secondary dropdown-toggle mt-3" name="currency" type="button" data-bs-toggle="dropdown" aria-expanded="false">Currency</button>
   <ul class="dropdown-menu dropdown-menu-end">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
  </div> --}}

  <div class="col-md-6">
  <label for="description" class="form-label">Job Description</label>
  <textarea class="form-control" id="description" value="" name="description" rows="2" placeholder="We're looking for a Senior Frontend Developer to join a company in the Underdog.io network.
  The Underdog.io network is a curated group of some of the fastest growing startups and tech companies in the country. We actively turn away more than 50% of companies that attempt to join." required></textarea>
  <div class="valid-feedback">
      Looks good!
    </div>
    <div class="invalid-feedback">
      Job Description Required!
    </div>
</div>
  <div class="col-12" id="liveAlertPlaceholder">
    <button class="btn btn-success" id="liveAlertBtn" type="submit">Post Job</button>
  </div>
</form>
@endsection