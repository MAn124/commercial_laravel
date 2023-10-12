@extends('layout.master')
@section('content')
<form action="">
    <div class="form-group" class="brand-name">
        <label for="inputAddress2">Brand Name</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
    </div>
   <textarea name="" id="" cols="30" rows="10"></textarea>
    <button class="btn btn-primary m-r-5" type="submit">Submit</button>
</form>
@push('js')
    <script src="{{asset('/js/quill.min.js')}}"></script>
@endpush
@endsection