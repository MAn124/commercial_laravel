@extends('layout.master')
@section('content')
<div class="table-responsive">
    <form action="">
        <select class="custom-select select-role" style="min-width: 180px;" id="role" name="role">
           <option value="" selected>All</option>              
        </select>      
    </form>
    <form action="{{route('')}}">
        <button class="btn btn-primary m-r-5">Create</button>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Category Name</th>
                <th scope="col">Category Description</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <th>{{$each->id}}</th>
                    <td>{{$each->brand_name}}</td>
                    <td>{{$each->brand_description}}</td>
                    <td><button class="btn btn-warning m-r-5">Edit</button></td>
                    <td><button class="btn btn-danger m-r-5">Delete</button></td>                   
                </tr>          
        </tbody>
    </table>
</div>
@endsection