@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100 avatar">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                    <div class="h4">{{ $user->username }}</div>

                    <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                </div>

                @can('update', $user->profile)
                <a href="/p/create" class = "btn btn-primary">New Fundraise Campaign</a>
                @endcan

            </div>

            @can('update', $user->profile)
            <a href="/profile/{{ $user->id }}/edit" class = "btn btn-primary">Edit Profile</a>
            @endcan

            <div class="d-flex">
                <div class="pr-5">Campaigns Posted: &nbsp<strong>{{ $postCount }}</strong></div>
                {{-- <div class="pr-5"><strong>{{ $followersCount }}</strong> followers</div>
                <div class="pr-5"><strong>{{ $followingCount }}</strong> following</div> --}}
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="{{ $user->profile->url }}" target="_blank">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    
    <style type="text/css">

        .inner{
           overflow: hidden;
       }
       .inner img{
           transition: all 1.5s ease;
       }
       .inner:hover img{
           transform: scale(1.5);
       }

   </style>

     <div class="card-group">
            <div class="row col-lg-12">
                    @foreach($user->posts as $post)
                <div class="col-lg-4 col-md-4" style="margin-bottom:20px">
                    <div class="card shadow" style="">
                        <div class="inner wrapper">
                            <img src="/storage/{{ $post->image }}" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">{{$post->caption}}</h5>
                            <p class="card-text"><b>Targeted Amount:</b>&nbsp{{$post->amount}}</p>
                            <p class="card-text"><small class="text-muted">Posted on:&nbsp{{$post->created_at}}</small></p>
                            <a href="/p/{{ $post->id }}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
               
        
        @endforeach
        </div>
        
        </div><br>
    </div>
   
    @endsection

