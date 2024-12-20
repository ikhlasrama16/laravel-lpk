@extends('admin.main')
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="card card-info">
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('pendaftaran.store') }}" method="POST" class="form-horizontal">
                    @csrf
                    <div class="card-body">
                        <h3>Data Pribadi</h3>

                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-sm-2 col-form-label">No Telepon</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="phone" name="phone" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki"
                                        value="Laki-laki" required>
                                    <label class="form-check-label" for="laki_laki">Laki-laki</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan"
                                        value="Perempuan" required>
                                    <label class="form-check-label" for="perempuan">Perempuan</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="asal_sekolah" class="col-sm-2 col-form-label">Asal Sekolah</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="alamat" name="alamat" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kode_pos" class="col-sm-2 col-form-label">Kode Pos</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="kode_pos" name="kode_pos" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="provinsi" class="col-sm-2 col-form-label">Provinsi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="provinsi" name="provinsi" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="alasan_ingin_kerja" class="col-sm-2 col-form-label">Alasan Ingin Kerja di Jepang</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="alasan_ingin_kerja" name="alasan_ingin_kerja" rows="3" required></textarea>
                            </div>
                        </div>

                        <h3>Data Orang Tua</h3>

                        <div class="form-group row">
                            <label for="nama_orang_tua" class="col-sm-2 col-form-label">Nama Lengkap Orang Tua</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama_orang_tua" name="nama_orang_tua" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pekerjaan_orang_tua" class="col-sm-2 col-form-label">Pekerjaan Orang Tua</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="pekerjaan_orang_tua" name="pekerjaan_orang_tua" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="alamat_orang_tua" class="col-sm-2 col-form-label">Alamat Orang Tua</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="alamat_orang_tua" name="alamat_orang_tua" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone_orang_tua" class="col-sm-2 col-form-label">No Telepon Orang Tua</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="phone_orang_tua" name="phone_orang_tua" required>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Submit</button>
                        <button type="reset" class="btn btn-default float-right">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
