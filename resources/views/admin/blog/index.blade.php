@extends('admin.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <div class="container-fluid">
        <h1>List Artikel</h1>
          <div class="mr-md-3">
            <a href="{{ route('admin.add_blog') }}" class="btn btn-success">
                Tambah Artikel
            </a>
          </div>
        </div><!-- /.row -->
      <!-- /.container-fluid -->

    <!-- Main content -->
    <section class="content mt-3">
      <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Judul</th>
                      <th>Thumbnail</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                        $no=1;
                    @endphp
                    @foreach ($artikels as $artikel)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $artikel->title }}</td>
                            <td>
                                <img src="{{ asset('storage/artikel/'. $artikel->image) }}" height="100" alt="">
                            </td>
                            <td>
                                <a href="{{ route('admin.edit_blog', ['id' => $artikel->id]) }}" class="btn btn-success">Edit</a>
                                <form action="{{ route('admin.delete_blog', ['id' => $artikel->id]) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
    </section>
    <!-- /.content -->
    </div>
</div>
@endsection
