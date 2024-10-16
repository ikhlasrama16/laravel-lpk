<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>AdminLTE 3 | Dashboard</title>
  <link rel="shortcut icon" href="{{ asset("assets/logo/favicon.ico") }}">
  @include('includes.admin.style')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('adminLte/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

    </ul>

    <!-- Right navbar links -->
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4 d-flex flex-column" style="height: 100vh;">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
        <img src="{{ asset('assets/logo/Logo-Mandiri-Nusantara.png') }}" alt="LPK Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">LPK Mandiri Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar flex-grow-1">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.user') }}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            User
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.blog') }}" class="nav-link">
                        <i class="nav-icon fas fa-blog"></i>
                        <p>
                            Blog
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.pendaftaran') }}" class="nav-link">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            Pendaftaran
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.testimoni') }}" class="nav-link">
                        <i class="nav-icon fas fa-comment"></i>
                        <p>
                            Testimoni
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.gallery') }}" class="nav-link">
                        <i class="nav-icon fas fa-image"></i>
                        <p>
                            Galeri
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->

    <!-- Logout item at the bottom -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column mt-auto" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('logout') }}" class="nav-link btn-danger">
                    <i class="nav-icon fas fa-user text-white"></i>
                    <p class="text-white">
                        Logout
                    </p>
                </a>
            </li>
        </ul>
    </nav>
</aside>


  @yield('content')
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


@include('includes.admin.script')
</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    (function () {
        'use strict';

        const preventDefaults = (event) => {
            event.preventDefault();
            event.stopPropagation();
        };

        const highlight = (event) => event.target.classList.add('highlight');
        const unhighlight = (event) => event.target.classList.remove('highlight');

        const getInputAndGalleryRefs = (element) => {
            const zone = element.closest('.upload_dropZone') || false;
            const gallery = zone.querySelector('.upload_gallery') || false;
            const input = zone.querySelector('input[type="file"]') || false;
            return { input, gallery };
        };

        const handleDrop = (event) => {
            const dataRefs = getInputAndGalleryRefs(event.target);
            dataRefs.files = event.dataTransfer.files;
            handleFiles(dataRefs);
        };

        const eventHandlers = (zone) => {
            const dataRefs = getInputAndGalleryRefs(zone);
            if (!dataRefs.input) return;

            ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(event => {
                zone.addEventListener(event, preventDefaults, false);
                document.body.addEventListener(event, preventDefaults, false);
            });

            ['dragenter', 'dragover'].forEach(event => zone.addEventListener(event, highlight, false));
            ['dragleave', 'drop'].forEach(event => zone.addEventListener(event, unhighlight, false));

            zone.addEventListener('drop', handleDrop, false);
            dataRefs.input.addEventListener('change', (event) => {
                dataRefs.files = event.target.files;
                handleFiles(dataRefs);
            }, false);
        };

        const dropZones = document.querySelectorAll('.upload_dropZone');
        dropZones.forEach(zone => eventHandlers(zone));

        const isImageFile = (file) => ['image/jpeg', 'image/png', 'image/svg+xml'].includes(file.type);

        const previewFiles = (dataRefs) => {
            if (!dataRefs.gallery) return;
            for (const file of dataRefs.files) {
                let reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onloadend = () => {
                    let img = document.createElement('img');
                    img.className = 'upload_img mt-2';
                    img.alt = file.name;
                    img.src = reader.result;
                    dataRefs.gallery.appendChild(img);
                };
            }
        };

        const handleFiles = (dataRefs) => {
            let files = [...dataRefs.files].filter(file => isImageFile(file));
            if (!files.length) return;
            dataRefs.files = files;
            previewFiles(dataRefs);
        };
    })();
});



$(document).ready(function() {
    $('#description').summernote({
        height: 300,
        callbacks: {
            onImageUpload: function(files) {
                uploadImage(files[0]);
            }
        }
    });


    function uploadImage(file) {
        var data = new FormData();
        data.append("image", file);
        $.ajax({
            url: '{{ route('admin.upload') }}',
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Pastikan CSRF token disertakan
                },
            data: data,
            processData: false,
            contentType: false,
            success: function(response) {
                $('#description').summernote('insertImage', response.url);
            },
            error: function(data) {
                console.log(data);
            }
        });
    }
});

$('.custom-file-input').on('change', function() {
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
});
// sweet alert
@if(session()->has('success'))
    Swal.fire({
        title: 'Success',
        text: '{{ session('success') }}',
        icon: 'success',
        confirmButtonText: 'OK'
    });
@elseif(session()->has('error'))
    Swal.fire({
        title: 'Error',
        text: '{{ session('error') }}',
        icon: 'error',
        confirmButtonText: 'OK'
    });
@endif

</script>
</html>
