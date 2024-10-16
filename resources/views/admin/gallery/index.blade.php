@extends('admin.main')
@section('content')
<style>
    .container {
        position: relative;
        width: 200px;
        /* Sesuaikan lebar gambar */
        margin: 10px;
    }

    .image {
        opacity: 1;
        display: block;
        width: 100%;
        height: auto;
        transition: .5s ease;
        backface-visibility: hidden;
    }

    .middle {
        transition: .5s ease;
        opacity: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }

    .container:hover .image {
        opacity: 0.3;
    }

    .container:hover .middle {
        opacity: 1;
    }

    .delete-btn {
        background-color: #ff0000;
        color: white;
        font-size: 16px;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
    }

    .grid-container {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }
</style>

<div class="content-wrapper">
    <div class="container-fluid">
        <div>
            <h1>Gallery</h1>
        </div>
        <div class="mt-5 mr-md-3">
            <a href="{{ route('admin.add_gallery') }}" class="btn btn-success">
                Tambah Foto
            </a>
        </div>
        <div class="grid-container gallery">
            @foreach ($gallerys as $gallery)
            <div class="container">
                <img src="{{ asset('storage/' . $gallery->image_path) }}" alt="Image" class="image img-thumbnail">
                <div class="middle">
                    <!-- Form untuk menghapus gambar -->
                    <form action="{{ route('admin.delete_gallery', $gallery->id) }}" method="POST"
                        onsubmit="return confirm('Are you sure you want to delete this image?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-btn">Delete</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
