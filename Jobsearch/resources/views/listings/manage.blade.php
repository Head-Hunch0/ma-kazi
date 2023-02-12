@extends('layout')

@section('content')

    
<h3 class="text-center">Manage Listings</h3>

<div class="container">
@unless ($listings->isEmpty())
    
<div class="row">
    @foreach ($listings as $data)

    <div class="col-sm-12 col-md-6 col-lg-4">
 <div class="card m-2 border-primary" >
    <img src="{{ $data['logo'] ? asset('storage/'.$data['logo']) : asset('/images/register.png')}}" class="card-img-top img-fluid" alt="...">
    <div class="card-body">
    <h5 class="card-title">{{$data['title']}}</h5>
    <p class="card-text"><a class="btn btn-light">{{$data['tags']}}</a></p>
    <p class="card-text"><img src="{{asset('/images/map.png')}}" class="mx-3" width="30px">{{$data['location']}}</p>
    <a href="/listings/{{$data['id']}}" class="btn btn-primary">View More <img src="{{asset('images/enter.png')}}" class="mx-3" width="30" height="24"></a>
</div>
</div>

</div>
</div>
@endforeach
@else
<p>No Listings found</p>
@endunless
<div class="">
    {{$listings->links()}}
</div>
</div>
@endsection