@extends('admin.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="mt-5 mr-md-3">
            <a href="{{ route('admin.create_pendaftaran') }}" class="btn btn-success">
                Tambah Data
            </a>
        </div>
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">List Pendaftar</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->email }}</td>
                            <td>
                                <a href="{{ route('admin.edit_pendaftaran', ['id' => $data->id]) }}" class="btn btn-warning">
                                    <i class="fas fa-pen"></i> Edit
                                </a>
                                <a data-toggle="modal" data-target="#modal-hapus{{ $data->id }}" class="btn btn-danger">
                                    <i class="fas fa-trash"></i> Hapus
                                </a>
                            </td>
                        </tr>
                        <div class="modal fade" id="modal-hapus{{ $data->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Konfirmasi Hapus Data</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Apakah yakin ingin menghapus <b>{{ $data->nama }}</b></p>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <form action="{{ route('admin.delete_pendaftaran', ['id' => $data->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-danger">Hapus</button>

                                        </form>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div><!-- /.container-fluid -->
    </div>
</div>
@endsection
