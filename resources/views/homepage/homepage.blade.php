@extends('layouts')

@section('content')
    <section>
        <div class="hero">
            <div class="hero-text">
                <h2 class="py-3 poppins-bold">Dapatkan informasi terbaru tentang Program Tokutei Ginou, G to G dan Magang di Jepang dan bergabung bersama kami di komunitas “Kerja di Negeri Sakura”</h2>
                <a href="{{ route('pendaftaran.index') }}">
                    <button class="mt-2">JOIN GROUP WHATSAPP</button>
                </a>
            </div>
        </div>
        <div id="menjadikan" data-aos="fade-up">
            <h2 class="d-flex justify-content-center mt-5">Ingin merasakan pengalaman seru bekerja di Jepang?</h2>
            <p>
                Mulai dari budaya kerja yang unik, teknologi canggih, hingga gaji yang menggiurkan, Jepang menjadi destinasi impian bagi
                banyak profesional.
            </p>
        </div>

        <div id="program-homepage" class="py-5">
            <div class="container">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-lg-6 col-md-12 mb-4 image" data-aos="fade-up">
                        <img src="{{ asset('assets/content/Osaka-street.jpg') }}" alt="Program Homepage"
                            class="rounded w-100">
                    </div>
                    <div class="col-lg-5 col-md-12 description" data-aos="fade-up">
                        <p class="fw-75">Disini kamu bisa mendapatkan informasi lengkap seputar program magang dan kerja di Negeri Sakura, mulai dari :</p>
                        <ul>
                            <li>informasi persyaratan kerja</li>
                            <li>jalur kerja di jepang</li>
                            <li>tips and trik lolos seleksi</li>
                            <li>gambaran kehidupan di jepang dan</li>
                            <li>Kisah inspiratif</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div id="mengapa">
            <div class="container">
                <div class="item" data-aos="fade-up">
                    <h1 class="poppins-bold h1">Ayo daftar dan bergabung bersama kami!</h1>
                    <p class="mt-2">
                        Dapatkan informasi terbaru seputar lowongan kerja dan tips sukses di Jepang, gabung dengan komunitas KarirdiJepang dan
                        mulailah langkah pertamamu.
                    </p>
                    <a href="{{ route('pendaftaran.index') }}">
                        <button class="mt-2">PENDAFTARAN</button>
                    </a>
                </div>
                <div class="item" data-aos="fade-up">
                    <img src="{{ asset('assets/content/Ayo-Gabung.jpg') }}" alt="" class="py-5">
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
                <div class="lokasi-content">
                    <div class="map" data-aos="fade-up">
                        <h1 class="poppins-bold mt-5">Lokasi</h1>
                        <div class="stripe"></div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1976.398414328526!2d110.26784932370182!3d-7.811319784568425!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7af9f8e7a31f57%3A0x4eac4ed2a3d48c3f!2sSEHATTEK!5e0!3m2!1sen!2sid!4v1729147123077!5m2!1sen!2sid"
                            width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade" class="mt-3">
                        </iframe>
                    </div>
                    <div class="form" data-aos="fade-up">
                        <h1>Hubungi Kami</h1>
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
