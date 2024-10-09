@extends('layouts')
@section('content')
{{-- blog artikel --}}
    <section id="blog" class="mt-5 py-5">
        <div class="container col-xxl-10 py-5">
            <div class="row">
                @foreach ($artikels as $item)
                <div class="col-lg-4 mb-4">
                    <a href="/blog/detail/{{ $item->id }}" class="text-decoration-none text-dark">
                        <div class="card bg-white border-0">
                            <img src="{{ asset('storage/artikel/'. $item->image) }}" class="img-fluid rounded-4 mb-3" height="50" alt="">
                            <h3 class="fw-bold mb-3">{{ $item->title }}</h3>
                            <p>{{ $item->created_at }}</p>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
