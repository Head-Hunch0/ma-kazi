@include('sweetalert::alert')
@extends('layout')
@section('content')


<form class="row g-3 needs-validation m-5 bg-light p-4 rounded" method="post" action="/listings/application/{{$listing->id}}" enctype="multipart/form-data" novalidate>
  @csrf
  <h3 class="text-center">Apply for this position</h3>
  <h5 class="text-center text-danger">{{$listing->title}} at {{$listing->company}}</h5>
  <div class="col-md-6">
    <label for="fname" class="form-label">First Name</label>
    <input type="text" class="form-control" name="fname" id="fname" value="" placeholder="Demethew" required>
    <div class="valid-feedback">
      Looks good!
    </div>
    <div class="invalid-feedback">
      First Name Required!
    </div>
  </div>
  <div class="col-md-6">
    <label for="Oname" class="form-label">Other Names</label>
    <input type="text" class="form-control" id="Oname" name="Oname" value="" placeholder="John " required>
    <div class="valid-feedback">
      Looks good!
    </div>
    <div class="invalid-feedback">
      Name Required!
    </div>
  </div>
  <div class="col-md-6">
    <label for="email" class="form-label">Email Address</label>
    <input type="email" class="form-control" id="email" name="email" value="" placeholder="Demethew@gmail.com" required>
    <div class="valid-feedback">
      Looks good!
    </div>
    <div class="invalid-feedback">
      Email Required!
    </div>
  </div>
  <div class="col-md-6">
    <label for="number" class="form-label">Phone Number</label>
    <input type="number" class="form-control" id="number" name="number" value="" placeholder="+254 712 345 678" required>
    <div class="valid-feedback">
      Looks good!
    </div>
    <div class="invalid-feedback">
      Phone Required!
    </div>
  </div>

  <div class="col-md-6">
  <label for="cover" class="form-label">Cover Letter</label>
  <input class="form-control" value="" type="file" name="cover" id="cover" required>
  <div class="valid-feedback">
      Looks good!
    </div>
    <div class="invalid-feedback">
      Cover Letter Required!
    </div>
  </div>

  <div class="col-md-6">
  <label for="resume" class="form-label">Resume</label>
  <input class="form-control" value="" type="file" name="resume" id="resume" required>
  <div class="valid-feedback">
      Looks good!
    </div>
    <div class="invalid-feedback">
      Resume Required!
    </div>
  </div>

  <div class="col-md-6">
    <label for="portfolio" class="form-label">Website Blog Portfolio</label>
    <input type="text" class="form-control" value="" id="portfolio" name="portfolio">
  </div>
  <div class="col-md-6">
    <label for="referee" class="form-label">Who referred you for this position?</label>
    <input type="text" class="form-control" value="" id="referee" name="referee">
  </div>
  
  <div class="col-md-6" style="opacity: 0">
    <label for="position" class="form-label">Who referred you for this position?</label>
    <input type="text" class="form-control" value="{{$listing->title}}" id="position" name="position">
  </div>

  <div class="col-12 " id="liveAlertPlaceholder">
    <button class="btn btn-success" id="liveAlertBtn" type="submit">Submit Application<img src="{{asset('/images/correct.png')}}" class="mx-3" width="30px"></button>
  </div>
</form>
@endsection 