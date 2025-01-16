    @extends('layouts.app')

    @section('title', 'Event Page')
    @section('contents')

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Event</h6>
                <h1 class="mb-5">{{$event->title}}</h1>
            </div>

            <div class="wow zoomIn" data-wow-delay="0.3s">
                <div class="position-relative d-flex justify-content-center overflow-hidden">
                    <div class="w-75">
                        <img class="w-100 rounded-3" src="{{asset('/storage/'.$event->photo_path)}}" alt="">
                        <div class="mt-4 text-dark">
                            {!! $event->description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection