@extends('admin.main')
@section('content')
<section class="content-wrapper">
      <div class="container-fluid">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit User</h3>
              </div>
            <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-primary">
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('admin.update_user', ['id' => $data->id]) }}" id="quickForm" method="POST" >
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Lengkap</label>
                        <input type="string" name="name" class="form-control" id="exampleInputEmail1" value="{{ $data->name }}" placeholder="Enter name">
                    </div>
                    @error('name')
                        <small class="text-danger text-bold">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{ $data->email }}" placeholder="Enter email">
                    </div>
                    @error('email')
                        <small class="text-danger text-bold">{{ $message }}</small>

                    @enderror
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    @error('password')
                        <small class="text-danger text-bold">{{ $message }}</small>
                    @enderror
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                </div>
                <!-- /.card -->
                </div>
            <!--/.col (left) -->
            <!-- right column -->
            </div>
        </div>
            <!--/.col (right) -->
            </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@endsection
