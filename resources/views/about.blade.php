@extends('layouts')
@section('content')
    <section id="about" class="mt-5 py-5">
        <div class="content-tentang">
            <div class="container">
                <h1 class="poppins-bold">Tentang Kami</h1>
                <div class="content py-5">
                    <div>
                        <h3 class="poppins-bold mt-3">LPK Mandiri Nusantara</h3>
                        <p class="poppins-bold mt-3">Berdedikasi memberikan mutu pendidikan keterampilan bertaraf international untuk menyiapkan tenaga profesional siap
                        kerja.</p>
                        <p class="mt-3">Lembaga Pendidikan Keterampilan yang mengutamakan kualitas pendidikan dan menyiapkan tenaga kerja yang handal dan
                        memberi jaminan penempatan kerja & karir untuk para lulusan ke negara Asia , Eropa dan Amerika, saat ini kami fokus ke
                        negara Jepang</p>
                    </div>
                    <div>
                        <img src="{{ asset('assets/content/Tentang-LPK-Mandiri-Nusantara.webp') }}" alt="" class="rounded">
                    </div>
                </div>

            </div>
        </div>
        <div class="content-visi">
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="poppins-bold">Visi</h3>
                        <div class="stripe"></div>
                        <p>Menjadikan calon tenaga kerja yang terampil, handal, cekatan sesuai kebutuhan dan perkembangan era globalisasi.</p>
                        <img src="{{ asset('assets/content/LPK-Mandiri-Nusantara-Indonesia-visi.webp') }}" alt="" class="rounded">
                    </div>
                    <div class="col-md-6">
                        <h3 class="poppins-bold">Misi</h3>
                        <div class="stripe"></div>
                        <p>Misi kami sangat jelas kedepan, berikut ini adalah misi LPK Mandiri Nusantara :</p>
                        <ul>
                            <li>Menyerap tenaga keluar negeri</li>
                            <li>Menjalin kerja sama dengan perusahaan – perusahaan luar negeri</li>
                            <li>Memperkenalkan kultur budaya negara lain</li>
                            <li>Mengadakan inovasi mengenai sistem pembelajaran yang modern</li>
                            <li>Membimbing prilaku atau kebiasaan peserta pelatihan sesuai dengan standar pelatihan sesuai dengan standar profesi kerja</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-fasilitas">
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="poppins-bold">Fasilitas Pendukung Dalam Kegiatan Pelatihan</h3>
                        <div class="stripe"></div>
                        <p>Fasilitas pendukung dalam kegiatan pelatihan kami</p>
                        <ul>
                            <li>Kantor</li>
                            <li>Ruang Kelas</li>
                            <li>Asrama</li>
                            <li>Mini Perpustakaan</li>
                            <li>Buku Pembelajaran</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h3 class="poppins-bold">Apa saja Progam Magang di LPK Mandiri Nusantara?</h3>
                        <div class="stripe"></div>
                        <p>Tokutei Ginou 特定技能 (kontrak dan visa kerja 5 tahun)</p>
                        <ul>
                            <li>Bagian Keperawatan Lansia</li>
                            <li>Bagian Pertanian</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
