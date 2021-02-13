@extends('layouts.app')

@section('content')


<div class="body-header" style="background-image: url({{ Auth::user()->cover }});
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    height: 100vh;">
    @include('layouts.alert')

    <div class="overlay-bg " ></div>
    <div class="header-content text-center ">
        <h1 class="text-white mb-4 ">{{$user->name}}</h1>
        <p class="p-one container text-white mb5">
            <a href="{{ Auth::user()->fb_link }}" class="text-white ml-3 mr-3">
                <i class="icofont-facebook"></i>
            </a>
            <a href="{{ Auth::user()->ig_link }}" class="text-white ml-3 mr-3">
                <i class="icofont-instagram"></i>
            </a>
            <a href="{{ Auth::user()->web_link }}" class="text-white ml-3 mr-3">
                <i class="icofont-globe"></i>
            </a>
        </p>
    </div>
</div>
<div class="section-body container">
    <div class="row">
        <div class="col-md-3 " style="padding-top:155px">
            <img src="{{ Auth::user()->avatar }}" alt="" class="img-fluid" style="border-radius:50%;height:250px;width:300px;position: absolute;
    top: -100px;
    z-index: 99;">
    <div class="text-center"><a href=" {{ route('dinstructor.edit',Auth::user()->id) }} " class="btn btn-dark uppercase "><span class="icofont-edit"></span> Edit profile</a></div>
    
        </div>
        <div class="col-md-9 pt-5 pl-5">
            {{ $user->bio }}
        </div>
    </div>
    
</div>

@endsection
