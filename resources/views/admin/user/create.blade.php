@extends('layout.master')
@section('content')
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="form-row"> <div class="form-group col-md-6">
                <label for="inputEmail4">Name</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Name">
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Confirm Password</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
            </div>
            <div class="form-group col-md-6 mt-auto">
                
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile" accept="image/png, image/jpeg">Avatar</label>
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">Phone</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Phone">
            </div>
        </div>
       
        <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" id="inputAddress" >
        </div>
        <fieldset class="form-group">
            <div class="row">
                <label class="col-form-label col-sm-2 pt-0">Radios</label>
                <div class="col-sm-10">
                    <div class="radio">
                        <input type="radio" name="gridRadios" id="gridRadios1" value="0" checked>
                        <label for="gridRadios1">
                            Admin
                        </label>
                    </div>
                    <div class="radio">
                        <input type="radio" name="gridRadios" id="gridRadios2" value="1">
                        <label for="gridRadios2">
                            User
                        </label>
                    </div>                  
                </div>
            </div>
        </fieldset>
        <button class="btn btn-primary m-r-5" action="{{route('postUser')}}">Primary</button>
    </form>
    
@endsection