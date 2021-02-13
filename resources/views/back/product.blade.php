@extends('layouts.app')

@section('content')
<div class="container" style="margin-top:90px">
@include('layouts.alert')
    <a href="{{ route('product.create') }}" class="btn btn-brand pl-5 pr-5 uppercase mb-4">Add New</a>
    <table class="table table-bordered">
        <thead>
            <th>Title</th>
            <th>Author</th>
            <th>category</th>
            <th>Difilculty</th>
            <th>Intensity</th>
            <th></th>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td> {{ $product->title }} </td>
                <td> {{ $product->author->name }} </td>
                <td> {{ $product->category->name }} </td>
                <td> {{ $product->dificulty }} </td>
                <td> {{ $product->intensity }} </td>
                <td> 
                    <a href="{{ route('product.edit',$product->id) }}" class="btn btn-dark" ><i class="icofont-edit"></i>  </a> 
                    <a href="" class=" btn btn-black ml-2" @click.prevent="deleteInstructor({{$product->id}})"><i class="icofont-trash"></i></a>
                </td> 
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<form :action="delUrl" method="post" id="delProduct"> @csrf @method('delete')</form>

@endsection

@section('footer')
<script>
new Vue({
    el: '#app',
    data: {
        delUrl: '',
    },
    methods: {
        deleteInstructor(id){
            this.delUrl = '{{ url('dashboard/product') }}/'+id
            if(confirm('Are you sure to delete?')){
                setTimeout(() => {
                    document.querySelector('#delProduct').submit()
                }, 200);
                 
            }
            else{
                this.delUrl = ''
            }
        }
    },
})
</script>
@endsection

