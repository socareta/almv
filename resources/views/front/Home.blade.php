@extends('layouts.app')

@section('content')
<div class="body-header">
        <video  width="100%" height="70%" id="header-vidio" autoplay="true" muted="muted">
            <source src="https://alomoves.s3.amazonaws.com/manual_uploads/shared/promotions/hero_black_friday_2020.webm" type="video/webm">
            <source src="https://alomoves.s3.amazonaws.com/manual_uploads/shared/promotions/hero_black_friday_2020.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    <div class="overlay-bg " ></div>
    <div class="header-content text-center ">
        <h1 class="text-white mb-4">LAST CHANCE TO SAVE</h1>
        <p class="p-one container text-white mb5">
        Our New Year's Sale ends January 31st. Enjoy 50% off your first year of an annual membership and get unlimited classes for less than $9/month.
        </p>
        <p>
            <a href="" class="btn bg-white mb-5">SAVE NOW</a>
        </p>
        <p>
            <a href="" class="text-white">SENT GIVE</a>
        </p>
    </div>
</div>
<section>
    <div class="container">
        <h2 class="text-center">FIND WHAT MOVES YOU</h2>
        <p class="p-one text-center">
        Whether you’re a complete beginner or you want to step up your routine, get the full studio experience at home with thousands of classes for body, mind, and spirit.
        </p>
        <div class="row mt-5">
            <div class="col-md-3">
                <img src="https://alomoves.s3.amazonaws.com/manual_uploads/shared/home/categories/Desktop_Category_Yoga.jpg" alt="" class="img-fluid">
                <h6>YOGA ></h6>
                <p class="p-two">
                From Ashtanga to Vinyasa, make mindful movement a daily ritual.
                </p>
            </div>
            <div class="col-md-3">
                <img src="https://alomoves.s3.amazonaws.com/manual_uploads/shared/home/categories/Desktop_Category_Fitness.jpg" alt="" class="img-fluid">
                <h6>FITNESS ></h6>
                <p class="p-two">
                Train on your time with Strength, Barre, Pilates, HIIT, Core, and more.
                </p>
            </div>
            <div class="col-md-3">
                <img src="https://alomoves.s3.amazonaws.com/manual_uploads/shared/home/categories/Desktop_Category_Mindfulness.jpg" alt="" class="img-fluid">
                <h6>MINDFULNESS ></h6>
                <p class="p-two">
                Find meditations for relaxation, creativity, and restful sleep.
                </p>
            </div>
            <div class="col-md-3">
                <img src="https://alomoves.s3.amazonaws.com/manual_uploads/shared/home/categories/Desktop_Category_Skills.jpg" alt="" class="img-fluid">
                <h6>SKILLS ></h6>
                <p class="p-two">
                Learn how to handstand or stretch into splits with guided instruction.
                </p>
            </div>
        </div>
    </div>
   
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6 pt-5 pb-5">
                <h2>FIT FOR YOUR LIFESTYLE</h2>
                <p class="p-one">
                    Wake up with a sunrise meditation, sweat it out with lunchtime HIIT, or unwind with an evening flow. You’ll find movement for every mood with classes sorted by time, style, and skill level.
                </p>
                <a href="" class="btn btn-brand pl-5 pr-5">EXPLORE CLASSES</a>
            </div>
            <div class="col-md-6" style="background-image: url(https://alomoves.s3.amazonaws.com/manual_uploads/shared/home/bleed_images/Desktop_Banner1.jpg);
    background-size: cover;
    background-attachment: inherit;
    background-position: center;
    background-repeat: no-repeat;">

            </div>
        </div>

    </div>
</section>

<section>
    <div class="container text-center">
        <h2 class="mb-5">MEET OUR INSTRUCTORS</h2>
        <p class="p-one ">
        Challenge your strength. Stretch your body. Breathe easy. Our team of world-class instructors will empower you to grow and achieve all of your fitness and wellness goals.
        </p>
        <a href="" class="btn btn-brand mb-5 pl-5 pr-5">VIEW INSTRUCTORS</a>        

    </div>
    <div class="container">
            <div class="card-deck card-deck-scroll">
                @foreach($instructors as $instructor)
                <div class="card col-md-3">
                    <img class="card-img-top img-fluid" src="{{$instructor->avatar }}" />
                    <div class="card-body">
                        <h5 class="card-title"> {{$instructor->name }}</h5>
                        @php $cat =  $instructor->category;  @endphp
                        <p class="card-text p-two">{{ $cat==null?'': ucwords($cat['parent_name']) }} Instructor.</p>
                    </div>
                </div>
                @endforeach
               
            </div>
        </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="background-image: url(https://alomoves.s3.amazonaws.com/manual_uploads/shared/home/bleed_images/Desktop_Banner2.jpg);
    background-size: cover;
    background-attachment: inherit;
    background-position: center;
    background-repeat: no-repeat;">

            </div>
            <div class="col-md-6 pt-5 pb-5">
                <h2 class="mb-4">FIT FOR YOUR LIFESTYLE</h2>
                <p class="p-one mb-4">
                    Wake up with a sunrise meditation, sweat it out with lunchtime HIIT, or unwind with an evening flow. You’ll find movement for every mood with classes sorted by time, style, and skill level.
                </p>
                <a href="" class="btn btn-brand pl-5 pr-5 mb-5">EXPLORE CLASSES</a>
            </div>
        </div>

    </div>
</section>

<section>
    <div class="container text-center">
        <h2 class="mb-5 mt-5">STORIES FROM OUR COMMUNITY</h2>
        <p class="p-one mb-5">
        From incorporating mindfulness in the classroom to having virtual yoga practice with friends around the world, tune in to see how our community uses Alo Moves.
        </p>
        <div class="row">
            <div class="col-md-4">
                <div class="card bg-dark text-white">
                    <img src="https://alomoves.s3.amazonaws.com/manual_uploads/shared/home/user_stories/images/Mobile_UserStory_Joe.jpg" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <i class="icofont-play-alt-2 icofont-3x"></i>
                        <h5 class="card-title text-left align-bottom">Having a practice put me in a place to be an example for my students.</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-dark text-white">
                    <img src="https://alomoves.s3.amazonaws.com/manual_uploads/shared/home/user_stories/images/Mobile_UserStory_Anna.jpg" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <i class="icofont-play-alt-2 icofont-3x"></i>
                        <h5 class="card-title text-left align-bottom">Having a practice put me in a place to be an example for my students.</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-dark text-white">
                    <img src="https://alomoves.s3.amazonaws.com/manual_uploads/shared/home/user_stories/images/Mobile_UserStory_Penny.jpg" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <i class="icofont-play-alt-2 icofont-3x"></i>
                        <h5 class="card-title text-left align-bottom">Having a practice put me in a place to be an example for my students.</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-5 pb-5" style="background-color:black">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="text-white">OUR SALE ENDS SOON</h2>
                <p class="p-one text-white">
                Last chance to get 50% off your first year of an annual membership. Sale ends January 31.
                </p>
            </div>
            <div class="col-md-6 align-middle">
                <a href="" class="btn btn-black float-right pr-5 pl-5 ml-4">EXPLORE</a>
                <a href="" class="btn btn-white float-right pr-5 pl-5 ">SAVE NOW</a>
            </div>
        </div>
    </div>
</section>

@endsection

@section('footer')
<script>
    $(function(){

    document.getElementById("header-vidio").play();
    })
</script>
@endsection
