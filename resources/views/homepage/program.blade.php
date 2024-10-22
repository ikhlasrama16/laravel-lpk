@extends('layouts')
@section('content')
    <section id="program" class="mt-5 py-5">
        <div class="content-program">
            <div class="container">
                <h1 class="poppins-bold">Program</h1>
                <div>
                    <h2 class="py-5">Tokutei Ginou 特定技能 ( Kontrak dan Visa Kerja 5 Tahun )</h2>
                    <div class="h3-wrapper">
                        <h3>Bagian keperawatan lansia</h3>
                        <h3>Bagian pertanian</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-syarat">
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-6" data-aos="fade-down">
                        <h3>Tahapan dan Syarat<br> Pemagang</h3>
                        <div class="stripe"></div>
                        <ul>
                            <li>Memiliki minat tinggi kerja dijepang</li>
                            <li>Mau mengikuti pembelajaran selama di asrama</li>
                            <li>Tidak bertato dan tidak bekas tindik</li>
                            <li>Disiplin dan bertanggung jawab</li>
                        </ul>
                    </div>
                    <div class="col-md-6" data-aos="fade-down">
                        <h3>Persyaratan Magang dan Kerja LPK Mandiri Nusantara</h3>
                        <div class="stripe"></div>
                        <ul>
                            <li>Pendidikan Formal SMK/SMA/S-1 semua jurusan</li>
                            <li>Laki-laki dan perempuan usia minimal 18 – 30 tahun</li>
                            <li>Mencantumkan surat keterangan sehat ( puskesmas / klinik )</li>
                            <li>Tidak cacat fisik dan buta warna</li>
                            <li>Tinggi badan 150 cm ( perempuan )</li>
                            <li>Tinggi badan 165 cm ( laki-laki )</li>
                            <li>Mencantumkan diantaranya CV, pas foto 4x6 warna, SKKB, ijin orang tua bermaterai, fc KK, fc KTP, *sertifikat keahlian
                            khusus</li>
                            <li>Membawa foto warna ukuran 4x6 = 6 lembar, dan 3x4 = 6 lembar</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-prosedur">
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-6" data-aos="fade-up">
                        <h3>Prosedur Seleksi Kerja Magang</h3>
                        <div class="stripe"></div>
                        <img src="{{ asset('assets/content/program-prosedur-magang.jpg') }}" alt="">
                    </div>
                    <div class="col-md-6" data-aos="fade-up">
                        <h3>Kegiatan Pembelajaran</h3>
                        <div class="stripe"></div>
                        <img src="{{ asset('assets/content/program-kegiatan-pembelajaran-saat-di-asrama.jpg') }}" alt="">
                    </div>
                </div>
                <a href="{{ route('pendaftaran.index') }}" data-aos="fade-up">
                    <button class="mt-5">Daftar Sekarang</button>
                </a>
            </div>
        </div>
    </section>
@endsection
