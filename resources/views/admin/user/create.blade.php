@extends('layout.master')
@section('content')
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="form-row"> <div class="form-group col-md-6">
                <label for="inputEmail4">Name</label>
                <input  class="form-control" id="name" placeholder="Name">
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Confirm Password</label>
                <input type="password" class="form-control" id="confirmpassword" placeholder="Password">
            </div>
            <div class="form-group col-md-6 mt-auto">
                
                <input type="file" class="custom-file-input" id="avatar" accept="image/png, image/jpeg">
                <label class="custom-file-label" for="customFile" >Avatar</label>
            </div>
            <div class="form-group col-md-6">
                <label for="phone">Phone</label>
                <input  class="form-control" id="phone" placeholder="Phone">
            </div>
        </div>      
        <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" id="inputAddress" >
        </div>
        <fieldset class="form-group">
            <div class="row">
                <label class="col-form-label col-sm-2 pt-0">Role</label>
                <div class="col-sm-10">
                    <div class="radio">
                        <input type="radio" name="gridRadios" id="role" value="0" checked>
                        <label for="role">
                            Admin
                        </label>
                    </div>
                    <div class="radio">
                        <input type="radio" name="gridRadios" id="role" value="1">
                        <label for="role">
                            User
                        </label>
                    </div>                  
                </div>
            </div>
        </fieldset>
        <button class="btn btn-primary m-r-5" action="{{route('postUser')}}">Primary</button>
    </form>
    
@endsection