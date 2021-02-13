@extends('layouts.app')

@section('content')
@php 
$cover = $user->is_import ==true? $user->cover: (!empty($user->cover)? url('/images').'/'.$user->cover : url('img/dummy.png'));
$avatar = $user->is_import ==true? $user->avatar: (!empty($user->avatar)? url('/images').'/'.$user->avatar : url('img/dummy.png'));  

@endphp
<div class="body-header" style="background-image: url({{ $cover }});
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    height: 100vh;">
    <div class="overlay-bg " ></div>
    <div class="header-content text-center ">
        <h1 class="text-white mb-4 ">{{$user->name}}</h1>
        <p class="p-one container text-white mb5">
            <a href="{{ $user->fb_link }}" class="text-white ml-3 mr-3">
                <i class="icofont-facebook"></i>
            </a>
            <a href="{{ $user->ig_link }}" class="text-white ml-3 mr-3">
                <i class="icofont-instagram"></i>
            </a>
            <a href="{{ $user->web_link }}" class="text-white ml-3 mr-3">
                <i class="icofont-globe"></i>
            </a>
        </p>
    </div>
</div>
<div class="section-body container">
    <div class="row">
        <div class="col-md-3">
            <img src="{{ $avatar }}" alt="" class="img-fluid" style="border-radius:50%;height:250px;width:300px;position: absolute;
    top: -100px;
    z-index: 99;">
        </div>
        <div class="col-md-9 pt-5 pl-5">
            {{ $user->bio }}
        </div>
    </div>
    
</div>
<section>
    <div class="container">
        <hr>
        <h2 class="uppercase text-center">{{$user->name}}’S CLASSES</h2>
        <div class="card-columns mt-5">
            @foreach($products as $product)
            <div class="card">
                <div class="overlay-category uppercase">{{  $product->category->parent_name }}</div>
                <a href="{{ route('series',$product->slug) }}" >
                <img src="{{$product->cover}}" class="card-img-top " alt="{{$product->media[0]->alt}}"></a>
                <div class="card-body pb-5">
                <a href="{{ route('series',$product->slug) }}" class="a-dark"><h4 class="card-title text-center">{{ $product->title }}</h4> </a>
                <a href="{{ route('instructor',$product->author->id) }}" class="a-grey"><h5 class="card-title text-center">{{ $product->author->name }}</h5></a>
                @php
                $dificulty=[1=>'Beginner',2=>'Moderate',3=>'Intermediate',4=>'Advanced',5=>'None'];
                $dificultyImage=[1=>'satu.png',2=>'dua.png',3=>'tiga.png',4=>'empat.png',5=>'lima.png'];
                $intensities=[1=>'intent-1.png',2=>'intent-2.png',3=>'intent-3.png',4=>'intent-4.png',5=>'intent-5.png'];
                @endphp
                
                <div class="row mb-2">
                <div class="col-md-3"> <i class="icofont-play-alt-2"></i> {{ $product->workout_count }} </div>
                            <div class="col-md-5 pr-0 pl-0 pr-0 text-center"><img class=" mb-2" src="../img/{{  $dificultyImage[$product->dificulty] }}" alt="" width="20px"> {{ $dificulty[$product->dificulty] }} </div>
                            <div class="col-md-4"> <i class="icofont-user"></i> {{ $product->member_count }}  </div>   
                    <div class="col-12">
                        <hr style="margin:0 auto;">
                    </div>
                </div>
                
                <div class="card-text text-view-min" id="card{{$product->id}}">
                    <div class="main-text">
                        This is a longer card with supporting text below as a natural lead-in to additional content. 
                        This is a longer card with supporting text below as a natural lead-in to additional content. 
                        This is a longer card with supporting text below as a natural lead-in to additional content. 
                        This content is a little bit longer.
                    </div>
                    <div class="btn-container" >
                        <div class="btn-content">
                                <a href=""  @click.prevent="showMore('card{{$product->id}}')">@{{ btnText }}</a>
                        </div>
                        
                    </div>
                    
                </div>
                
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection

@section('footer')
<script>
new Vue({
    el: '#app',
    data: {
        categoryActive: '',
        subcategoryActive:[],
        btnText: 'Read More',
        isShowMore: true,
    },
    methods: {
        categorySelected(category){
            this.categoryActive = category
        },
        subCategorySelected(category){
            this.subcategoryActive.push(category)
        },
        removeSubCategory(index){
            this.subcategoryActive.splice(index,1);
        },
        showMore(tagId){
            var el = document.querySelector('#'+tagId)
            if(this.isShowMore){
                this.isShowMore = false;
                this.btnText= 'Read Less', 
                el.classList.remove('text-view-min')
                el.classList.add('text-view-max')
            }else{
                this.isShowMore = true;
                this.btnText= 'Read More', 
                el.classList.remove('text-view-max')
                el.classList.add('text-view-min')
            }
           
        }
       
    },
})

</script>

@endsection
