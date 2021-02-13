@extends('layouts.app')

@section('content')
<div class="pt-4 pb-4" style="margin-top:90px;background-color:#efeeee;">
@include('layouts.alert')
    <h1 class="text-center">INSTRUCTORS</h1>
</div>
<section>
    <div class="container">
        <div class="row">
            @foreach($instructors as $instructor)
            
            <div class="col-md-2 twext-center">
            <a href="{{ route('instructor',$instructor->id) }} ">
                <img src="{{ $instructor->avatar }}" alt="" style="height:142px;width:142px;border-radius:50%" calss="img-fluid">
                <h5>{{ $instructor->name }}</h5>
            </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection


