<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('assets/logo/favicon.ico') }}">
    <title>LPK Mandiri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</head>

<body>
    {{-- Navbar --}}
    <nav id="navbar" class="navbar navbar-expand-lg navbar-light py-auto fixed-top">
        <div class="container col-xxl-10">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('assets/logo/Logo-Mandiri-Nusantara.png') }}" alt="" height="80">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active fw-bold fs-5 ms-3" aria-current="page" href="{{ route('homepage.index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fw-bold fs-5 ms-3" aria-current="page" href="{{ route('tentang') }}">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fw-bold fs-5 ms-3" aria-current="page" href="{{ route('program') }}">Program</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fw-bold fs-5 ms-3" aria-current="page" href="{{ route('gallery') }}">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fw-bold fs-5 ms-3" aria-current="page" href="{{ route('blog') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fw-bold fs-5 ms-3" aria-current="page" href="{{ route('kontak') }}">Kontak</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fw-bold fs-5" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-flag"></i> Bahasa
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item fw-bold fs-5" href="#">
                                    <i class="fas fa-flag"></i> Indonesia
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item fw-bold fs-5" href="#">
                                    <i class="fas fa-flag-usa"></i> English
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="g5core-header-customize-inner py-3 ms-auto">
                    <div class="g5core-header-customize-item g5core-hc-custom-html">
                        <ul class="custom-header-contact pdr-35" style="list-style-type: none; padding-left: 0;">
                            <li>
                                <i class="fa-solid fa-phone"></i>
                                <span>Hubungi: +6285692592551</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </nav>

   @yield('content')


   <div id="footer">
    <div class="container">
        <div class="row">
            <div class="col logo">
                <img src="{{ asset('assets/logo/Logo-Mandiri-Nusantara.png') }}" alt="">
            </div>
            <div class="col address">
                <h5 class="poppins-bold">Address</h5>
                <p>Cabang Kota Blitar : <br>
                Jl. Ciliwung No.109, Bendo, Kec. Kepanjenkidul, Kota Blitar, Jawa Timur 66116<br>
                <a href="https://maps.app.goo.gl/Txjx57pWqQXeT52h8" style="font-style: none" target="blank">https://maps.app.goo.gl/Txjx57pWqQXeT52h8</a></p>
                <p>
                    Cabang Jakarta Utara : <br>
                    Jl. Gadang No.7, RT.10/RW.3, Sungai Bambu, Kec. Tj. Priok, Jkt Utara, Daerah Khusus Ibukota Jakarta 14330 <br>
                    <a href="https://maps.app.goo.gl/6fNCwiYPeJfmpQay8" style="font-style: normal" target="blank">https://maps.app.goo.gl/6fNCwiYPeJfmpQay8</a>
                </p>
                <p>
                    Kantor Pusat : <br>
                    Perumahan Griya Jakarta.
                    Jalan Menteng Raya, blok C2 no 6B RT 07 RW 07. Kelurahan Pamulang Barat. Kecamatan Tangerang Selatan.<br>
                    <a href="https://maps.app.goo.gl/6REmynMJthQMMQiz7" style="font-style: normal" target="blank">https://maps.app.goo.gl/6REmynMJthQMMQiz7</a>
                </p>
                <div class="kontak py-3">
                    <ul>
                        <li><i class="fa-solid fa-phone"></i> +62 813-8989-1706</li>
                        <li><i class="fa-brands fa-whatsapp"></i> +62 813-8989-1706</li>
                        <li><i class="fa-solid fa-envelope"></i> info@lpkmandirinusantara.com</li>
                    </ul>
                </div>
            </div>

            <div class="col- link">
                <h5 class="poppins-bold">Link</h5>
                <ul class="">
                    <li><a href="">Registration</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">Privacy Policy</a></li>
                </ul>
                <div class="mx-auto">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-twitter"></i>
                </div>
            </div>
        </div>
    </div>
   </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>


    <script>
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) { // Ubah nilai 50 sesuai kebutuhan
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

    </script>
</body>

</html>
