
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Change Password</title>
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
    .form-gp{
      margin-right: 18px; margin-left: 18px;
    }

    .btn:hover {
        letter-spacing: 1px;
    }


    .login-form-body {
  box-shadow:
  0 2.8px 2.2px rgba(0, 0, 0, 0.034),
  0 6.7px 5.3px rgba(0, 0, 0, 0.048),
  0 12.5px 10px rgba(0, 0, 0, 0.06),
  0 22.3px 17.9px rgba(0, 0, 0, 0.072),
  0 41.8px 33.4px rgba(0, 0, 0, 0.086),
  0 100px 80px rgba(0, 0, 0, 0.12)
  ;
  /*border-radius: 5px;*/
  
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
 
<form class="form-horizontal" method="POST" action="{{ route('changepass') }}">
                {{ csrf_field() }}
    <div class="login-form-head" style="padding-top: 30px !important ; background-color: #2c71da; padding-bottom: 15px !important; ">
          <h4> <span class="fa fa-key" ></span> Change Password</h4>
          <p>Change password for "{{Auth::user()->username}}"</p>
      </div>
      <div class="login-form-body">

           <div class="form-gp has-feedback " style="  " >
                  <input id="email" type="password" class="form-control"   name="oldpass" value="{{ old('email') }}" placeholder="Old Password" required autofocus>

                  <i class="ti-key form-control-feedback"></i>
                </div>
                 
          <div class=" form-gp has-feedback "  style="">
                  <input id="password" type="password" class="form-control" name="password" placeholder="New Password"   required >
                <i class="ti-lock form-control-feedback" style="cursor: pointer;"  onclick="seePassword()"></i>

          </div>
           <div class=" form-gp has-feedback "  style="">
                  <input id="confirm-password" type="password" class="form-control" name="password-confirm" placeholder="Confirm New Password" oninput="check(this)"   required >
                <i class="ti-lock form-control-feedback" style="cursor: pointer;"  onclick="seeConfirmPassword()"></i>

          </div>

            <script language='javascript' type='text/javascript'>
                function check(input) 
                {
                    if (input.value != document.getElementById('password').value) 
                    {  input.setCustomValidity('Password yang anda masukkan tidak sama!'); }

                    else if (input.value.length <6) 
                    { input.setCustomValidity('Password minimal harus 6 karakter');  } 

                    else 
                    {
                        // input is valid -- reset the error message
                        input.setCustomValidity('');
                    }
                }
             </script>


           <div class="submit-btn-area">
                    <button type="submit" class="btn btn-block "  > 
                        Save New Password  <span class="ti ti-check" > </span>
                    </button>
            </div>
            <br>

       </div>
 </form>

      </div>
    </div>
  </div>

</body>
 <script src="{{asset('audit/admin/assets/js/vendor/jquery-2.2.4.min.js')}}"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @include('sweet::alert')
<script>


     function seePassword() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

   function seeConfirmPassword() {
  var x = document.getElementById("confirm-password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

  </script>
