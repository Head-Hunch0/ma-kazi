@extends('layout')
@section('content')
<style>
    .p{
        list-style: none;
        display: inline;
    }
    .list{
        text-emphasis: none;
        text-decoration: none;
        display: inline-flex;
    }
</style>

@php
// turn the tags into an array
    $tags =explode(',',$listing->tags)
@endphp

<div class="container bg-light p-3 rounded">

    <div class="row d-flex justify-content-center">
        <div class="col-sm-12 col-md-12 col-lg-6 text-center">
            <div class="card m-2 border-primary" >
        <div class="card-body">
        <p class="btn btn-success ">Job Title</p>
        <h5 class="card-title">{{$listing->title}}</h5>
        <p class="btn btn-primary">Job Location</p>
        <p class="card-text"><img src="{{asset('/images/map.png')}}" class="mx-3" width="30px">{{$listing->location}}</p>
        <p class="btn btn-warning">Job Description</p>
        <p class="card-text">{{$listing->description}}</p>
        <p class="btn btn-primary">Job Remuniration</p>
        <p class="card-text">Ksh : {{$listing->salary}}</p>
        @foreach ($tags as $tag)  
        {{-- <p class="card-text"><a href="/listings/all/?tag={{$tag}}"class="btn btn-light">#{{$tag}}</a></p> --}}
        <p class="p"><a href="/listings/all/?tag={{$tag}}" class="btn btn-light list card-text m-1 mb-3">#{{$tag}}</a></p>
        @endforeach
        @auth
        <p class="card-text" ><a href="/listings/{{$listing->id}}/edit" class="btn btn-info"><img src="{{asset('/images/writing.png')}}" class="mx-3" width="30px">Edit {{$listing->title}}</a></p>
        <p class="card-text" ><a href="/listings/{{$listing->id}}/delete" class="btn btn-danger"><img src="{{asset('/images/delete.png')}}" class="mx-3" width="30px">Delete {{$listing->title}}</a></p>
        @else
        <p class="card-text" ><a href="/listings/apply/{{$listing->id}}" class="btn btn-warning"><img src="{{asset('/images/mail-inbox-app.png')}}" class="mx-3" width="30px">Apply For This Job</a></p>
        <p class="card-text" ><a href="{{$listing->website}}" class="btn btn-info"><img src="{{asset('/images/globalization.png')}}" class="mx-3" width="30px">Visit Website</a></p>
        @endauth
    </div>
</div>

</div>

</div>
</div>
    
@endsection