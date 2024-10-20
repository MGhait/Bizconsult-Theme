@extends('front.master')

@section('title', 'Index')
@section('home-active', 'active')

@section('hero')
    <div class="container-xxl bg-primary hero-header">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="text-white mb-4 animated zoomIn">We Help To Push Your Business To The Top Level</h1>
                    <p class="text-white pb-3 animated zoomIn">Tempor rebum no at dolore lorem clita rebum rebum ipsum rebum stet dolor sed justo kasd. Ut dolor sed magna dolor sea diam. Sit diam sit justo amet ipsum vero ipsum clita lorem</p>
                    <a href="" class="btn btn-outline-light rounded-pill border-2 py-3 px-5 animated slideInRight">Learn More</a>
                </div>
                <div class="col-lg-6 text-center text-lg-start">
                    <img class="img-fluid animated zoomIn" src="{{ asset('front') }}/img/hero.png" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection


@section('content')

    <x-front-about-component></x-front-about-component>
    
    <!-- Newsletter Start -->
    <div class="container-xxl bg-primary my-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container px-lg-5">
            <div class="row align-items-center" style="height: 250px;">
                <div class="col-12 col-md-6">
                    <h3 class="text-white">Ready to get started</h3>
                    <small class="text-white">Diam elitr est dolore at sanctus nonumy.</small>
                    <div class="position-relative w-100 mt-3">
                        <form action="{{ route('front.subscriber.store') }}" method="POST">
                            @csrf
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="email" name="email" placeholder="Enter Your Email" style="height: 48px;">
                            <button type="submit" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </form>
                        @if(session('subscriber_success'))
                            <div class="alert alert-success mt-3">{{ session('subscriber_success') }}</div>
                        @endif
                        @error("email")
                            <div class="alert alert-danger mt-3">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 text-center mb-n5 d-none d-md-block">
                    <img class="img-fluid mt-5" style="max-height: 250px;" src="{{ asset('front') }}/img/newsletter.png">
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->

    <x-front-services-component></x-front-services-component>

    <x-front-features-component></x-front-features-component>
    
    
    <x-front-companies-component></x-front-companies-component>

    <x-front-testimonials-component></x-front-testimonials-component>
    
    <x-front-team-component></x-front-team-component>

@endsection
