@extends('layouts.app')

@section('title', 'Mars Tanzania')

@section('content')

    @include('partials.navigation')

    <main class="main relative">

        @include('partials.hero')

        @include('partials.about')
        @include('partials.offer')

        @include('partials.services')
        @include('partials.branches')

        @include('partials.video')
        @include('partials.choose')
        {{-- @include('partials.pricing') --}}

        @include('partials.action')



        @include('partials.faq')

        @include('partials.products')

        @include('partials.partners')

        @include('partials.contact')

        @include('partials.location')


    </main>

    @include('partials.footer')


@endsection
