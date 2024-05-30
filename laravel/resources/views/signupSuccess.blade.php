@extends('layout')
@section('title','Login' )
@section('content')
<div class="signup-success">
    <h2>User Registered In database Succesfully</h2>
    <a href="{{route('login')}}"><button class="bt button-2">Login</button></a> 
</div>
@endsection