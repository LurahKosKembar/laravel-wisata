<div class="container-xxl py-5 destination">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Destinasi</h6>
            <h1 class="mb-5">@yield('destination-title')</h1>
        </div>
        <div class="row g-3">
            <div class="col-lg-12 col-md-12">
                <div class="row g-3">
                    @foreach ($destination as $item)
                    <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <a class="position-relative d-block overflow-hidden" href="{{route('wisata.show', $item->id)}}">
                            <img class="img-fluid rounded-3" src="{{asset('/storage/' . $item->photo_path)}}" alt="">
                            <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">{{ $item->title }}</div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>