@extends('admin.main')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">List Artikel</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <section class="">
        <div class="container-fluid">
                <!-- left column -->
                 <div class="col-md-11 rounded-5">
                    <!-- jquery validation -->
                     <div class="card bg-white p-4">
                        <!-- /.card-header --><!-- form start -->
                         <form action="{{ route('admin.post') }}" id="quickForm" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="exampleInputEmail1">Judul</label>
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Enter title">
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Upload Image</label>
                                <input type="file" class="form-control" name="image">
                                @error('image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror"></textarea>
                                @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <!-- /.card-body -->

                            <button type="submit" class="btn btn-primary mt-5">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">

                </div>
            </div>
    </section>
</div>
@endsection
