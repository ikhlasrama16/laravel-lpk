@extends('admin.main')
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="col-md-9">
                <h1>Edit Testimoni</h1>

                @if ($errors->any())
                <script>
                    let errorMessages = '';
                        @foreach ($errors->all() as $error)
                            errorMessages += '{{ $error }}\n';
                        @endforeach

                        Swal.fire({
                            title: 'Error!',
                            text: errorMessages,
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                </script>
                @endif

                <form action="{{ route('admin.update_testimoni', $testimoni->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nama Lengkap"
                            value="{{ old('name', $testimoni->name) }}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="pesan">Pesan</label>
                        <textarea class="form-control" id="pesan" name="pesan" rows="5" placeholder="Pesan"
                            required>{{ old('pesan', $testimoni->pesan) }}</textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="gambar">Gambar</label>
                        @if($testimoni->gambar)
                        <div class="mb-2">
                            <img src="{{ asset('storage/' . $testimoni->gambar) }}" alt="{{ $testimoni->name }}" width="100">
                        </div>
                        @endif
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile" name="gambar">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                        <small class="form-text text-muted">Kosongkan jika tidak ingin mengubah gambar.</small>
                    </div>
                    <button type="submit" class="btn btn-info">Update</button>
                    <a href="{{ route('admin.testimoni') }}" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
@endsection
