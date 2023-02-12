@extends('layout')
@section('content')
    <h3 class="text-center">Latest Listings</h3>

<div class="container">

    <div class="row">
    {{-- <div class="col-sm-12 col-md-6 col-lg-4"> --}}

        @foreach ($listings as $data)

        <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="card mb-3 m-2">
    <div class="row g-0">
    
    <div class="col-sm-4 p-3">
        <img src="{{ $data['logo'] ? asset('storage/'.$data['logo']) : asset('/images/register.png')}}" class="card-img-top img-thumbnail" alt="..." style="width: 120px
        " height="120px">
    </div>
    <div class="col-sm-8 p-1">
      <div class="card-body">
        <h5 class="card-header mb-3">{{$data['title']}}</h5>
        <p class="card-text"><a class="btn btn-light">{{$data['tags']}}</a></p>
        <p class="card-text"><img src="{{asset('/images/map.png')}}" class="mx-3" width="30px">{{$data['location']}}</p>
        <a href="/listings/{{$data['id']}}" class="btn alert alert-warning">View More <img src="{{asset('images/enter.png')}}" class="mx-3" width="30" height="24"></a>
      </div>
    </div>
  </div>
  </div>

</div>
@endforeach
</div>
<div class="">
    {{$listings->links()}}
</div>
</div>
@endsection