@extends('layouts.app')

@section('content')
<div class="pt-4 pb-4" style="margin-top:90px;background-color:#efeeee;">
@include('layouts.alert')
    <h1 class="text-center">SERIES</h1>
    <p class="p-one text-center upplercase">
    FIND A PROGRAM TO ACHIEVE YOUR GOALS
    </p>
</div>
    <div class="container">
        <div class="top-menu text-center">
            <a href="" class="ml-4 mr-4" @click.prevent="categorySelected('yoga')">YOGA</a>
            <a href="" class="ml-4 mr-4" @click.prevent="categorySelected('fitness')">FITNESS</a>
            <a href="" class="ml-4 mr-4" @click.prevent="categorySelected('mindfulness')">MINDFULNESS</a>
            <a href="" class="ml-4 mr-4" @click.prevent="categorySelected('skills')">SKILLS</a>
        </div>
        <div class="second-menu pt-0 pb-4 ">
            <span class="float-left">SHOWING 284 SERIES</span>
            <span id="filterSort" class="float-right dropdown-toggle uppercase"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >SORT BY: NEWEST</span>
            
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="filterSort">
                <a class="dropdown-item" href="" @click.prevent="filter('popular','order')"><span style="padding:11px" v-if="order!='popular'"> </span> <span v-if="order=='popular'"><i class="icofont-disc"></i> </span>Most Popular   </a>
                <a class="dropdown-item" href="" @click.prevent="filter('ab','order')"><span style="padding:11px" v-if="order!='ab'"> </span><span v-if="order=='ab'"><i class="icofont-disc"></i> </span> A -> Z</a>
                <a class="dropdown-item" href="" @click.prevent="filter('newest','order')"><span style="padding:11px" v-if="order!='newest'"> </span><span v-if="order=='newest'"><i class="icofont-disc"></i> </span>  NEWEST</a>
            </div>            
        </div>
        <div class="sub-menu " style="background-color:#efeeee;">
            @foreach($categories as $key=>$category)
            @if($category->parent_id == 0)
                @if($key!=0) </div>   @endif
            <div id="{{ $category->name }}" class="text-center pt-2 pb-2" v-if="categoryActive=='{{ $category->name }}'">
                <a href="" class="ml-3 mr-3 uppercase">All</a>
            @else
                <a href="" class="ml-3 mr-3 uppercase" @click.prevent="subCategorySelected({{ json_encode($category) }})">{{ $category->name }}</a>
            @endif
            @endforeach
            </div>
        </div>
        <div class="category-selected pt-2  pb-2 text-center">
            <span class="uppercase ml-2 mr-2 " v-for="(category,index) in subcategoryActive" :key="category.id"> <a href="" @click.prevent="removeSubCategory(index)"><small>x</small> </a> @{{ category.name}}</span>
        </div>
    </div>
    @php
    $dificulty=[1=>'Beginner',2=>'Moderate',3=>'Intermediate',4=>'Advanced',5=>'None'];
    $dificultyImage=[1=>'satu.png',2=>'dua.png',3=>'tiga.png',4=>'empat.png',5=>'lima.png'];
    $intensities=[1=>'intent-1.png',2=>'intent-2.png',3=>'intent-3.png',4=>'intent-4.png',5=>'intent-5.png'];
    @endphp
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-2">
                <h4>DIFFICULTY</h4> 
                @foreach($dificultyImage as $key=>$dificul)
                <p>
                <input type="radio" :checked="dificulty=={{$key}}" @change="filter({{$key}},'dificulty')"> <img src="../img/{{$dificul}}" alt="" width="25px"> {{$dificulty[$key]}}
                </p> 
                
                @endforeach
                <a href="" @click.prevent="clear('dificulty')">clear</a>
                <h4>INTENSITY</h4>
                @foreach($intensities as $key=>$intensity)
                <p>
                <input type="radio" :checked="intensity=={{$key}}"   @change="filter({{$key}},'intensity')"> <img src="../img/{{$intensity}}" alt="" width="25px"> {{$key}}
                </p> 
                @endforeach
                <a href="" @click.prevent="clear('intensity')">clear</a>
            </div>
            <div class="col-md-10">
                        <div class="row">
                        @foreach($products as $product)
                        <div class="col-md-4 card d-flex pb-3">
                            <div class="overlay-category uppercase">{{  $product->category->parent_name }}</div>
                            <a href="{{ route('series',$product->slug) }}" >
                        <img src="{{ $product->cover }}" class="card-img-top " alt=""></a>
                        <div class="card-body pb-5">
                        <a href="{{ route('series',$product->slug) }}" class="a-dark"><h4 class="card-title text-center">{{ $product->title }}</h4> </a>
                        <a href="{{ route('instructor',$product->author->id) }}" class="a-grey"><h5 class="card-title text-center">{{ $product->author->name }}</h5></a>
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
                               {{$product->description}}
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
        </div>
        
    </div>
<form action="" method="get" id="filter-form">
    <input type="hidden" name="intensity" v-model="intensity">
    <input type="hidden" name="dificulty" v-model="dificulty">
    <input type="hidden" name="order" v-model="order">
    <input type="hidden" name="category[]" v-for="(selectCat,index) in subcategoryActive":key="index" v-model="selectCat.slug">
</form>
@endsection

@section('footer')
<script>

var vm =new Vue({
    el: '#app',
    data: {
        categoryActive: '',
        subcategoryActive:[],
        btnText: 'Read More',
        isShowMore: true,
        intensity:null,
        dificulty:null,
        order:null
    },
    methods: {
        categorySelected(category){
            this.categoryActive = category
        },
        subCategorySelected(category){
            this.subcategoryActive.push(category)
            setTimeout(() => document.querySelector('#filter-form').submit(), 200)
        },
        removeSubCategory(index){
            this.subcategoryActive.splice(index,1);
            setTimeout(() => document.querySelector('#filter-form').submit(), 200)
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
           
        },
        pushData(data){
            if(data.intensity!=null){ this.intensity = data.intensity}
            if(data.dificulty!=null){ this.dificulty = data.dificulty }
            if(data.order!=null){ this.order = data.order}
            if(data.categories!=''){ 
                data.categories.forEach(element => {
                    this.subcategoryActive.push(element) 
                });
                
            }
        },
        filter(val,type){
            if(type=='order'){this.order = val; setTimeout(() => document.querySelector('#filter-form').submit(), 200)}
            if(type=='intensity'){this.intensity = val; setTimeout(() => document.querySelector('#filter-form').submit(), 200)}
            if(type=='dificulty'){this.dificulty = val; setTimeout(() => document.querySelector('#filter-form').submit(), 200)}
            if(type=='category'){this.subCategorySelected(val); setTimeout(() => document.querySelector('#filter-form').submit(), 200)}
            
        },
        clear(type){
            type =="intensity"?this.intensity=null:this.dificulty=null;
            setTimeout(() => document.querySelector('#filter-form').submit(), 500)
        }

    },
})
var filter = vm.pushData({!!json_encode($filter)!!});


</script>

@endsection

