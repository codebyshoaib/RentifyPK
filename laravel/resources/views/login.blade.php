@extends('layout')
@section('title','Login' )
@section('content')

<section class="login-section">
        <div class="img">
            <img src="{{asset('images/banner_car.png')}}" alt="" />
        </div>
        <div class="login-form">
            <h3 class="h3-head">Login Form</h3>
            <form  id="loginForm" method='POST' action="{{ route('login.post') }}">
                @csrf
                <div class="login-email">
                    <label for="loginEmail">Email Address</label>
                    <input type="email" name="email" id="loginEmail" placeholder="demo@gmail.com" autocomplete="email">
                </div>
                <div class="login-password">
                    <label for="loginPassword">Password</label>
                    <input type="password" name="password" id="loginPassword" placeholder="demo">
                </div>
                <input type="submit" name="submit" id="submit" class="submit-bt book-btn" >
            </form>

        </div>
    </section>
@endsection