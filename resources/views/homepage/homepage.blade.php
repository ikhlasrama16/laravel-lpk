@extends('layouts')

@section('content')
    <section>
        <div class="hero">
            <div class="hero-text">
                <h2 class="py-3 poppins-bold">Menyiapkan Tenaga Kerja Handal</h2>
                <h2 class="poppins-bold">Siap Kerja 100%</h2>
                <div class="stripe"></div>
                <a href="{{ route('pendaftaran.index') }}">
                    <button class="mt-2">PENDAFTARAN</button>
                </a>
            </div>
            <div class="hero-image">
                <img src="{{ asset('assets/background/Hero-LPK1.png') }}" alt="Hero Image">
            </div>
        </div>
        <div id="menjadikan" data-aos="fade-up">
            <h2 class="poppins-bold d-flex justify-content-center mt-5">Menjadikan Tenaga Kerja<br> Terampil, Handal, Cekatan
            </h2>
            <p>
                Lembaga Pendidikan Keterampilan yang mengutamakan kualitas pendidikan dan menyiapkan tenaga kerja yang handal
                dan
                memberi jaminan penempatan kerja & karir untuk para lulusan ke negara Asia, Eropa dan Amerika, saat ini kami
                fokus ke
                negara Jepang.
            </p>
        </div>

        <div id="program-homepage" class="py-5">
            <div class="container">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-lg-6 col-md-12 mb-4 image" data-aos="fade-up">
                        <img src="{{ asset('assets/content/program-homepage.jpg') }}" alt="Program Homepage"
                            class="rounded w-100">
                    </div>
                    <div class="col-lg-5 col-md-12 description" data-aos="fade-up">
                        <h2 class="poppins-bold">Apa saja Progam Magang di<br> Karirdijepang</h2>
                        <div class="stripe"></div>
                        <p>Tokutei Ginou 特定技能 (kontrak dan visa kerja 5 tahun)</p>
                        <div class="hover-container">
                            <div class="hover-content">
                                <img src="{{ asset('assets/logo/pertanian-icon.png') }}" alt="Pertanian Icon"
                                    class="hover-image mb-3">
                                <h4 class="ms-3 poppins-bold">Bagian Keperawatan Lansia</h4>
                            </div>
                            <p class="hover-text">Di program ini Anda akan mendapatkan kontrak kerja dan visa kerja selama 5
                                tahun untuk bagian Keperawatan Lansia.</p>
                        </div>
                        <div class="hover-container">
                            <div class="hover-content">
                                <img src="{{ asset('assets/logo/perawat-icon.png') }}" alt="Perawat Icon"
                                    class="hover-image mb-3">
                                <h4 class="ms-3 poppins-bold">Bagian Pertanian</h4>
                            </div>
                            <p class="hover-text">Di program ini Anda akan mendapatkan kontrak kerja dan visa kerja selama 5
                                tahun untuk bagian pertanian.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="mengapa">
            <div class="container">
                <div class="item" data-aos="fade-up">
                    <h1 class="poppins-bold h1 py-5">Mengapa Memilih LPK Mandiri Nusantara</h1>
                    <div class="stripe"></div>
                    <p class="poppins-regular">
                        LPK Mandiri Nusantara adalah lembaga pendidikan dan keterampilan yang berizin resmi dari departement tenaga kerja
                        Indonesia, dengan pengajar profesional dan kami akan membantu menyalurkan tenaga kerja ke institusi atau perusahaan yang
                        tepat untuk Anda seperti di Jepang.
                    </p>
                    <a href="{{ route('pendaftaran.index') }}">
                        <button class="mt-2">PENDAFTARAN</button>
                    </a>
                </div>
                <div class="item" data-aos="fade-up">
                    <img src="{{ asset('assets/content/mengapa-lpk-mandiri-nusantara-1.jpg') }}" alt="" class="py-5">
                </div>
            </div>
        </div>

        <div id="testimoni">
            <div class="owl-carousel owl-theme" data-aos="fade-up">
                @foreach ($testimonis as $key => $testimoni)
                <div class="card">
                        <p>“ {{ $testimoni->pesan }} ”</p>
                        @if($testimoni->gambar)
                        <img src="{{ asset('storage/' . $testimoni->gambar) }}" alt="{{ $testimoni->name }}" class="rounded-circle" width="80">
                        @endif
                        <h5 class="mt-3">{{ $testimoni->name }}</h5>
                </div>
                @endforeach
            </div>
        </div>

        <div id="partner">
            <div class="container d-flex justify-content-between">
                <div class="py-5 col">
                    <h1 class="poppins-bold mt-5">Partners</h1>
                    <div class="stripe"></div>
                </div>
                <div class="logos">
                    <div class="logos-slide">
                        <img src="{{ asset('assets/logo/Logo-BP2MI.png') }}" alt="BP2MI Logo">
                        <img src="{{ asset('assets/logo/Logo-KEMNAKER.png') }}" alt="KEMNAKER Logo">
                        <img src="{{ asset('assets/logo/Logo-JapanFoundation.png') }}" alt="Japan Foundation Logo">
                    </div>
                    <div class="logos-slide">
                        <img src="{{ asset('assets/logo/Logo-BP2MI.png') }}" alt="BP2MI Logo">
                        <img src="{{ asset('assets/logo/Logo-KEMNAKER.png') }}" alt="KEMNAKER Logo">
                        <img src="{{ asset('assets/logo/Logo-JapanFoundation.png') }}" alt="Japan Foundation Logo">
                    </div>
                </div>
            </div>
        </div>

        <section id="lokasi">
            <div class="container">
                <div class="row py-5">
                    <div class="col-lg-6 col-md-12 mb-4" data-aos="fade-up">
                        <h1 class="poppins-bold mt-5">Lokasi</h1>
                        <div class="stripe"></div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1976.398414328526!2d110.26784932370182!3d-7.811319784568425!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7af9f8e7a31f57%3A0x4eac4ed2a3d48c3f!2sSEHATTEK!5e0!3m2!1sen!2sid!4v1729147123077!5m2!1sen!2sid"
                            width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade" class="mt-3">
                        </iframe>
                    </div>
                    <div class="col-lg-6 col-md-12" data-aos="fade-up">
                        <h1 class="poppins-bold mt-5">Hubungi Kami</h1>
                        <div class="stripe"></div>
                        <div class="form-email">
                            <form action="mailto:info@karirdijepang.id" method="post" enctype="text/plain" class="mt-3">
                                <div class="mb-3">
                                    <label class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Alamat Email</label>
                                    <input type="email" class="form-control" name="email">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">No Telephone / HP</label>
                                    <input type="number" class="form-control" name="phone">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Pesan</label>
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                                <button type="submit" class="mt-4">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </section>
@endsection
