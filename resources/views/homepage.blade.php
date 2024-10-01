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

        <div id="program" class="py-5">
            <div class="container d-flex justify-content-between">
                <div class="image">
                    <img src="{{ asset('assets/content/program-homepage.jpg') }}" alt="Program Homepage"
                        class="rounded w-75">
                </div>
                <div class="description">
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

        <div id="mengapa">
            <div class="container">
                <div class="item">
                    <h1 class="poppins-bold h1 py-5">Mengapa Memilih LPK Mandiri Nusantara</h1>
                    <div class="stripe"></div>
                    <p class="poppins-regular">
                        LPK Mandiri Nusantara adalah lembaga pendidikan dan keterampilan yang berizin resmi dari departement tenaga kerja
                        Indonesia, dengan pengajar profesional dan kami akan membantu menyalurkan tenaga kerja ke institusi atau perusahaan yang
                        tepat untuk Anda seperti di Jepang.
                    </p>
                    <button class="mt-2">PENDAFTARAN</button>
                </div>
                <div class="item">
                    <img src="{{ asset('assets/content/mengapa-lpk-mandiri-nusantara-1.jpg') }}" alt="" class="py-5">
                </div>
            </div>
        </div>

        <div id="testimoni">
            <div class="card">
                <p>Selama saya di asrama, saya dididik untuk menjadi lebih mandiri, bertanggung jawab, dan memahami satu sama lain dengan
                sifat dan karakter yang berbeda-beda. Jauh dari orang tua bukanlah hal yang mudah, namun pada akhirnya, sedikit demi
                sedikit, saya belajar untuk tidak bergantung pada mereka dan bisa menyelesaikan masalah secara bersama-sama. Hal ini
                sangat luar biasa bagi saya.
                <br>
                Sensei yang mengajar di asrama sangat baik, sabar, dan mau membimbing kami. Namun, ada kalanya mereka menjadi tegas
                supaya kami bisa menjadi pribadi yang lebih baik lagi, baik secara fisik maupun mental. Kami juga harus disiapkan untuk
                bekerja di luar negeri, seperti di Jepang, karena orang-orang di sana sangat disiplin, menaati aturan, dan tidak
                membuang waktu karena bagi mereka waktu adalah uang.</p>
                <img src="{{ asset('assets/testimoni/vira-testimonial-80x80.jpg') }}" alt="">
                <h4 class="mt-5">virna</h4>
            </div>
        </div>

        <div id="partner">
            <div class="container d-flex justify-between">
                <div class="py-5 col">
                    <h1 class="poppins-bold mt-5">Partners</h1>
                    <div class="stripe"></div>
                </div>
                <div class="logos">
                    <div class="logos-slide">
                        <img src="{{ asset('assets/logo/Logo-BP2MI.png') }}" alt="BP2MI Logo">
                        <img src="{{ asset('assets/logo/Logo-KEMNAKER.png') }}" alt="KEMNAKER Logo">
                        <img src="{{ asset('assets/logo/Logo-JapanFoundation.png') }}" alt="Japan Foundation Logo">
                        <img src="{{ asset('assets/logo/logo-persemki-indonesia.png') }}" alt="Persemki Indonesia Logo">
                    </div>
                    <div class="logos-slide">
                        <img src="{{ asset('assets/logo/Logo-BP2MI.png') }}" alt="BP2MI Logo">
                        <img src="{{ asset('assets/logo/Logo-KEMNAKER.png') }}" alt="KEMNAKER Logo">
                        <img src="{{ asset('assets/logo/Logo-JapanFoundation.png') }}" alt="Japan Foundation Logo">
                        <img src="{{ asset('assets/logo/logo-persemki-indonesia.png') }}" alt="Persemki Indonesia Logo">
                    </div>
                </div>
            </div>
        </div>

        <div id="lokasi">
            <div class="container d-flex justify between">
                <div class="py-5 col maps">
                    <h1 class="poppins-bold mt-5">Lokasi</h1>
                    <div class="stripe"></div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d991.3540845940355!2d106.728885!3d-6.340087!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ef817cec4ea1%3A0x5042bee18d803365!2sJl.%20Griya%20Jkt%20Blok%20A3%20No.9%2C%20RT.07%2FRW.7%2C%20Pamulang%20Bar.%2C%20Kec.%20Pamulang%2C%20Kota%20Tangerang%20Selatan%2C%20Banten%2015417%2C%20Indonesia!5e0!3m2!1sen!2sus!4v1727751659771!5m2!1sen!2sus"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" class="mt-3"></iframe>
                </div>
                <div class="py-5 col email">
                    <h1 class="poppins-bold mt-5">Hubungi Kami</h1>
                    <div class="stripe"></div>
                    <form action="mailto:someone@example.com" method="post" enctype="text/plain" class="mt-3">
                        <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="string" class="form-control" name="name">
                        </div>
                        <div class="mb-3 d-flex justify-content-between">
                            <div class="flex-fill me-2">
                                <label class="form-label">Alamat Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                            </div>
                            <div class="flex-fill ms-2">
                                <label class="form-label">No Telephone / HP</label>
                                <input type="number" class="form-control" name="phone">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="height: 100%"></textarea>
                        </div>
                        <button type="submit" class="btn mt-4">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </section>
@endsection
