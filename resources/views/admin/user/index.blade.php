@extends('layout.master')
@section('content')
<div class="table-responsive">
    <form action="" id="role-filter">
        <select class="custom-select select-role" style="min-width: 180px;" id="role" name="role">
            <option selected="">All</option>         
            <option value=""></option>        
        </select>      
    </form>
    <form action="{{route('createUser')}}">
        <button class="btn btn-primary m-r-5">Create</button>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th scope="col">Role</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $each)
                <tr>
                    <th scope="row">{{$each->id}}</th>
                    <td>{{$each->name}}</td>
                    <td>{{$each->email}}</td>
                    <td>{{$each->phone}}</td>
                    <td>{{$each->address}}</td>
                    <td>{{$each->role}}</td>
                    <td>{{$each->status}}</td>
                </tr>
            @endforeach           
        </tbody>
    </table>
</div>
@endsection