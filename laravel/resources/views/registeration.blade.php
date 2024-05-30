@extends('layout')
@section('title','Signup')
@section('content')
<section class="signup-section">
      <div class="img">
        <img src="{{asset('images/banner_car.png')}}" alt="" />
      </div>
      <div class="signup-form">
        <h3 class="h3-head">Sign Up Form</h3>
        <form method='POST' action="{{ route('registeration.post') }}" id="signUpForm">
        @csrf
          <div class="signup-name">
            <label for="signupUsername">Full Name</label>
            <input
              type="text"
              name="name"
              id="signupUsername"
              placeholder="Shoaib "
            />
          </div>
          <div class="signup-email">
            <label for="signupEmail">Email Address</label>
            <input
              type="email"
              name="email"
              id="signupEmail"
              placeholder="abc@gmail.com"
              autocomplete="email"
            />
          </div>
          <div class="signup-password">
            <label for="signupPassword">Password</label>
            <input
              type="password"
              name="Password"
              id="signupPassword"
              placeholder="*******"
            />
          </div>

          <input
            type="submit"
            name="submit"
            id="submit"
            class="submit-bt book-btn"
          />
        </form>
      </div>
    </section>
@endsection