<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('assets/logo/favicon.ico') }}">
    <title>Karirdijepang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    {{-- magnific --}}
    <link rel="stylesheet" href="{{ asset('assets/css/magnific.css') }}">
    {{-- aos --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('OwlCarousel2/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('OwlCarousel2/dist/assets/owl.theme.default.min.css') }}">
</head>

<body>
    {{-- Navbar --}}
    <nav id="navbar" class="navbar navbar-expand-lg navbar-light py-auto fixed-top">
        <div class="container col-xxl-10">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('assets/logo/KDJ Logo.png') }}" alt="" height="80">
            </a>
            <button class="navbar-toggler toggle-icon collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto ms-auto mb-2 mb-lg-0 fw-bold">
                    <li class="nav-item">
                        <a class="nav-link fw-bold fs-5 ms-3 {{ Request::routeIs('homepage.index') ? 'highlight' : '' }}"
                            href="{{ route('homepage.index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold fs-5 ms-3 {{ Request::routeIs('tentang') ? 'highlight' : '' }}"
                            href="{{ route('tentang') }}">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold fs-5 ms-3 {{ Request::routeIs('program') ? 'highlight' : '' }}"
                            href="{{ route('program') }}">Info Karir</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold fs-5 ms-3 {{ Request::routeIs('gallery') ? 'highlight' : '' }}"
                            href="{{ route('gallery') }}">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold fs-5 ms-3 {{ Request::routeIs('blog') ? 'highlight' : '' }}"
                            href="{{ route('blog') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold fs-5 ms-3 {{ Request::routeIs('kontak') ? 'highlight' : '' }}"
                            href="{{ route('kontak') }}">Kontak</a>
                    </li>
                    {{-- <li class="nav-item dropdown">
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
                    </li> --}}
                </ul>
                <div class="g5core-header-customize-inner py-3 ms-auto">
                    <div class="g5core-header-customize-item g5core-hc-custom-html">
                        <ul class="custom-header-contact pdr-35" style="list-style-type: none; padding-left: 0;">
                            <li>
                                <a href="{{ route('pendaftaran.index') }}" data-aos="fade-up">
                                    <button class="mt-2">Daftar Sekarang</button>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

   @yield('content')

   <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col logo text-center">
                    <img src="{{ asset('assets/logo/KDJ Logo.png') }}" alt="">
                </div>
                <div class="col address text-start">
                    <h5 class="poppins-bold">Address</h5>
                    <p>Jl. Wates Km.11, Bandut Lor, Argorejo, Kec. Sedayu, Kabupaten Bantul, Daerah Istimewa Yogyakarta
                        55752</p>
                    <div class="kontak py-3">
                        <ul>
                            <li><i class="fa-solid fa-phone"></i> +62 811-2805-6666</li>
                            <li><i class="fa-brands fa-whatsapp"></i> +62 811-2805-6666</li>
                            <li><i class="fa-solid fa-envelope"></i> info@karirdijepang.id</li>
                        </ul>
                    </div>
                </div>
                <div class="col link text-start">
                    <h5 class="poppins-bold">Link</h5>
                    <ul>
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
    </section>

   <!-- Watermark Section -->
   <div id="watermark" class="text-center py-3">
    <p>© karirdijepang All rights reserved. Designed and developed by
        <a href="https://sehattek.id/" target="_blank" style="color: #707070;">Sehattek</a>
    </p>
   </div>

   <!-- Tambahkan ini di HTML, tepat sebelum penutup tag </body> -->
   <a href="#" id="back-to-top" title="Back to top" style="display: none;">&#8679;</a>

   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
   <script src="{{ asset('assets/script/magnific.js') }}"></script>
   <script src="{{ asset('OwlCarousel2/dist/owl.carousel.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    @if(session('success'))
    <script>
        Swal.fire({
            title: 'Success!',
            text: '{{ session('success') }}',
            icon: 'success',
            confirmButtonText: 'OK'
        });
    </script>
    @endif

    @if($errors->any())
    <script>
        let errorMessages = '';
        @foreach($errors->all() as $error)
            errorMessages += '{{ $error }}\n';
        @endforeach

        Swal.fire({
            title: 'Error!',
            text: errorMessages,
            icon: 'error',
            confirmButtonText: 'OK'
        });
    </script>
    @endif


    <script>
        // back to top
        $(document).ready(function() {
            // Saat user scroll ke bawah lebih dari 100px, tampilkan tombol
            $(window).scroll(function() {
                if ($(this).scrollTop() > 100) {
                    $('#back-to-top').fadeIn();
                } else {
                    $('#back-to-top').fadeOut();
                }
            });

            // Saat tombol diklik, scroll kembali ke atas
            $('#back-to-top').click(function(e) {
                e.preventDefault();
                // Scroll langsung ke atas tanpa animasi
                $('html, body').scrollTop(0);
                return false;
            });

            $(".navbar-toggler").click(function(){
                $(this).toggleClass("collapsed");
            });
        });
        // scroll
        let lastScrollTop = 0;

        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            const currentScroll = window.scrollY;

            if (currentScroll > lastScrollTop && currentScroll > 50) {
                // Scrolling down, hide navbar and set background to transparent
                navbar.classList.add('hidden');
                navbar.style.backgroundColor = "transparent";
            } else if (currentScroll < lastScrollTop) {
                // Scrolling up, show navbar and set background to white
                navbar.classList.remove('hidden');
                navbar.style.backgroundColor = "#ffffff";
            }

            // Smoothly transition to transparent when reaching the top
            if (currentScroll === 0) {
                setTimeout(() => {
                    navbar.style.backgroundColor = "transparent";
                }, 100); // Add a short delay for smoothness
            }

            lastScrollTop = currentScroll;
        });




        // owlcarousel
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                items: 1, // Number of items to display at a time
                loop: true, // Loop through items
                margin: 10, // Margin between items
                nav: true, // Show navigation (next/prev arrows)
                dots: true, // Show dots
                autoplay: true, // Automatically play the slides
                autoplayTimeout: 3000, // 3 seconds per slide
                autoplayHoverPause: true, // Pause on hover
            });
        });

        // magnific-gallery
        $('.gallery').each(function() { // the containers for all your galleries
            $(this).magnificPopup({
                delegate: 'a', // the selector for gallery item
                type: 'image',
                gallery: {
                    enabled:true
                }
            });
        });

        // aos
        AOS.init();

        document.querySelector('.navbar-toggler').addEventListener('click', function () {
            this.classList.toggle('collapsed');
        });

    </script>
</body>

</html>
