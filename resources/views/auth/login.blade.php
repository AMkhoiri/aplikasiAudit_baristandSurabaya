{{-- @extends('layouts.app')

@section('content') --}}



<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login Page</title>
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

 <style>

    .control-label{
        font-weight: bold;
        color: #676767;
        font-size: 13px;
    }
    
    .form-control{
        border: transparent;
    }

    .btn:hover {
        letter-spacing: 1px;
    }


    .login-form-body {
        box-shadow:
                0 2.8px 2.2px rgba(0, 0, 0, 0.034),
                0 6.7px 5.3px rgba(0, 0, 0, 0.048),
                0 12.5px 10px rgba(0, 0, 0, 0.06),
                0 11.3px 10.9px rgba(0, 0, 0, 0.072),
                0 23.8px 22.4px rgba(0, 0, 0, 0.086),
                0 40px 30px rgba(0, 0, 0, 0.12)
                ;
  border-radius: 5px;
  
}
  
body {
  background: #EEF2F7;
}


  </style>

</head>

<body>

<div class="login-area"  >
  <div class="container">
      <div class="login-box ptb--100" >
 
<form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                         <div class="login-form-head" style="padding-top: 30px !important ; background-color: #2c71da; padding-bottom: 15px !important; ">
                  <h4>Login</h4>
                  <p>Masukkan Akun Sesuai Akses Yang Anda Inginkan </p>
              </div>
              <div class="login-form-body">

                   <div class="form-gp has-feedback {{ $errors->has('email') ? ' has-error' : '' }}" style=" margin-right: 18px; margin-left: 18px; " >
                          <input id="email" type="text" class="form-control"  spellcheck="false"   name="email" value="{{ old('email') }}" placeholder="Username" required autofocus>

                          <i class="ti-user form-control-feedback" style="color: #2c71da;"></i>
                          @if ($errors->has('email'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                          @endif
                  </div>
                  <div class=" form-gp has-feedback {{ $errors->has('password') ? ' has-error' : '' }}"  style=" margin-right: 18px; margin-left: 18px; ">
                          <input id="password" type="password" class="form-control" name="password" placeholder="Password"   required >
                        <i class="ti-lock form-control-feedback" style="cursor: pointer; color: #2c71da;"  onclick="seePassword()"></i>
                          @if ($errors->has('password'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                  </div>

                   <div class="submit-btn-area" style="padding-top: 20px;">
                            <button type="submit" class="btn "  > 
                                Login &nbsp;&nbsp; <span class="fa fa-arrow-right" > </span>
                            </button>
                    </div>
                          <br>
                     </div>
                    </form>

      </div>
    </div>
  </div>
</body>





{{-- 

<div class="container ">

     <div class="panel panel-default" style=" border-radius: 20px; " >
        <div class="panel-heading"> <span class=" btn " > <a href="#" style=" text-decoration: none; border-radius: 20px;" > <span class="fa fa fa-bullhorn " style=" font-size:22px; margin-right: 5px; " >  </span>  <b> Mungkin Ini Penting!</b> </a></div>
            <div class=" panel-body " > 

                @forelse ($pengumuman as $p)
                   <li> <i style=" font-size: 10px; " > {{\Carbon\Carbon::parse ($p->updated_at)->format('d - M - Y')}} </i>  &emsp; {{$p->pengumuman}} </li>
                @empty
                    <p style="margin-left: 40px; " > Tidak Ada Pengumuman </p> 

                @endforelse

            </div>
    </div>


    <div class="row">

        <div class=" col-sm-4 " >  </div>

        <div class="col-sm-4">

                <div class=" pann"   style=" margin-top: 30px; margin-left: 10px; margin-right: 10px; " >
            <div class="panel panel-default " style=" border-radius: 0px ; " >
                  
                <div class="panel-heading" style="text-align: center; margin-top: 12px;font-size: 11px;  padding-bottom:12px;" >

                    <img   style=" max-width: 70px;  "  src=" {{ asset('audit/img/bisby.png')}}">
                    <br>Audit Internal

                </div>

                <div class="panel-body" style="" >

                    <p style=" text-align: center; " > Insert Your Account </p><br>
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                         <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}" style=" margin-right: 18px; margin-left: 18px; " >
                                <input id="email" type="text" class="form-control"   name="email" value="{{ old('email') }}" placeholder="Username" required autofocus>

                                <i class="fa fa-user form-control-feedback"></i>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class=" form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}"  style=" margin-right: 18px; margin-left: 18px; ">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required >
                              <i class="fa fa-lock form-control-feedback"></i>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div style=" text-align: center; margin-right: 18px; margin-left: 18px; " >  
                            <button  style="width: 100%; background-color: #007AFF  ; color: white" type="submit" class="btn btn-sm">
                                Log In
                            </button>
                        </div><br>
                         <div style=" font-size: 10px; margin-right: 18px; margin-left: 18px; " > *Masukkan Akun sesuai dengan akses yang anda inginkan!</div>
                    </form>
                </div>
            </div>
                   </div>
        </div>

         <div class=" col-md-4 " >  </div>

    </div>
</div>

 --}}



{{--  --}}





{{-- @endsection --}}



<script>

    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }


function seePassword() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

  </script>
