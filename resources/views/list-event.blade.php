    @extends('layouts.app')

    @section('title', 'Event Page')
    @section('contents')

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Event</h6>
                <h1 class="mb-5">Pilih Kategori Event</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.5s">
                    <a class="position-relative d-block overflow-hidden" href="{{route('event.musik')}}">
                        <img class="img-fluid rounded-3" src="{{asset("img/event-musik.jpeg")}}" alt="">
                        <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Musik</div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.5s">
                    <a class="position-relative d-block overflow-hidden" href="{{route('event.musik')}}">
                        <img class="img-fluid rounded-3" src="{{asset("img/event-olahraga.webp")}}" alt="">
                        <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Olahraga</div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.5s">
                    <a class="position-relative d-block overflow-hidden" href="{{route('event.musik')}}">
                        <img class="img-fluid rounded-3" src="{{asset("img/event-budaya.webp")}}" alt="">
                        <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Budaya</div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    @endsection