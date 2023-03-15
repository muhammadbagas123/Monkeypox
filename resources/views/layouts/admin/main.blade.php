<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title') - {{ config('app.name') }}</title>

    <!-- Favicons -->
    <link href="https://lh3.googleusercontent.com/OMQBZuRznnRj9BIoqdtazlaAbX8KFEo1gPH98ei6QglUuwjab0k_7chCIkH8j4dpJ_W13g4eGDoe7aj1VCmRjRftXMG89-_pxVWbkbdZs2pehwBfIUNkYfZvDRrSQUgx4ioRtQnsgzvv2eOJj-Gcg9JeCx2qNiQnlkqwf1DhMu5gF3LytSFcj1XH71S-6ocKZUYFo5UYBpyVsnWQe7rDlIl7oH_yUYwGVHUPKinpodKnhgC4OS5vcPknUiA2tQBrS46EmIR-0RpNLcvos8y8OykpQaf86MkIDYbceEK_cD1f6IZw5N9GDiViaT2AZiGsWebxp_M9YCmsEstag2ttr9pkPqFnjJJBwYla8JkmXL9fYgDkIiP6EVcmqKA30ellVAYT4Nru_tJIlt14xSSqFOgoucWx4fnOrYGfvF9pTcT8ucZFIkAXxvo4fZPjyi_2FczOrGoU9I1IpwPtiFNhkI_ZPdwSAR39BJYpQmX-G6afamgzVnmnD6w167f-USmZufjq6vxQ6po0jSUe23kV14DZoARw6y5NhwcblBT6cPOqTdEUIZUMJwyqJ51KdFK224TSoF4Q5N6X1rBdGA_zgLf2okgL-00XO3wf1hhxOYX3SGpiRsiktMR1NKhfatlPlqKM51MikTLdRnMBmed8LI98DYWk57s4VrORM82igjh-FtPE9wC4S6ZYys6s0UW0VdMvFkkrRt4K78JdbyiQEz0Lg3b9ivCWdfIJuEcAzQWBk7a02B0zrTGei_PURcKTfjtHgHFNyerVLdbqmq9DAWHKF3UuU8l33tKAtQ1aKYYEb19cTO9fvTPnaZEXLmVIDoszBJo4XEICoLXAfLSrBtpehvP_G7qlNCaGeAqxD5Ion-l6XU4YSWNGxr17GV7anBFssvM_ZsIbQE1xhgk3WYgW2gqA3k3epTI7aA=w900-h600-no?authuser=0" rel="icon">
    <link href="https://lh3.googleusercontent.com/OMQBZuRznnRj9BIoqdtazlaAbX8KFEo1gPH98ei6QglUuwjab0k_7chCIkH8j4dpJ_W13g4eGDoe7aj1VCmRjRftXMG89-_pxVWbkbdZs2pehwBfIUNkYfZvDRrSQUgx4ioRtQnsgzvv2eOJj-Gcg9JeCx2qNiQnlkqwf1DhMu5gF3LytSFcj1XH71S-6ocKZUYFo5UYBpyVsnWQe7rDlIl7oH_yUYwGVHUPKinpodKnhgC4OS5vcPknUiA2tQBrS46EmIR-0RpNLcvos8y8OykpQaf86MkIDYbceEK_cD1f6IZw5N9GDiViaT2AZiGsWebxp_M9YCmsEstag2ttr9pkPqFnjJJBwYla8JkmXL9fYgDkIiP6EVcmqKA30ellVAYT4Nru_tJIlt14xSSqFOgoucWx4fnOrYGfvF9pTcT8ucZFIkAXxvo4fZPjyi_2FczOrGoU9I1IpwPtiFNhkI_ZPdwSAR39BJYpQmX-G6afamgzVnmnD6w167f-USmZufjq6vxQ6po0jSUe23kV14DZoARw6y5NhwcblBT6cPOqTdEUIZUMJwyqJ51KdFK224TSoF4Q5N6X1rBdGA_zgLf2okgL-00XO3wf1hhxOYX3SGpiRsiktMR1NKhfatlPlqKM51MikTLdRnMBmed8LI98DYWk57s4VrORM82igjh-FtPE9wC4S6ZYys6s0UW0VdMvFkkrRt4K78JdbyiQEz0Lg3b9ivCWdfIJuEcAzQWBk7a02B0zrTGei_PURcKTfjtHgHFNyerVLdbqmq9DAWHKF3UuU8l33tKAtQ1aKYYEb19cTO9fvTPnaZEXLmVIDoszBJo4XEICoLXAfLSrBtpehvP_G7qlNCaGeAqxD5Ion-l6XU4YSWNGxr17GV7anBFssvM_ZsIbQE1xhgk3WYgW2gqA3k3epTI7aA=w900-h600-no?authuser=0" rel="apple-touch-icon">


    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    @stack('css')

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/components.css') }}">

    <!-- Page Specific JS File -->
    @stack('style')

</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <!-- Navbar -->
            @include('layouts.admin.partials.navbar')
            <!-- /Navbar -->
            <div class="main-sidebar">
                <!-- Sidebar -->
                @include('layouts.admin.partials.sidebar')
                <!-- /Sidebar -->
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <!--Content-->
                @yield('content')
                <!--/Content-->
            </div>
            <!-- /Main Content -->
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2022 <div class="bullet"></div> Developer <a href="https://www.instagram.com/gasgas_1024/">Muhammad Bagas Pangestu</a>
                </div>
                <div class="footer-right">
                    {{ config('app.name') }}
                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/popper/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/moment/moment.min.js') }}"></script>


    <!-- JS Libraies -->
    @stack('js')

    <!-- Template JS File -->
    <script src="{{ asset('assets/admin/js/stisla.js') }}"></script>
    <script src="{{ asset('assets/admin/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/admin/js/custom.js') }}"></script>

    <!-- Page Specific JS File -->
    @stack('script')
    @include('layouts.admin.partials.flash')
</body>

</html>
