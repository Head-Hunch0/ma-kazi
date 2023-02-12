<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
@extends('layout')

@section('content')

<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" style="width: 100%">
  <div class="carousel-inner p-sm-3 px-lg-5">
    <div class="carousel-item active">
      <img src="{{asset('/images/scott-graham-5fNmWej4tAA-unsplash.jpg')}}" class="d-block w-100 img-fluid rounded" alt="..." style="max-height: 750px">
       <div class="carousel-caption d-md-block fs-4">
        <h5>Every Job in One Place</h5>
        <p>Your peronal job listing assistant</p>
      </div>
    </div>
    <div class="carousel-item">
       <img src="{{asset('/images/komarov-egor-Lc2R_w0zvtA-unsplash.jpg')}}" class="d-block w-100 img-fluid rounded" alt="..." style="max-height: 750px">
       <div class="carousel-caption d-md-block fs-4">
        <h5>Tons of Opportunities</h5>
        <p>Where something special happens every day</p>
      </div>
    </div>
    {{-- <div class="carousel-item">
      <img src="{{asset('/images/mulyadi-bsMnWtskoCU-unsplash.jpg')}}" class="d-block w-100 img-fluid rounded" alt="...">
       <div class="carousel-caption d-md-block">
        <h5>Something for Everyone</h5>
        <p>Browse Hundreds of Jobs. Find Your match</p>
      </div>
    </div> --}}
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

<div class="row p-3 mt-5 fs-6 rounded-circle bg-light">


    <h2 class="text-center">How it works?</h2>
    {{-- <p class="p-5 text-center p-lg-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus totam architecto tempore fuga quae sunt modi hic, odio facilis at culpa debitis cupiditate explicabo. Placeat neque veritatis rerum laborum ducimus.</p> --}}

    <span class="text-center btn p-3 m-2">STEP 1</span>
    <div class="col-6 p-3 text-center p-4 my-auto p-lg-5">
    <h3>Browse Hundreds of Jobs</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste amet corrupti alias? Debitis pariatur aspernatur temporibus. Beatae, ad fugiat velit similique, aut totam dolores nesciunt in doloribus ipsa ut minima?</p>
    </div>
    <div class="col-6 p-5 m-auto ">
        <img src="{{asset('/images/pramod-tiwari-ubzNkNC0_6U-unsplash.jpg')}}" class="d-block w-100 img-fluid rounded m-auto" alt="...">
    </div>

    <h4 class="text-center btn p-3 m-2 ">STEP 2</h4>
    <div class="col-6 p-5 m-auto ">
        <img src="{{asset('/images/mina-rad-TRNRxPvnF_g-unsplash.jpg')}}" class="d-block w-100 img-fluid rounded m-auto" alt="...">
    </div>
     <div class="col-6 p-3 text-center p-4 my-auto p-lg-5">
    <h3>Find Your match</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste amet corrupti alias? Debitis pariatur aspernatur temporibus. Beatae, ad fugiat velit similique, aut totam dolores nesciunt in doloribus ipsa ut minima?</p>
    </div>
    
    
    <h4 class="text-center btn p-3 m-2">STEP 3</h4>
    <div class="col-6 p-3 text-center p-4 my-auto p-lg-5">
    <h3>Apply Directly</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste amet corrupti alias? Debitis pariatur aspernatur temporibus. Beatae, ad fugiat velit similique, aut totam dolores nesciunt in doloribus ipsa ut minima?</p>
    </div>
    <div class="col-6 p-5 m-auto">
        <img src="{{asset('/images/austin-distel-mpN7xjKQ_Ns-unsplash.jpg')}}" class="d-block w-100 img-fluid rounded m-auto" alt="...">
    </div>
</div>

<div class="text-center p-3 my-sm-5 my-lg-1">
  <h4 class="text-danger m-3">Featured Employers</h4>
  <h3>Your Dream Job Just A Click Away</h3>
  <a href="/listings/all" class="btn btn-warning m-3">View Listings <img src="{{asset('/images/enter (2).png')}}" class="mx-3" width="30px"></a>
</div>

{{-- <div class="text-center p-3 p-lg-5"> --}}
  {{-- <h4>We Will Help You Recruit Some Of The Best Applicants</h4> --}}
  {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, ipsam? Ipsum omnis nihil inventore nobis aliquam fugit, quaerat sed in doloribus sunt dicta! Excepturi sed necessitatibus magni corrupti placeat veniam?</p> --}}
    {{-- <a href="/listings.blade.php" class="btn btn-warning m-3">All Candidates ></a> --}}
</div>

<div class="container p-3 mb-5 p-lg-6 d-flex justify-content-center">
<div class="card text-bg-info col-lg-8">
  <div class="card-body">
    <blockquote class="blockquote mb-0 text-center">
      <p>“There are no secrets to success. It is the result of preparation, hard work, and learning from failure.”</p>
      <footer class="blockquote-footer">Colin Powell</footer>
    </blockquote>
  </div>
</div>
</div>

@endsection