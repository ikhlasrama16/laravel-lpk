<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-light bg-light">
        <a
          href="#"
          class="navbar-brand mb-0 h1">
            <img
              src="{{ asset('assets/logo/Logo-Mandiri-Nusantara.png') }}"
              alt=""
              class="d-line-block align-top"
              width="30" height="30" />
            Navbar
        </a>
        <div
         class="collapse navbar-collapse"
         id="navbarNav">
         <ul class="navbar-nav">
            <li class="nav-item active">
                <a href="#" class="nav-link">
                    Home
                </a>
            </li>
            <li class="nav-item active">
                <a href="#" class="nav-link">
                    Tentang kami
                </a>
            </li>
            <li class="nav-item active">
                <a href="#" class="nav-link">
                    Program
                </a>
            </li>
            <li class="nav-item active">
                <a href="#" class="nav-link">
                    Gallery
                </a>
            </li>
            <li class="nav-item active">
                <a href="#" class="nav-link">
                    Blog
                </a>
            </li>
            <li class="nav-item active">
                <a href="#" class="nav-link">
                    Kontak
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
         </ul>
        </div>

    </nav>

    <h1>Hello, world!</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
