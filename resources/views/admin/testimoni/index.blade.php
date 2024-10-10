@extends('admin.main')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <div >
            <h1>Daftar Testimoni</h1>

            @if(session('success'))
            <script>
                Swal.fire({
                        title: 'Success!',
                        text: '{{ session('success') }}',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    });
            </script>
            @endif

            <a href="{{ route('admin.create_testimoni') }}" class="btn btn-primary mb-3">Tambah Testimoni</a>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Pesan</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($testimonis as $index => $testimoni)
                    <tr>
                        <td>{{ $testimonis->firstItem() + $index }}</td>
                        <td>{{ $testimoni->name }}</td>
                        <td>{{ Str::limit($testimoni->pesan, 100) }}</td>
                        <td>
                            @if($testimoni->gambar)
                            <img src="{{ asset('storage/' . $testimoni->gambar) }}" alt="{{ $testimoni->name }}" width="80">
                            @else
                            Tidak Ada Gambar
                            @endif
                        </td>
                        {{-- <td>
                            <a href="{{ route('admin.testimoni.edit', $testimoni->id) }}" class="btn btn-warning btn-sm">
                                <i class="fas fa-pen"></i> Edit
                            </a>
                            <form action="{{ route('admin.testimoni.destroy', $testimoni->id) }}" method="POST"
                                style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus testimoni ini?')">
                                    <i class="fas fa-trash"></i> Hapus
                                </button>
                            </form>
                        </td> --}}
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center">Tidak ada testimoni.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>

            <!-- Pagination -->
            {{-- <div class="d-flex justify-content-center">
                {{ $testimonis->links() }}
            </div> --}}
        </div>
    </div>
</div>
@endsection
