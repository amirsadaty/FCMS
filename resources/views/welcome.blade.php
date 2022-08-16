@extends('layouts.master')
@section('content')

    @include('partials.preloader')
    @include('partials.mainmenu')
    @include('partials.header-aria')
    @include('partials.feature')
    @include('partials.service')
    @include('partials.special_feature')
    @include('partials.prices')
    @include('partials.team')
    @include('partials.testimonial')
    @include('partials.faq')
    @include('partials.clients')
    @include('partials.blogs')
    @include('partials.footer')

@endsection
