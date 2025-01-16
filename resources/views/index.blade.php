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
    @section('destination-title', 'Destinasi Pilihan')
    @include('partials.destination')
    <!-- Destination Start -->

    <!-- Booking Start -->
    @include('partials.booking')
    <!-- Booking Start -->

    <!-- Event Start -->
    @include('partials.event')
    <!-- Event End -->

    <!-- Team Start -->
    @include('partials.team')
    <!-- Team End -->

    <!-- Testimonial Start -->
    @include('partials.testimonial')
    <!-- Testimonial End -->

    @endsection