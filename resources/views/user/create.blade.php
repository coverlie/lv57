@extends('layout/NavbarLayout')
@section('title')
เพิ่มข้อมูล
@endsection
@section('content')
<h2 align='center'>Add USer</h2>
@if (Session::has('sc'))
    <div class='alert alert-success'>
        {{ Session::get('sc') }}
    </div>  
@endif
@if (count($errors)>0)
    <div class='alert alert-danger'>
        @foreach ($errors->all() as $row)
            <p>{{ $row }}</p>
        @endforeach
    </div> 
@endif

<form method='post' action='{{ url('user') }}'>
     {{ csrf_field() }}
    <div class='form-group'>
        <p>FirstName</p>
        <input class='form-control' type='text' name='fname' placeholder='ใส่ชื่อ'>
    </div>
    <div class='form-group'>
        <p>LastName</p>
        <input class='form-control' type='text' name='lname' placeholder='ใส่นามสกุล'>
    </div>
    <div class='form-group'>
        <input class='btn btn-primary' type='submit' value='บันทึก'>
    </div>
       
</form>


@endsection