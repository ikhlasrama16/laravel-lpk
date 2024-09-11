@extends('layouts')
@section('content')
    <section id="detail">
        <div class="container col-xxl-10 py-5">
            <h3 class="fw-bold mb-3">
                {{ $artikel->title }}
            </h3>
            <p>{{ $artikel->created_at }}</p>

            <img src="{{ asset('storage/artikel/'.$artikel->image) }}" class="img-fluid rounded-4 mb-3" alt="">

            {!! $artikel->description !!}

        </div>
    </section>
@endsection
