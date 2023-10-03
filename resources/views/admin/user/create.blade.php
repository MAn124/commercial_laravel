@extends('layout.master')
@section('content')
    <form action="{{route('postUser')}}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="form-row"> <div class="form-group col-md-6">
                <label for="name">Name</label>
                <input  class="form-control" id="name" name="name" placeholder="Name">
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Confirm Password</label>
                <input type="password" class="form-control" id="confirmpassword" placeholder="Password">
            </div>
            <div class="form-group col-md-6 mt-auto">
                
                <input type="file" class="custom-file-input" id="avatar" name="avatar" accept="image/png, image/jpeg">
                <label class="custom-file-label" for="customFile" >Avatar</label>
            </div>
            <div class="form-group col-md-6">
                <label for="phone">Phone</label>
                <input class="form-control" id="phone" name="phone" placeholder="Phone">
            </div>
        </div>      
        <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" name="address" id="inputAddress" >
        </div>
        <fieldset class="form-group">
            <div class="row">
                <label class="col-form-label col-sm-2 pt-0">Role</label>
                <div class="col-sm-10">
                    <div class="radio">
                        <input type="radio" name="role" id="gridRadios1" value="0" checked>
                        <label for="gridRadios1">
                            Admin
                        </label>
                    </div>
                    <div class="radio">
                        <input type="radio" name="role" id="gridRadios2" value="1">
                        <label for="gridRadios2">
                           User
                        </label>
                    </div>
                   
                </div>
            </div>
        </fieldset>
        <button class="btn btn-primary m-r-5" type="submit">Submit</button>
    </form>
    
@endsection