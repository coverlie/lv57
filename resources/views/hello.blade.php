@extends('layout/NavbarLayout')
@section('title')
Hello Title
@endsection
@section('content')

<h2>Hello World !!</h2>
<div class='row'>
    <div class='col-8 col-md-4'>
        <input type='text' class='form-control' placeholder='Please Insert'>
    </div>
</div>
<br>
<div class=''>
<a href='#' class='btn btn-dark'>Back</a>
<a href='#' class='btn btn-primary'>Next</a>
</div>
{{ $sc }}
@endsection