<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body class="bg-body-secondary">
@extends('layouts.app')

@section('content')


<div class="container-fluid border p-2 mt-2 rounded bg-white" style="width: 75%;">
    <form action="{{route('user-profile-information.update')}}" method="POST">
        @csrf
        @method('PUT')
        <div class="text-center">
            <h1>Profile</h1>
        </div>
        @if(session('status')==='profile-information-updated')
            <div class="alert alert-success">
                Your profile has been updated.
            </div>
        @endif
        <div class="container">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="{{ old('name',auth()->user()->name)}}"/>
            @error('name')
            <div class="text-danger">{{$message}}</div>
            @enderror
            <br />
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="{{ old('email',auth()->user()->email)}}" />
            @error('email')
            <div class="text-danger">{{$message}}</div>
            @enderror
            <br />

            

            
            
            <div class="d-grid mu-2">
                <input class="btn btn-primary" type="submit" value="Update Profile" />
            </div>
            
        </div>
    </form>
</div>
@include('profile.password')
<div class="container-fluid border p-2 mt-2 mb-2 rounded bg-white" style="width: 75%;">

    <form class="d-flex mt-3" action="{{route('logout')}}" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger">LogOut</button>
    </form>
</div>
@endsection
</body>

</html>