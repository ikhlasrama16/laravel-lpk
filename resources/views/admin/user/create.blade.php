@extends('admin.main')
@section('content')
<section class="content-wrapper">
      <div class="container-fluid">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah User</h3>
              </div>
            <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-primary">
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('admin.store') }}" id="quickForm" method="POST">
                    @csrf
                    <div class="card-body">
                        <!-- Nama Lengkap -->
                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter name"
                                value="{{ old('name') }}">
                        </div>
                        @error('name')
                        <small class="text-danger text-bold">{{ $message }}</small>
                        @enderror

                        <!-- Email -->
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email"
                                value="{{ old('email') }}">
                        </div>
                        @error('email')
                        <small class="text-danger text-bold">{{ $message }}</small>
                        @enderror

                        <!-- Password -->
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        @error('password')
                        <small class="text-danger text-bold">{{ $message }}</small>
                        @enderror

                        <!-- Password Confirmation (optional, if needed) -->
                        <div class="form-group">
                            <label for="password_confirmation">Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation"
                                placeholder="Confirm Password">
                        </div>
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
            <div class="col-md-6">

            </div>
            <!--/.col (right) -->
            </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@endsection
