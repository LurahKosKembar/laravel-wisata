    @extends('layouts.app')

    @section('title', 'Home Page')
    @section('contents')

    <!-- About Start -->
    @include('partials.about')
    <!-- About End -->

    <!-- Service Start -->
    @include('partials.service')
    <!-- Service End -->


    <!-- Destination Start -->
    @include('partials.destination')
    <!-- Destination Start -->

    <!-- Booking Start -->
    @include('partials.booking')
    <!-- Booking Start -->

    <!-- Package Start -->
    @include('partials.inspiration')
    <!-- Package End -->

    <!-- Team Start -->
    @include('partials.team')
    <!-- Team End -->

    <!-- Testimonial Start -->
    @include('partials.testimonial')
    <!-- Testimonial End -->

    @endsection