@extends('layouts')
@section('content')
    <section id="program" class="mt-5 py-5">
        <div class="content-program">
            <div class="container">
                <h1 class="poppins-bold uppercase fw-bold">INFO KARIR DI JEPANG</h1>
                <div>
                    <h2 class="py-5 fw-light">Tokutei Ginou dan Ginoshusei (G to G)</h2>
                    <div class="row horizontal-headings">
                        <h3>Kaigoshi</h3>
                        <h3>Kangoshi & Kaigofukushishi</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-syarat">
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-6" data-aos="fade-down">
                        <h3>Keunggulan Program Tokutei Ginou:</h3>
                        <div class="stripe"></div>
                        <ul>
                            <li>Kesempatan bekerja di berbagai sektor dengan permintaan tinggi</li>
                            <li>Pelatihan dan sertifikasi yang membantu meningkatkan keterampilan.</li>
                            <li>Peluang perpanjangan kontrak dan kesempatan mendapatkan visa permanen (Tokutei Ginou II).</li>
                        </ul>
                    </div>
                    <div class="col-md-6" data-aos="fade-down">
                        <h3>Keunggulan Program G to G:</h3>
                        <div class="stripe"></div>
                        <ul>
                            <li>Pelatihan teknis komprehensif di sektor-sektor seperti manufaktur, pertanian, perikanan, dan konstruksi.</li>
                            <li>Pengalaman kerja di perusahaan Jepang dengan standar internasional.</li>
                            <li>Pengembangan keterampilan yang dapat diterapkan di Indonesia setelah masa pelatihan berakhir.</li>
                            <li>Kontrak kerja selama 3 hingga 5 tahun, dengan pendampingan penuh dari pihak pemerintah.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-prosedur">
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-6" data-aos="fade-up">
                        <h3>Apa itu Kaigoshi?</h3>
                        <div class="stripe"></div>
                        <p> <b>Kaigoshi</b> adalah Caregiver atau perawat yang bertanggung jawab dalam memberikan perawatan sehari-hari kepada lansia atau
                        penyandang disabilitas di fasilitas kesehatan, panti jompo, atau di rumah pasien. Tugas utama seorang Kaigoshi meliputi
                        membantu aktivitas harian seperti makan, mandi, berpakaian, dan mobilitas pasien.</p>
                    </div>
                    <div class="col-md-6" data-aos="fade-up">
                        <h3>Apa itu Kangoshi & Kaigofukushishi?</h3>
                        <div class="stripe"></div>
                        <p><b>Kangoshi</b> adalah istilah untuk perawat terdaftar (registered nurse) di Jepang yang memiliki kualifikasi medis dan lisensi
                        resmi untuk bekerja di rumah sakit, klinik, atau fasilitas kesehatan lainnya. Sedangkan <b>Kaigofukushishi</b> adalah care
                        worker bersertifikasi di Jepang yang telah melalui pelatihan khusus dan memiliki lisensi untuk memberikan perawatan
                        kepada lansia atau penyandang disabilitas. Berbeda dengan Kaigoshi, seorang Kaigofukushishi memiliki sertifikasi formal
                        dan kemampuan tambahan dalam hal pengetahuan tentang perawatan fisik dan psikologis.</p>
                    </div>
                </div>
                <p class="fw-bold py-5" data-aos="fade-up">
                    Daftar sekarang dan bergabunglah dengan komunitas kami untuk mendapatkan info lowongan kerja di Jepang!
                </p>
                <a href="{{ route('pendaftaran.index') }}" data-aos="fade-up">
                    <button class="mt-5">Daftar Sekarang</button>
                </a>
            </div>
        </div>
    </section>
@endsection
