@extends('layouts')
@section('content')
<section id="gallery" class="mt-5 py-5">
    <div class="content">
        <div class="container">
            <h1 class="poppins-bold">Gallery</h1>
            <div class="grid-container gallery">
                <a href="{{ asset('assets/content/Gallery-lpk-mandiri-nusantara-1.jpeg') }}">
                    <img src="{{ asset('assets/content/Gallery-lpk-mandiri-nusantara-1.jpeg') }}" alt="">
                </a>
                <a href="{{ asset('assets/content/Gallery-lpk-mandiri-nusantara-2.jpeg') }}">
                    <img src="{{ asset('assets/content/Gallery-lpk-mandiri-nusantara-2.jpeg') }}" alt="">
                </a>
                <a href="{{ asset('assets/content/Gallery-lpk-mandiri-nusantara-3.jpeg') }}">
                    <img src="{{ asset('assets/content/Gallery-lpk-mandiri-nusantara-3.jpeg') }}" alt="">
                </a>
                <a href="{{ asset('assets/content/Gallery-lpk-mandiri-nusantara-4.jpeg') }}">
                    <img src="{{ asset('assets/content/Gallery-lpk-mandiri-nusantara-4.jpeg') }}" alt="">
                </a>
                <a href="{{ asset('assets/content/Gallery-lpk-mandiri-nusantara-5.jpeg') }}">
                    <img src="{{ asset('assets/content/Gallery-lpk-mandiri-nusantara-5.jpeg') }}" alt="">
                </a>
                <a href="{{ asset('assets/content/Gallery-lpk-mandiri-nusantara-6.jpeg') }}">
                    <img src="{{ asset('assets/content/Gallery-lpk-mandiri-nusantara-6.jpeg') }}" alt="">
                </a>
                <a href="{{ asset('assets/content/Gallery-lpk-mandiri-nusantara-7.jpeg') }}">
                    <img src="{{ asset('assets/content/Gallery-lpk-mandiri-nusantara-7.jpeg') }}" alt="">
                </a>
                <a href="{{ asset('assets/content/Gallery-lpk-mandiri-nusantara-8.jpeg') }}">
                    <img src="{{ asset('assets/content/Gallery-lpk-mandiri-nusantara-8.jpeg') }}" alt="">
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
