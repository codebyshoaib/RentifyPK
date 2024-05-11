@if(auth()->check())
  <!-- Display this header if the user is logged in -->
  <header id="header" class="header">
    <img id="head-logo" src="{{asset('images/rentifyPK.png')}}" alt="" />
    <ul id="main-menu">
      <li><a class="nav-link" href="{{route('home')}}">Home</a></li>
      <li><a class="nav-link" href="{{route('about')}}">About Us</a></li>
      <li><a class="nav-link" href="{{route('fleet')}}">Our Fleet</a></li>
      <li><a class="nav-link" href="{{route('contact')}}">Contact Us</a></li>
    </ul>
    <div class="head-bts">
      <a href="{{route('logout')}}"><button class="bt button-2">Logout</button></a> 
    </div>
  </header>
@else
  <!-- Display this header if the user is not logged in -->
  <header id="header" class="header">
    <img id="head-logo" src="{{asset('images/rentifyPK.png')}}" alt="" />
    <ul id="main-menu">
    <li><a class="nav-link" href="{{route('home')}}">Home</a></li>
      <li><a class="nav-link" href="{{route('about')}}">About Us</a></li>
      <li><a class="nav-link" href="{{route('fleet')}}">Our Fleet</a></li>
      <li><a class="nav-link" href="{{route('contact')}}">Contact Us</a></li>
    </ul>
    <div class="head-bts">
      <a href="{{route('registeration')}}"><button class="main-bt bt button-1">Signup</button></a> 
      <a href="{{route('login')}}"><button class="bt button-2">Login</button></a> 
    </div>
  </header>
@endif
