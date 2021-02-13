@extends('layouts.app')

@section('content')

<div class="container mt-5" style="margin-top:130px!important">
    <form action="{{ empty($instructor)?route('dinstructor.store'):route('dinstructor.update',$instructor)}}" method="post" enctype="multipart/form-data">
        @csrf
        @if(!empty($instructor))
        @method('PUT')
        @endif
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name"  class="form-control"  value="{{  !empty($instructor)?$instructor->name:'' }}" required> 
                </div>
                @if(empty($instructor))
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="">Email</label>
                        <input type="email" name="email"  class="form-control"  value="{{  !empty($instructor)?$instructor->name:'' }}" required> 
                    </div> <div class="form-group col-md-6">
                        <label for="">Password</label>
                        <input type="password" name="password"  class="form-control"  value="{{  !empty($instructor)?$instructor->name:'' }}" required> 
                    </div>
                </div>
                @endif
                <div class="form-group">
                    <label for="">Biography</label>
                    <textarea type="text" name="bio"  class="form-control" rows="8" >{{ !empty($instructor)?$instructor->bio:'' }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Facebook Link</label>
                    <input type="text" name="fb_link"  class="form-control" value="{{  !empty($instructor)?$instructor->fb_link:'' }}"> 
                </div>
                <div class="form-group">
                    <label for="">Instagram Link</label>
                    <input type="text" name="ig_link"  class="form-control" value="{{  !empty($instructor)?$instructor->ig_link:'' }}"> 
                </div>
                <div class="form-group">
                    <label for="">Website Link</label>
                    <input type="text" name="web_link"  class="form-control" value="{{  !empty($instructor)?$instructor->web_link:'' }}"> 
                    <input type="hidden" name="refferal" value="{{ url()->previous() }}">
                </div>
            </div>
            <div class="col-md-6">
                <h5>Cover</h5>
                <input type="file" name="cover"  @change="changeCover"  @if(empty($instructor)) required @endif>
                 <div class="tmp-cover pt-3">
                        <img src="{{ $instructor->cover }}" alt="" width="50%">  
                    <p v-if="cover">Overfiew</p> 
                    <img :src="cover" alt="" width="50%">
                    <img src="{{url('images').'/'.Auth::user()->cover}}" alt="" width="50%">
                 </div>   
                 <h5 class="mt-5">Avatar</h5>
                <input type="file" name="avatar"  @change="changeAvatar"  @if(empty($instructor)) required @endif>
                 <div class="tmp-avatar pt-3">
                 <img src="{{ $instructor->avatar }}" alt="" width="50%">  
                 <p v-if="avatar">Overfiew</p> 
                    <img :src="avatar" alt="" width="50%">
                    <img src="{{url('images').'/'.Auth::user()->avatar}}" alt="" width="50%">
                 </div> 

            </div>
            <div class="col-12 pt-5">
                <button type="submit" class="btn btn-brand btn-block">SUBMIT</button>
            </div>
        </div>
    </form>
</div>
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
        cover: null,
        avatar:null,
        edit:false,
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
           
        },
        changeCover(e){
            const el = e.target.files[0]
            this.cover= URL.createObjectURL(el)
        },
        changeAvatar(e){
            const el = e.target.files[0]
            this.avatar= URL.createObjectURL(el)
        }
    },
})

</script>

@endsection
