@extends('layouts')

@section('content')
    <section>
        <div class="hero">
            <div class="hero-text">
                <h2 class="py-3 poppins-bold">Menyiapkan Tenaga Kerja Handal</h2>
                <h2 class="poppins-bold">Siap Kerja 100%</h2>
                <div class="stripe"></div>
                <button class="mt-2">PENDAFTARAN</button>
            </div>
            <div class="hero-image">
                <img src="{{ asset('assets/background/Hero-LPK1.png') }}" alt="Hero Image">
            </div>
        </div>
        <div id="menjadikan">
            <H2 class="poppins-bold d-flex justify-content-center mt-5">Menjadikan Tenaga Kerja<br> Terampil, Handal, Cekatan</H2>
            <p>
                Lembaga Pendidikan Keterampilan yang mengutamakan kualitas pendidikan dan menyiapkan tenaga kerja yang handal dan
                memberi jaminan penempatan kerja & karir untuk para lulusan ke negara Asia , Eropa dan Amerika, saat ini kami fokus ke
                negara Jepang
            </p>
        </div>

        <div id="program" class="container py-5 col-xxl-10">
            <div class="row center-content">
                <div class="col">
                    <img src="{{ asset('assets/content/program-homepage.jpg') }}" alt="Program Homepage"
                        class="rounded w-75">
                </div>
                <div class="col">
                    <h2 class="poppins-bold">Apa saja Progam Magang di<br> LPK Mandiri Nusantara?</h2>
                    <div class="stripe"></div>
                    <p>Tokutei Ginou 特定技能 (kontrak dan visa kerja 5 tahun)</p>
                    <div class="hover-container">
                        <div class="hover-content">
                            <img src="{{ asset('assets/logo/pertanian-icon.png') }}" alt="Pertanian Icon" class="hover-image mb-3">
                            <h4 class="ms-3 poppins-bold">Bagian Keperawatan Lansia</h4>
                        </div>
                        <p class="hover-text">Di program ini Anda akan mendapatkan kontrak kerja dan visa kerja selama 5 tahun untuk bagian Keperawatan Lansia.</p>
                    </div>
                    <div class="hover-container">
                        <div class="hover-content">
                            <img src="{{ asset('assets/logo/perawat-icon.png') }}" alt="Perawat Icon" class="hover-image mb-3">
                            <h4 class="ms-3 poppins-bold">Bagian Pertanian</h4>
                        </div>
                        <p class="hover-text">Di program ini Anda akan mendapatkan kontrak kerja dan visa kerja selama 5 tahun untuk bagian pertanian.</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
