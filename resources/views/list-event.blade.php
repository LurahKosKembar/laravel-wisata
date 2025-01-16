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
                @foreach ($data as $item)
                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.5s">
                    <a class="position-relative d-block overflow-hidden" href="{{route('event.category', $item->id)}}">
                        <img class="img-fluid rounded-3" src="{{asset('/storage/'.$item->photo_path)}}" alt="">
                        <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">{{$item->name}}</div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    @endsection