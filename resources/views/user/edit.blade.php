@extends('layout/NavbarLayout')
@section('title')
แก้ไข
@endsection

@section('content')

@if (count($errors)>0)
    <div class='alert alert-danger'>
        @foreach ($errors->all() as $row)
            <p>{{ $row }}</p>
        @endforeach
    </div> 
@endif

        

<form method='post' action='{{ action('UserController@update',$user->id) }}'>
     {{ csrf_field() }}
     {{ method_field('PUT') }}
    <div class='form-group'>
        <p>FirstName</p>
        <input class='form-control' type='text' name='fname' value='{{ $user->fname }}'>
    </div>
    <div class='form-group'>
        <p>LastName</p>
        <input class='form-control' type='text' name='lname' value='{{ $user->lname }}'>
    </div>
    <div class='form-group'>
        <input class='btn btn-primary' type='submit' value='แก้ไข'>
    </div> 
</form>
@endsection