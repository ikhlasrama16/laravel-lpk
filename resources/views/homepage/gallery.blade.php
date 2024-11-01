@extends('layouts')
@section('content')
<section id="gallery" class="mt-5 py-5">
    <div class="content">
        <div class="container">
            <h1 class="poppins-bold">Gallery</h1>
            <div class="grid-container gallery">
                @foreach ($gallerys as $gallery)
                <a href="{{ asset($gallery->image_path) }}">
                    <img src="{{ asset($gallery->image_path) }}" alt="Gallery Image">
                </a>
                @endforeach
            </div>
            @if ($gallerys->lastPage() > 1)
            <nav class="mt-5 rounded">
                <ul class="pagination justify-content-center">
                    <li class="page-item {{ $gallerys->onFirstPage() ? 'disabled' : '' }}">
                        <a class="page-link" href="{{ $gallerys->previousPageUrl() }}" tabindex="-1">Previous</a>
                    </li>
                    @for ($i = 1; $i <= $gallerys->lastPage(); $i++)
                        <li class="page-item {{ $gallerys->currentPage() == $i ? 'active' : '' }}">
                            <a class="page-link" href="{{ $gallerys->url($i) }}">{{ $i }}</a>
                        </li>
                        @endfor
                        <li class="page-item {{ $gallerys->hasMorePages() ? '' : 'disabled' }}">
                            <a class="page-link" href="{{ $gallerys->nextPageUrl() }}">Next</a>
                        </li>
                </ul>
            </nav>
            @endif
        </div>
    </div>
</section>
@endsection
