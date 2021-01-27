<!doctype html>
<html class="no-js" lang="en">

<head>
 <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Administrator Audit Internal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('audit/img/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('audit/admin/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('audit/admin/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('audit/admin/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('audit/admin/assets/css/metisMenu.css')}}">
    <link rel="stylesheet" href="{{asset('audit/admin/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('audit/admin/assets/css/slicknav.min.css')}}">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="{{asset('audit/admin/assets/css/typography.css')}}">
    <link rel="stylesheet" href="{{asset('audit/admin/assets/css/default-css.css')}}">
    <link rel="stylesheet" href="{{asset('audit/admin/assets/css/styles.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('audit/admin/assets/css/responsive.css')}}"> --}}
    <!-- modernizr css -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400&display=swap" rel="stylesheet">


    <script src="{{asset('audit/admin/assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>

 <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@600&display=swap" rel="stylesheet">
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
{{--     <div id="preloader">
        <div class="loader"></div>
    </div> --}}
    <!-- preloader area end -->
    <!-- error area start -->
    <div class="error-area ptb--100 text-center">
        <div class="container">
            <div class="error-content" style="font-family: 'Overpass', sans-serif;">
                <img src="{{ asset('audit/img/warning-sign.png')}}" style="width: 150px; margin-bottom: 15px;" alt="">
                <p style=" font-size: 14px;   color: black;">Jika anda menjalankan perintah ini, periode audit akan otomatis diakhiri. <br> dan data yang telah diarsipkan tidak dapat dikembalikan lagi.</p>
                <p style="font-size: 20px;">Tetap Jalankan?</p>

                <a  style="background-color: grey; width: 120px;" href="{{ route('pengaturanaudit') }}">Batal</a> <a onclick="return confirm('Anda yakin untuk Menjalankan Perintah Ini?')" style=" width: 120px;" href="{{ route('arsipkandata') }}">Jalankan </a>
            </div>
        </div>
    </div>
    <!-- error area end -->

    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>