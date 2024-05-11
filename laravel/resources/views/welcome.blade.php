@extends('layout')
@section('title','Signup')
@section('content')
  <main id="main">
    <section class="main-banner">
      <div class="banner-text">
        <h3>Plan Your Trip Now</h3>
        <h1>Save <span class="highlight">Big</span> With Our Car Rental</h1>
        <p>
          To contribute to positive change and achieve our sustainability
          goals with many extraordinary
        </p>
        <div class="banner-bts">
          <button class="bt book-btn"><a href="our-fleet.html">Book Now</a></button>
          <button class="bt about-btn"><a href="about.html">About Us</a></button>
        </div>
      </div>
      <div class="banner-img">
        <img id="car-img" src="{{asset('images/banner_car.png')}}" alt="" >
        <img id="banner-img" src="{{asset('images/banner_image.png')}}" alt="" />
      </div>
    </section>
    <section class="form-section">
      <div class="booking-form">
        <h3 class="h3-head">Book a Car</h3>
        <form id="booking-form" action="handleSearch.php" method="POST">
          <div class="car-info">
            <div class="car-type">
              <label for="car-type">Choose a Car Type</label>
              <select name="car-type" id="car-type">
                <option value="BMW">BMW</option>
                <option value="Mercedes">Mercedes</option>
                <option value="Honda">Honda</option>
              </select>
            </div>

            <div class="pickup-loc">
              <label for="pickup-loc">Choose Pickup Location</label>
              <select name="pickup-loc" id="pickup-loc">
                <option value="Pindi Point">Pindi Point</option>
                <option value="Admin Block">Admin Block</option>
                <option value="NIPS">NIPS</option>
              </select>
            </div>

            <div class="drop-loc">
              <label for="drop-loc">Choose Drop-of Location</label>
              <select name="drop-loc" id="drop-loc">
                <option value="Pindi Point">Pindi Point</option>
                <option value="Admin Block">Admin Block</option>
                <option value="NIPS">NIPS</option>
              </select>
            </div>
          </div>
          <div class="dates">
            <div class="pickup-date">
              <label for="pickup-date">Choose a Pickup Date</label>
              <input type="datetime-local" name="pickup-date" id="pickup-date" />
            </div>

            <div class="dropoff-date">
              <label for="dropoff-date">Choose a Dropoff Date</label>
              <input type="datetime-local" name="dropoff-date" id="dropoff-date" />
            </div>

            <input class="bt submit-bt" type="submit" value="Search" />
          </div>
        </form>
      </div>
    </section>
    <section class="abt-icons">
      <div class="section-text">
        <h3 class="h3-head">Plan Your Trip Now</h3>
        <h1 class="h1-head">Quick and Easy Car Rental</h1>
      </div>
      <div class="icon-container">
        <div class="icon icon-1">
          <div class="icon-img">
            <img src="{{asset('images/iconbox-image_01.png')}}" alt="" class="icon" />
          </div>
          <div class="icon-text">
            <h3 class="icon-heading">Select a car</h3>
            <p class="icon-text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem
              ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
          </div>
        </div>

        <div class="icon icon-2">
          <div class="icon-img">
            <img src="{{asset('images/iconbox-image_02.png')}}" alt="" class="icon" />
          </div>
          <div class="icon-text">
            <h3 class="icon-heading">Contact Driver</h3>
            <p class="icon-text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem
              ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
          </div>
        </div>
        <div class="icon icon-3">
          <div class="icon-img">
            <img src="{{asset('images/iconbox-image_03.png')}}" alt="" class="icon" />
          </div>
          <div class="icon-text">
            <h3 class="icon-heading">Let's Ride</h3>
            <p class="icon-text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem
              ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="about-us">
      <div class="about-img">
        <img src="{{asset('images/about_image.jpg')}}" alt="" />
        <button class="yt-btn play-icon"></button>
      </div>
      <div class="section-text">
        <h3 class="h3-head">About Company</h3>
        <h1 class="h1-head">
          You start the engine and your adventure begins
        </h1>
        <p class="section-para">
          Certain but she but shyness why cottage. Guy the put instrument sir
          entreaties affronting. Pretended exquisite see cordially the you.
          Weeks quiet do vexed or whose. Motionless if no to affronting
          imprudence no precaution. My indulged as disposal strongly attended.
        </p>
        <div class="section-icons">
          <div class="icon icon-1">
            <div class="icon-img">
              <img src="{{asset('images/transportation.png')}}" alt="" width="63" height="39" />
            </div>
            <div class="icon-text">
              <span class="icon-num">20</span>
              <span class="num-txt">Car Types</span>
            </div>
          </div>

          <div class="icon icon-3">
            <div class="icon-img">
              <img src="{{asset('images/car.png')}}" alt="" width="63" height="39" />
            </div>
            <div class="icon-text">
              <span class="icon-num">85</span>
              <span class="num-txt">Rental Outlets</span>
            </div>
          </div>
          <div class="icon icon-2">
            <div class="icon-img">
              <img src="{{asset('images/parking.png')}}" alt="" width="63" height="39" />
            </div>
            <div class="icon-text">
              <span class="icon-num">75</span>
              <span class="num-txt">Repair Shop</span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="vehicle-section">
      <div class="section-text">
        <h3 class="h3-head">Ready To Ride</h3>
        <h1 class="h1-head">Our Vehicles</h1>
      </div>
      <div id="vehicle-cards">
      </div>
      <div class="section-bt">
        <button class="bt about-btn">View More </button>
      </div>
    </section>
    <section class="cta-section">
      <div class="overlay"></div>
      <div class="section-txt cta-text">
        <h1 class="cta-heading h1-head">
          Save big with our cheap car rental!
        </h1>
        <h3 class="h3-head">
          Top Airports. Local Suppliers. 24/7 Support.
        </h3>
      </div>
      <div class="cta-button">
        <a href="our-fleet.html"><button class="bt book-btn">Book Now</button></a>
      </div>
    </section>
    <section class="banner-why">
      <img src="{{asset('images/display-car (1).png')}}" alt="">
    </section>
    <section class="why-choose-us-section">
      <div class="section-text-2">
        <h3 class="h3-head">Why Choose Us</h3>
        <h1 class="h1-head">
          Best valued deals you will ever find
        </h1>
        <p class="section-para">
          Thrown shy denote ten ladies though ask saw. Or by to he going think order event music. Incommode so intention
          defective at convinced. Led income months itself and houses you.
        </p>
        <a href="about.html"> <button class="bt book-btn">Learn More</button></a>
      </div>
      <div class="section-icons-2">
        <div class="icon icon-1">
          <div class="icon-img">
            <img src="{{asset('images/drive.png')}}" alt="" class="icon" />
          </div>
          <div class="icon-text">
            <h3 class="icon-heading">Cross Country Drive</h3>
            <p class="icon-text">
              Speedily say has suitable disposal add boy. On forth doubt miles of child. Exercise joy man children
              rejoiced.
            </p>
          </div>
        </div>

        <div class="icon icon-2">
          <div class="icon-img">
            <img src="{{asset('images/charge.png')}}" alt="" class="icon" />
          </div>
          <div class="icon-text">
            <h3 class="icon-heading">All Inclusive Pricing</h3>
            <p class="icon-text">
              Yet uncommonly his ten who diminution astonished. Demesne new manners savings staying had,
            </p>
          </div>
        </div>

        <div class="icon icon-3">
          <div class="icon-img">
            <img src="{{asset('images/price.png')}}" alt="" class="icon" />
          </div>
          <div class="icon-text">
            <h3 class="icon-heading">
              No Hidden Charges
            </h3>
            <p class="icon-text">
              Under folly balls death own point now men. Match way these she avoid see. She whose drift their fat off.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="testimonials">
      <div class="section-text">
        <h3 class="h3-head">What They say</h3>
        <h1 class="h1-head">Client Testimonials</h1>
      </div>
      <div class="reviews">
        <div class="review-card"><img class="card-img-top"
            src="https://images.unsplash.com/photo-1575377222312-dd1a63a51638?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=302&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=302"
            alt="">
          <div class="review-body">
            <h3 class="h3-head">Hannah Lisem<br />
              <span> Engineer </span>
              </h5>
              <p class="review-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                impedit quo minus id quod maxime placeat ” </p>
          </div>
        </div>
        <div class="review-card"><img class="card-img-top"
            src="https://images.unsplash.com/photo-1572561300743-2dd367ed0c9a?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=300&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=300"
            alt="">
          <div class="review-body">
            <h3 class="h3-head">Ronnie Coleman<br />
              <span> Body Builder </span>
              </h5>
              <p class="review-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                impedit quo minus id quod maxime placeat ” </p>
          </div>
        </div>
        <div class="review-card"><img class="card-img-top"
            src="https://images.unsplash.com/photo-1588361035994-295e21daa761?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=301&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=301"
            alt="">
          <div class="review-body">
            <h3 class="h3-head">Missy Limana<br />
              <span> Musician </span>
            </h3>
            <p class="review-text">“ Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
              impedit quo minus id quod maxime placeat ” </p>
          </div>
        </div>
        <div>
    </section>
    <section class="faq-section">
      <div class="section-text">
        <h3 class="h3-head">FAQ's</h3>
        <h1 class="h1-head">Frequently Asked Queries</h1>
      </div>
      <div class="double-col">
        <div class="faq-img">
          <img src="{{asset('images/about_image.jpg')}}" alt="">
        </div>
        <div class="faq-content">
          <div class="faq-item">
            <h3 class="question">Lorem ipsum dolor sit amet, consectetur</h3>
            <p class="answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet,
              consectetur adipiscing elit.</p>
          </div>
          <div class="faq-item">
            <h3 class="question">Lorem ipsum dolor sit amet, consectetur</h3>
            <p class="answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet,
              consectetur adipiscing elit.</p>
          </div>
          <div class="faq-item">
            <h3 class="question">Lorem ipsum dolor sit amet, consectetur</h3>
            <p class="answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet,
              consectetur adipiscing elit.</p>
          </div>
        </div>
      </div>
    </section>
    <section class="cta-section cta-section-2">
      <div class="overlay"></div>
      <div class="section-txt cta-text">
        <h1 class="cta-heading h1-head">
          Save big with our cheap car rental!
        </h1>
        <a href="our-fleet.html"><button class="bt book-btn">Book Now</button></a>
      </div>
    </section>
   
@endsection