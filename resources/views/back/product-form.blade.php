@extends('layouts.app')

@section('content')
@php
    $action = empty($product)? route('product.store'):route('product.update',$product->id);
@endphp

@include('layouts.alert')

<div class="container content-container">
<ul class="nav nav-tabs bg-light" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="class-tab" data-toggle="tab" href="#class" role="tab" aria-controls="class" aria-selected="true">Class</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="leason-tab" data-toggle="tab" href="#leason" role="tab" aria-controls="leason" aria-selected="false">Leason</a>
  </li>
</ul>
<div class="tab-content pt-3" id="myTabContent">
  <div class="tab-pane fade show active pr-3 pl-3" id="class" role="tabpanel" aria-labelledby="class-tab">
        <form action="{{ $action }}" method="post" enctype="multipart/form-data" id="productForm">
            @csrf
            @if(!empty($product))
                @method('PUT')
            @endif
            <div class="row">
                <div class="col-md-6  border border-primary rounded">
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" name="title" id="" class="form-control" value="{{ !empty($product)?$product->title:'' }} {{old('title')}}" required>
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea type="text" name="description" id="" class="form-control" rows="10"  required>{{ !empty($product)?$product->description:'' }}{{old('description')}}</textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Category</label>
                                <select type="text" name="category" id="" class="form-control"  required>
                                    <option value="">--Category--</option>
                                    @foreach($categories as $category)
                                    <option value="{{$category->parent_id == 0?'':$category->id }}" {{ selected($category->id,!empty($product)?$product->category_id:0) }}> {{ $category->parent_id == 0?"":"  --" }}  {{ $category->name }} </option>
                                    @endforeach
                                </select> 
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Dificulty</label>
                                <select type="text" name="dificulty" id="" class="form-control"  required>
                                    <option value="1" {{ selected(1,!empty($product)?$product->dificulty:0) }}>1</option>
                                    <option value="2" {{ selected(2,!empty($product)?$product->dificulty:0) }}>2</option>
                                    <option value="3" {{ selected(3,!empty($product)?$product->dificulty:0) }}>3</option>
                                    <option value="4" {{ selected(4,!empty($product)?$product->dificulty:0) }}>4</option>
                                    <option value="5" {{ selected(5,!empty($product)?$product->dificulty:0) }}>5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Intensity</label>
                                <select type="text" name="intensity" id="" class="form-control"  required>
                                    <option value="1" {{ selected(1,!empty($product)?$product->intensity:0) }}>1</option>
                                    <option value="2" {{ selected(2,!empty($product)?$product->intensity:0) }}>2</option>
                                    <option value="3" {{ selected(3,!empty($product)?$product->intensity:0) }}>3</option>
                                    <option value="4" {{ selected(4,!empty($product)?$product->intensity:0) }}>4</option>
                                    <option value="5" {{ selected(5,!empty($product)?$product->intensity:0) }}>5</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    @php 
                    function selected($value,$param){
                        return $value ==$param? 'selected': '';
                    }
                    @endphp

                </div>
                <div class="col-md-6 border border-primary rounded">
                    <h6 class="uppercase">Image</h6>
                    <input type="hidden" name="cover" v-model="cover">
                    <input type="file" name="images[]" id="" multiple @if(empty($product))required @endif @change="changeImage">
                    <div class="tmp-image pt-4 pb-5">
                    <img :src="img" v-for="(img,index) in images " :key="index" width="200px" class="img-fluid m-2">

                    @if(!empty($product))
                        <div class="row">
                        @foreach($product->media as $media)
                        @if($media->is_image ==true)
                            <div class="col-md-6">
                                <img src="{{ $media->name }}" alt="{{ $media->alt }}" class="img-fluid m-2 ">
                                <div class="dropdown" style="position:absolute;top:5px;right:10px;z-index:10;">
                                    <button class="btn btn-warning dropdown-toggle p-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="icofont-gear"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#" @click="setCover('{{$media->name}}')">Set As Cover</a>
                                        <a class="dropdown-item" href="#" @click="deleteImage('{{route('media.destroy',$media->id)}}')" >Deleted</a>
                                    </div>
                                </div>
                                @if($media->name == $product->cover)
                                <span class="btn btn-info p-1" style="position:absolute;top:5px;left:10px;z-index:10;">Cover</span>
                                @endif
                            </div>
                        @endif
                        @endforeach  
                        </div>  

                    @endif
                    </div>

                    <h6 class="uppercase mt-5">Vidio</h6>
                    <input type="file" name="vidios[]" id="" multiple  @if(empty($product))required @endif>
                    <div class="tmp-vidio pt-4 pb-5">
                    
                    @if(!empty($product))
                        @foreach($product->media as $media)
                        @if($media->is_image ==false)
                        <video src="{{$media->name }}" width="300px" controls ></video>
                        @endif
                        @endforeach    

                    @endif
                    </div>
                </div>
                <div class="col-12 mt-5 mb-5">
                    <button type="submit" class="btn btn-brand btn-block sticky-bottom">SUBMIT</button>
                </div>
            </div>
        </form>
  
  </div>
  <div class="tab-pane fade pr-3 pl-3" id="leason" role="tabpanel" aria-labelledby="leason-tab">
    
    <div class="row border rounded border-info">
        <div class="form-group col-md-4">
            <label for="">Title</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group col-md-4">
           <label for="">Descripton</label><br>
            <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
        </div>
        <div class="form-group col-md-4">
            <label for="">vidio</label>
            <p><input type="file" name="" id=""></p>
        </div>
    </div>
    <Button class="btn btn-black">Save & Add Leason</Button>
  </div>
</div>
    
</div>

<form :action="delImageUrl" method="post" id="formDeleteMedia">@csrf @method('DELETE')</form>
@endsection

@section('footer')
<script>
new Vue({
    el: '#app',
    data: {
        images:[],
        delImageUrl:'',
        cover: null,
        leasons:[],
        leason:[
            title:null,
            
        ]
    },
    methods: {
        changeImage(e){
            var files = e.target.files;
            for (let index = 0; index < files.length; index++) {
                this.images.push(URL.createObjectURL(files[index]))       
            }
        },
        deleteImage(url){
            this.delImageUrl = url;
            setTimeout(() => {
                document.querySelector('#formDeleteMedia').submit();
            }, 200);
        },
        setCover(url){
            this.cover = url
            setTimeout(() => {
                document.querySelector('#productForm').submit();
            }, 200);
        }
    },
})
</script>
@endsection


