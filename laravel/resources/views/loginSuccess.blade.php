@extends('layout')
@section('title','Login' )
@section('content')
<div class="login-success">
    <h2>User Logged In  Succesfully</h2>
    <a href="{{route('home')}}"><button class="bt button-2">Go Home</button></a> 
</div>
@endsection