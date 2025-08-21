@extends('layouts.app')

@section('title', 'Mars Tanzania')

@section('content')

    @include('partials.navigation')

    <main class="main relative">

        @include('partials.hero')
        @include('partials.about')

        @include('partials.services')

        {{-- @include('partials.video') --}}

        @include('partials.choose')

        {{-- @include('partials.pricing') --}}

        @include('partials.action')

        {{-- @include('partials.team') --}}

        @include('partials.testimonial')

        @include('partials.faq')

        @include('partials.products')

        @include('partials.partners')

        @include('partials.contact')


    </main>

    @include('partials.footer')


@endsection
