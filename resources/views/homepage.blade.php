<!DOCTYPE html>
<html>

<head>
    <title>Homepage</title>
    <link rel="shortcut icon" href="{{ asset(" assets/logo/favicon.ico") }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light poppins-bold py-3">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/logo/Logo-Mandiri-Nusantara.png') }}" class="img-fluid" alt="Brand Logo"
                style="max-height: 60px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home <span class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Program</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kontak</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown link
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li>
                            <a class="dropdown-item" href="#">
                                <span class="x-menu-link-text">
                                    <img class="wpml-ls-flag"
                                        src="https://lpkmandirinusantara.com/wp-content/plugins/sitepress-multilingual-cms/res/flags/id.png"
                                        alt="">
                                    <span class="wpml-ls-native" lang="id">Indonesia</span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <span class="x-menu-link-text">
                                    <img class="wpml-ls-flag"
                                        src="https://lpkmandirinusantara.com/wp-content/plugins/sitepress-multilingual-cms/res/flags/ja.png"
                                        alt="">
                                    <span class="wpml-ls-native" lang="ja">日本語</span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <span class="x-menu-link-text">
                                    <img class="wpml-ls-flag"
                                        src="https://lpkmandirinusantara.com/wp-content/plugins/sitepress-multilingual-cms/res/flags/en.png"
                                        alt="">
                                    <span class="wpml-ls-native" lang="en">English</span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="g5core-header-customize-inner">
            <div class="g5core-header-customize-item g5core-hc-custom-html">
                <ul class="custom-header-contact pdr-35">
                    <li><i class="fas fa-phone fa-flip-horizontal poppins-regular"></i><span>Hubungi: +6285692592551
                        </span></li>
                </ul>
            </div>
        </div>
        </div>
        <div data-off-canvas-target="#g5core_menu_mobile" class="menu-mobile-toggle">
            <div class="toggle-icon"><span></span></div>
        </div>
        </div>
    </nav>

    <section id="hero">
        <div class="container">
            <h1 class="poppins-medium">coba coba</h1>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
