@extends('admin.main')
@section('content')
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

        </div>
    </div>
@endsection
