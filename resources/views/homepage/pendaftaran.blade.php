@extends('layouts')
@section('content')
    <section id="pendaftaran">
        <div class="pendaftaran">
            <div class="container">
                <h1 class="py-5">Pendaftaran</h1>
                <form action="{{ route('pendaftaran.store') }}" class="col-md-9" method="POST">
                    @csrf
                    <div>
                        <h3>Data Pribadi</h3>
                    </div>
                    <div class="form-group mb-3">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" id="nama" required>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                        <div class="col">
                            <label for="">No telepon</label>
                            <input type="number" class="form-control" name="phone" id="phone" required>
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col">
                            <label for="">Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" required>
                        </div>
                        <div class="col">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" required>
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        {{-- <label for="">Jenis Kelamin</label> --}}
                        <div class="col">
                            <label for="">Jenis Kelamin</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki" value="Laki-laki" required>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Laki-laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan" required>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Perempuan
                                </label>
                            </div>
                        </div>
                        <div class="col">
                            <label for="">Asal Sekolah</label>
                            <input type="text" class="form-control" name="asal_sekolah" id="asal_sekolah" required>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" required>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col">
                            <label for="">Kode Pos</label>
                            <input type="number" class="form-control" name="kode_pos" id="kode_pos" required>
                        </div>
                        <div class="col">
                            <label for="">Provinsi</label>
                            <input type="text" class="form-control" name="provinsi" id="provinsi" required>
                        </div>
                    </div>
                    <div class="mb-5">
                        <label class="form-label">Alasan Ingin Kerja di Jepang</label>
                        <textarea class="form-control" name="alasan_ingin_kerja" id="alasan_ingin_kerja" rows="3" required></textarea>
                    </div>
                    <div>
                        <h3>Data Orang Tua</h3>
                    </div>
                    <div class="form-group mb-3">
                        <label>Nama Lengkap Orang Tua</label>
                        <input type="text" class="form-control" name="nama_orang_tua" id="nama_orang_tua" required>
                    </div>
                    <div class="form-group mb-3">
                        <label>Pekerjaan Orang Tua</label>
                        <input type="text" class="form-control" name="pekerjaan_orang_tua" id="pekerjaan_orang_tua" required>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col">
                            <label for="">Alamat Orang Tua</label>
                            <input type="text" class="form-control" name="alamat_orang_tua" id="alamat_orang_tua" required>
                        </div>
                        <div class="col">
                            <label for="">No telepon Orang Tua</label>
                            <input type="text" class="form-control" name="phone_orang_tua" id="phone_orang_tua" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </section>
@endsection
