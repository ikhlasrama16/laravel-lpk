@extends('layouts')
@section('content')
    <section id="pendaftaran">
        <div class="pendaftaran">
            <div class="container">
                <h1>Pendaftaran</h1>
                <form action="" class="col-md-9">
                    <div>
                        <h3>Data Pribadi</h3>
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputEmail1">Nama Lengkap</label>
                        <input type="name" class="form-control" name="name">
                    </div>
                    <div class="form-row mb-3">
                        <div class="col">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="col">
                            <label for="">No telepon</label>
                            <input type="number" class="form-control" name="phone">
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col">
                            <label for="">Tempat Lahir</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" class="form-control">
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        {{-- <label for="">Jenis Kelamin</label> --}}
                        <div class="col">
                            <label for="">Jenis Kelamin</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Laki-laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Perempuan
                                </label>
                            </div>
                        </div>
                        <div class="col">
                            <label for="">Asal Sekolah</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputEmail1">Alamat</label>
                        <input type="name" class="form-control" name="alamat">
                    </div>
                    <div class="form-row mb-3">
                        <div class="col">
                            <label for="">Kode Pos</label>
                            <input type="email" class="form-control" name="kode-pos">
                        </div>
                        <div class="col">
                            <label for="">Provinsi</label>
                            <input type="number" class="form-control" name="provinsi">
                        </div>
                    </div>
                    <div class="mb-5">
                        <label class="form-label">Alasan Ingin Kerja di Jepang</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div>
                        <h3>Data Orang Tua</h3>
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputEmail1">Nama Lengkap Orang Tua</label>
                        <input type="name" class="form-control" name="name-parent">
                    </div>
                    <div class="form-group mb-3">
                        <label for="exampleInputEmail1">Pekerjaan Orang Tua</label>
                        <input type="name" class="form-control" name="job-parent">
                    </div>
                    <div class="form-row mb-3">
                        <div class="col">
                            <label for="">Alamat Orang Tua</label>
                            <input type="text" class="form-control" name="alamat">
                        </div>
                        <div class="col">
                            <label for="">No telepon Orang Tua</label>
                            <input type="text" class="form-control" name="phone">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </section>
@endsection
