@extends('layout.master')
@section('content')
<form action="">
    <div class="form-group" class="brand-name">
        <label for="inputAddress2">Brand Name</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
    </div>
    <div id="editor" class="brand-desc">
        <p>Hello World!</p>
        <p>Some initial <strong>bold</strong> text</p>
        <p><br></p>
    </div>
    <button class="btn btn-primary m-r-5" type="submit">Submit</button>
</form>
@push('js')
    <script src="{{asset('/js/quill.min.js')}}"></script>
@endpush
@endsection