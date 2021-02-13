@extends('layouts.app')

@section('content')
<section class="pt-4 pb-4" style="margin-top:90px;">
@include('layouts.alert')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                    @foreach($product->media as $key=>$media)
                        <div class="carousel-item {{ $key == 0?'active':''}} ">
                         @if($media->is_image==true)   
                        <img src="{{ $media->name }}" class="d-block w-100" alt="{{ $media->alt }}">
                        @else
                        <video src="{{ $media->name }}" width="100%" height="100%" autoplay controls></video>
                        @endif
                        </div>
                       @endforeach>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            @php
            $dificulty=[1=>'Beginner',2=>'Moderate',3=>'Intermediate',4=>'Advanced',5=>'None'];
            $dificultyImage=[1=>'satu.png',2=>'dua.png',3=>'tiga.png',4=>'empat.png',5=>'lima.png'];
            $intencity=[1=>'intent-1.png',2=>'intent-2.png',3=>'intent-3.png',4=>'intent-4.png',5=>'intent-5.png'];
            @endphp
            <div class="col-md-6">
                <p>{{ $product->category->parent_name }} </p>
                <h1> {{ $product->title }} </h1>
                <p> <img src="{{ $product->author->avatar}}" width="30px" alt="" class="user-avatar"> <a href="{{ route('instructor',$product->author->id) }}" class="a-dark"> {{ $product->author->name }} </a></p>
                <div class="row">
                    <div class="col-md-4">CLASSES</div><div class="col-md-6">{{ $product->workout_count }}</div>
                    <div class="col-md-4 mt-2 mb-2">AVERAGE DURATION</div><div class="col-md-6 mt-2 mb-2">{{ $product->duration }}  Minutes</div>
                    <div class="col-md-4 mt-2 mb-2">PROPS</div><div class="col-md-6 mt-2 mb-2">{{ $product->props}}</div>
                    <div class="col-md-4 mt-2 mb-2">DIFFICULTY</div><div class="col-md-6 mt-2 mb-2"> <img src="../img/{{ $dificultyImage[$product->dificulty] }}" alt="" width="25px" class="mb-2">  {{ $dificulty[$product->dificulty] }}</div>
                    <div class="col-md-4 mt-2 mb-2">INTENSITY</div><div class="col-md-6 mt-2 mb-2"><img src="../img/{{ $intencity[$product->intensity] }}" alt="" width="25px" class="mb-2"> Intensity {{ $product->intensity }}</div>
                </div>
                <a href="{{ route('survey',1) }}" class="btn btn-black btn-block">START MY FREE TRIAL</a>
                <hr>

                <h5>DESCRIPTION</h5>
                <p>
                    {{ $product->description }}
                </p>
            </div>
        </div>
    </div>
   
</section>

<div class="recomendation-section">
    <hr>
    
</div>
<style lang="css">
    .carousel-inner .carousel-item-right.active,
.carousel-inner .carousel-item-next {
  transform: translateX(33.33%);
}

.carousel-inner .carousel-item-left.active, 
.carousel-inner .carousel-item-prev {
  transform: translateX(-33.33%)
}

.carousel-inner .carousel-item-right,
.carousel-inner .carousel-item-left{ 
  transform: translateX(0);
}
</style>
@endsection

@section('footer')
<script>
$('.carousel').carousel({
  interval: false,
});
</script>
@endsection
