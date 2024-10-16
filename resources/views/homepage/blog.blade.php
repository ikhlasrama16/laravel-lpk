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
            @if ($artikels->lastPage() > 1)
            <nav class="mt-5 rounded">
                <ul class="pagination justify-content-center">
                    <li class="page-item {{ $artikels->onFirstPage() ? 'disabled' : '' }}">
                        <a class="page-link" href="{{ $artikels->previousPageUrl() }}" tabindex="-1">Previous</a>
                    </li>
                    @for ($i = 1; $i <= $artikels->lastPage(); $i++)
                    <li class="page-item {{ $artikels->currentPage() == $i ? 'active' : '' }}">
                        <a class="page-link" href="{{ $artikels->url($i) }}">{{ $i }}</a>
                    </li>
                    @endfor
                    <li class="page-item {{ $artikels->hasMorePages() ? '' : 'disabled' }}">
                        <a class="page-link" href="{{ $artikels->nextPageUrl() }}">Next</a>
                    </li>
                </ul>
            </nav>
            @endif
        </div>
    </section>
@endsection
