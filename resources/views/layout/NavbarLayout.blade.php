@extends('layout/BootstrapLayout')
@section('navbar')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="nav-link btn btn-primary" href="{{ route('user.index') }}">User</a>&nbsp;
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link btn btn-info" href="{{ route('user.create') }}">Create<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#">Show</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Menu4</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Menu5</a>
            </ul>
        </div>
    </nav>
@endsection