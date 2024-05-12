@extends('layout')

@section('title', 'Vehicles')

@section('content')
<section class="page-banner">
      <div class="overlay"></div>
      <div class="section-txt cta-text">
        <h1 class="cta-heading h1-head">
          Searched Cars
</h1>
      </div>
    </section>
<div id="vehicle-cards">
    @foreach ($carData as $car)
    <div class="card">
        <img src="{{ asset('images/vehicles/' . $car['name'] . '.jpg') }}" alt="">
        <div class="veh-info">
            <div class="car-name"><h3 class="car-name">{{ $car['name'] }}</h3></div>
            <div class="car-price"><h3 class="price">${{ $car['price'] }}</h3><span class="day">Per Day</span></div>
        </div>
        <div class="veh-data">
            <div class="data-single"><img src="{{asset('./images/svg icons/car-solid.svg')}}" alt=""><span>{{ $car['category'] }}</span></div>
            <div class="data-single"><img src="{{asset('./images/svg icons/car-seat-svgrepo-com.svg')}}" alt=""><span>{{ $car['seats'] }} Seats</span></div>
            <div class="data-single"><img src="{{asset('./images/svg icons/cart-flatbed-suitcase-solid.svg')}}" alt=""><span>{{ $car['luggage'] }} Bags</span></div>
            <div class="data-single"><img src="{{asset('./images/svg icons/gas-pump-solid.svg')}}" alt=""><span>{{ $car['fuelType'] }}</span></div>
        </div>
        <div class="hr"></div>
        <button class="bt book-btn card-bt">Book Now</button>
    </div>
    @endforeach
</div>
@endsection
