<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Dashboard')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/toastr/toastr.min.css') }}">

    @stack('styles')
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="#" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        @includeIf('layouts.partials.navbar')

        <!-- Sidebar -->
        @if (auth()->user()->hasRole('superadmin'))
            @include('layouts.partials.sidebar-superadmin')
        @elseif (auth()->user()->hasRole('admin'))
            @include('layouts.partials.sidebar-admin')
        @elseif (auth()->user()->hasRole('anak'))
            @include('layouts.partials.sidebar-anak')
        @endif

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <!-- Header -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">@yield('header', 'Dashboard')</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                @yield('breadcrumb')
                            </ol>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Main Content -->
            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </section>
        </div>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Footer -->
        @includeIf('layouts.partials.footer')
    </div>
    <!-- ./wrapper -->
    <!-- Load jQuery (Wajib duluan) -->
    <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Load ChartJS (Hanya Sekali) -->
    <script src="{{ asset('adminlte/plugins/chart.js/Chart.min.js') }}"></script>

    <!-- Load Bootstrap -->
    <script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Load Plugin Tambahan -->
    <script src="{{ asset('adminlte/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>

    <!-- Load overlayScrollbars -->
    <script src="{{ asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>

    <!-- Load SweetAlert2 & Toastr -->
    <script src="{{ asset('adminlte/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/toastr/toastr.min.js') }}"></script>

    <!-- Load AdminLTE -->
    <script src="{{ asset('adminlte/dist/js/adminlte.js') }}"></script>


    <script>
        $(document).ready(function() {
            @if (session('login_success'))
                console.log("Session login_success ditemukan: {{ session('login_success') }}");
                toastr.success("{{ session('login_success') }}", "Login Berhasil!");
            @endif
        });
    </script>


    <script>
        $(document).ready(function() {
            // Menampilkan toast setelah berhasil menghapus data
            $('.toastsDefaultSuccess').click(function() {
                $(document).Toasts('create', {
                    class: 'bg-success',
                    title: 'Data Terhapus',
                    subtitle: 'Penghapusan data berhasil.',
                    body: 'Data yang Anda pilih telah berhasil dihapus.'
                });
            });

            // Menampilkan toast setelah berhasil menyimpan data
            $('.toastsDefaultInfo').click(function() {
                $(document).Toasts('create', {
                    class: 'bg-info',
                    title: 'Data Tersimpan',
                    subtitle: 'Penyimpanan data berhasil.',
                    body: 'Data yang Anda masukkan telah berhasil disimpan.'
                });
            });

            // Menampilkan toast berdasarkan session message setelah operasi (misalnya delete/save)
            @if (session('toast_success'))
                $(document).Toasts('create', {
                    class: 'bg-success',
                    title: 'Sukses',
                    subtitle: 'Operasi Berhasil',
                    body: "{{ session('toast_success') }}"
                });
            @elseif (session('toast_error'))
                $(document).Toasts('create', {
                    class: 'bg-danger',
                    title: 'Gagal',
                    subtitle: 'Operasi Gagal',
                    body: "{{ session('toast_error') }}"
                });
            @endif
        });
    </script>



    <!-- Custom Scripts -->


    @stack('scripts')


</body>

</html>
