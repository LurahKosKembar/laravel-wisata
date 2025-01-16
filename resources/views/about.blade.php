    @extends('layouts.app')

    @section('title', 'Home Page')
    @section('contents')

    <!-- About Start -->
    @include('partials.about')
    <!-- About End -->

    <!-- Team Start -->
    @include('partials.team')
    <!-- Team End -->

    @endsection