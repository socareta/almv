@extends('layouts.app')

@section('content')

@include('layouts.alert')

<div class="container" style="margin-top:90px">
    
    <a href="{{ route('dinstructor.create')}}" class="btn btn-dark" >ADD NEW INTRUCTOR</a>
    <table class="table table-bordered mt-3">
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th>Class</th>
            <th>Student</th>
            <th></th>
        </thead>
        <tbody>
            @foreach($instructors as $instructor)
            <tr>
                <td> {{ $instructor->name }} </td>
                <td> {{ $instructor->email }} </td>
                <td> {{ $instructor->class_count }} </td>
                <td> {{ number_format($instructor->students_sum_member_count,0,',',',') }} </td>
                <td class="text-center" width="150px">
                    <a href="{{ route('dinstructor.edit',$instructor->id) }}"  class=" btn btn-dark "><i class="icofont-edit"></i></a>
                    <a href="" class=" btn btn-black ml-2" @click.prevent="deleteInstructor({{$instructor->id}})"><i class="icofont-trash"></i></a>
                 </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<form :action="delUrl" method="post" id="delIntructor"> @csrf @method('delete')</form>
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
            this.delUrl = '{{ url('dashboard/dinstructor') }}/'+id
            if(confirm('Are you sure to delete?')){
                setTimeout(() => {
                    document.querySelector('#delIntructor').submit()
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
