@extends('front.master')

@section('title', 'About')
@section('about-active', 'active')

@section('hero')
    <x-hero-section title="About Us" subtitle="About"></x-hero-section>
@endsection


@section('content')

    <x-front-about-component></x-front-about-component>

    <x-front-features-component></x-front-features-component>
    
    <x-front-team-component></x-front-team-component>

@endsection
