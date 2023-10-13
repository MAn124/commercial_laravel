@extends('layout.master')
@section('content')
<form action="{{route('postBrand')}}">
    <div class="form-group" name="name">
        <label for="inputAddress2">Brand Name</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    <div class="form-group" name="description">
        <label for="desc">Brand Description</label>
        <input type="text" class="form-control" id="desc" placeholder="Another input">
        @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    <button class="btn btn-primary m-r-5" type="submit">Submit</button>
</form>
@push('js')
@endpush
@endsection