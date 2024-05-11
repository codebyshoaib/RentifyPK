<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>RentifyPK</title>
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
        @if(auth()->check())
          <div class="greetings">
          <p>Good morning, {{ auth()->user()->name }}!</p>
          </div>
        @endif
     
        @include('include.header')
        @yield('content')
        @include('include.footer')

        <script src="{{ asset('js/vehicles.js') }}"></script>

</body>
</html>