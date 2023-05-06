@extends('layouts.app')

@section('content')
<div class="container-fluid hero-section d-flex align-items-center">
    <div class="col-4 text-center m-auto bg-black bg-opacity-50 text-white p-5 ">
        <h1 class="mb-4">Join the GigLeague Community Now</h1>
        <p class="mb-5">Find a variety of talented performers that you can book in your events. Create an account now and book a performer with east!</p>
        <a href="/discover">
        <button class="btn" >Find Performer Now</button>
        </a>
    </div>
</div>

<div class="why-section">
        <div class="inner-container">
            <h1>Why Gigleague?</h1>
            <p class="text">
            The purpose of GigLeague is to create a web-based music performance booking platform that
connects music artists and clients in Naga City. The website is designed to assist music performers in
finding events where they can perform and help clients in finding music artists that they can book for
their events. The platform aims to make the booking process seamless by allowing both parties to create
accounts and communicate with each other with ease.
            </p>
            <div class="skills">
                <span>Music Performers</span>
                <span>Clients</span>
                <span>Booking</span>
            </div>
        </div>
    </div>
<br>
    <section class="services-section">
      <div class="inner-width">
        <h1>Our <strong>Services</strong></h1>
        <div class="services owl-carousel">

          <div class="service">
            <div class="service-icon">
              <i class="fas fa-user"></i>
            </div>
            <div class="service-name">Account Creation</div>
            <div class="service-desc">Create an account for free to unlock features!</div>
          </div>

          <div class="service">
            <div class="service-icon">
              <i class="fas fa-guitar"></i>
            </div>
            <div class="service-name">Discover Performers</div>
            <div class="service-desc">Discover talented performers to book for your events!</div>
          </div>

          <div class="service">
            <div class="service-icon">
              <i class="fas fa-book"></i>
            </div>
            <div class="service-name">Book Performers</div>
            <div class="service-desc">Quickly book performers with one click of a button!</div>
          </div>

          <div class="service">
            <div class="service-icon">
              <i class="fas fa-database"></i>
            </div>
            <div class="service-name">Manage Bookings</div>
            <div class="service-desc">Add and view your bookings!</div>
          </div>

          <div class="service">
            <div class="service-icon">
              <i class="fas fa-headset"></i>
            </div>
            <div class="service-name">Support</div>
            <div class="service-desc">Contact us through email and quickly recieve customer support!</div>
          </div>
        </div>
      </div>
    </section>

    <script>
      $(".services").owlCarousel({
        margin:20,
        loop:true,
        autoplay:true,
        autoplayTimeout:2000,
        autoplayHoverPause:true,
        responsive:{
          0:{
            items:1
          },
          600:{
            items:2
          },
          1000:{
            items:3
          }
        }
      });
    </script>
@endsection
