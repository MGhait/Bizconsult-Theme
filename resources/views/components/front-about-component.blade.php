@if(count($abouts) > 0)
    <!-- About Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow zoomIn" data-wow-delay="0.1s">
                    {{-- <img class="img-fluid" src="{{ asset('front') }}/img/about.png"> --}}
                    <img src="{{ asset("storage/$aboutArtical->image") }}" >
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">About Us</div>
                    <h2 class="mb-4">{{ $aboutArtical->title }}</h2>
                    <p class="mb-4">{{ $aboutArtical->description }}</p>
                    <div class="row g-3 mb-4">
                        @foreach ($abouts as $about )    
                            <div class="col-12 d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa {{ $about->icon }} text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h6>{{ $about->title }}</h6>
                                    <span>{{ $about->description }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
@endif