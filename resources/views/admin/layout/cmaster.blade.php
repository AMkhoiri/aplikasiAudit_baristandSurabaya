
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

 
         @yield('css')
  
  <style>
      
a{
    text-decoration: none;
    color: #676666;
}

a:hover{
    text-decoration: none;
}
 
  </style>
   
</head>

<body>

    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
       
    @include('admin/layout/bsidebar')

        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li id="full-view"><i class="ti-fullscreen"></i></li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                            <li class="settings-btn">
                                <i class="ti-user"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->
                @yield('navigasi')
            <div class="main-content-inner">
                <div class="row">
                   @yield('isi')
                </div>
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area" >
               {{--  <p  >Created with <span >❤</span> by ahmad.m.khoiri@gmail.com</p> --}}
                <p style="font-family: 'Kumbh Sans', sans-serif;">Made with <span style="color: #ff3377" >❤</span> by  <a href="mailto:ahmad.m.khoiri@gmail.com">ahmad.m.khoiri@gmail.com</a> </p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->

    <!-- offset area start -->



      <div class="offset-area">
        <div class="offset-close"><i class="ti-close"></i></div>
        <ul class="nav offset-menu-tab">
            
            <li><a data-toggle="tab" href="#settings">User Account</a></li>
        </ul>
        <div class="offset-content tab-content">
 
            <div id="settings" class="tab-pane fade in show active">
                <div class="offset-settings">
                    <div class="settings-list">
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>{{Auth::user()->username}}</h5>
                                <div class="s-swtich">
                                      <a href="{{ url('/logout') }}"
                                                            onclick="event.preventDefault();
                                                           document.getElementById('logout-form').submit();" id="links" class="nav-item nav-link"><span class="fa fa-sign-out" ></span> Logout </a>
                                      <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                      </form> 
                                      
                                </div>
                            </div>
                            <p></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
   
   

    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="{{asset('audit/admin/assets/js/vendor/jquery-2.2.4.min.js')}}"></script>

    <script src="{{asset('audit/admin/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('audit/admin/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('audit/admin/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('audit/admin/assets/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('audit/admin/assets/js/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('audit/admin/assets/js/jquery.slicknav.min.js')}}"></script>


    <!-- others plugins -->
    <script src="{{asset('audit/admin/assets/js/plugins.js')}}"></script>
    <script src="{{asset('audit/admin/assets/js/scripts.js')}}"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @include('sweet::alert')

    @yield('js')
</body>

</html>

