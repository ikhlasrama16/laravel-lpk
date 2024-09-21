<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('assets/logo/favicon.ico') }}">
    <title>LPK Mandiri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark shadow py-3 fixed-top">
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
                        <a class="nav-link active fw-bold fs-5 ms-3" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fw-bold fs-5 ms-3" aria-current="page" href="#">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fw-bold fs-5 ms-3" aria-current="page" href="#">Program</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fw-bold fs-5 ms-3" aria-current="page" href="#">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fw-bold fs-5 ms-3" aria-current="page" href="{{ route('blog') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fw-bold fs-5 ms-3" aria-current="page" href="#">Kontak</a>
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
                                <i class="fas fa-phone fa-flip-horizontal poppins-regular"></i>
                                <span>Hubungi: +6285692592551</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </nav>

   @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
