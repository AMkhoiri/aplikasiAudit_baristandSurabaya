<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Audit Internal - Welcome page</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('audit/landing/css/styles.css')}}" rel="stylesheet" />

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

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

        <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@900&display=swap" rel="stylesheet">


        <script src="{{asset('audit/admin/assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>

         <script src="{{asset('audit/admin/assets/js/vendor/jquery-2.2.4.min.js')}}"></script>



<style>
    .btnn:hover{
        box-shadow:3px 4px 4px #235aae;
        letter-spacing: 1px;
         background-color: #2962ac;
    }
    #navbar { 
    background-color: #2e6ec1; 
    transition: top 0.4s;
    box-shadow:0 2px 3px #246998; 
  }

  .container {
    font-size: 12px;
  }

  .navbar-nav{
    margin-left: 22px;
  }

  #boxx{
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



 #navbar { 
    background-color: #fff; 
    transition: top 0.4s;
    /*box-shadow:0 4px 6px #C4C4C4 ;*/
  }

  .navbar-nav{
    margin-left: 22px;
  }

/*  .nav-item{
    transition: 0.15s;
  }*/

  .thumbnail{
    max-width: 120px;
    margin-top: 0px;
    margin-bottom: 0px;
  }

 
  #role{
    margin-right: 22px;
    font-weight: bold;
  }

  .lato{
    font-family: 'Lato', sans-serif;
  }


</style>

</head>




{{-- modal for testing --}}

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"  >
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content" style="border-radius: 14px;">
              <div class="modal-header"  style="background-color:#2E86C1;">
                <h5 class="modal-title" id="exampleModalLabel" style="color: #fff; "> <span class="fa fa-exclamation-triangle" >  </span>&nbsp;&nbsp; Just For Software Testing</h5>
{{--                 <button type="button" class="close" data-dismiss="modal" style="color: #fff" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button> --}}
              </div>
             <div class="modal-body" >
             <div style="text-align: center;">
               <h4>Selamat Datang</h4>
               <h5> Di Sistem Informasi Audit Internal <br>  Balai Riset dan Standardisasi Industri  Surabaya</h5>
 
             </div> 


             <div style="text-align: center;">

              Sebelum melanjutkan, silahkan mengunduh buku panduan terlebih dahulu!<br>

               <a  class="btn  btn-sm " style=" margin-top: 6px; color: white; background-color:#2E86C1; width: 136px; font-size: 10px; margin-bottom: 10px; " href="{{ route('downloadmanual') }} "  > <span class=" fa fa-download" > </span> Unduh Buku Panduan </a>


              <br>
               Untuk Login ke aplikasi, berikut akun yang dapat digunakan: <br> <br>

               <div class="row">
                 <div class="col-sm-6"><b>Auditor</b> 

                  <div class="table-responsive" >
                       <table class="table table-bordered" style=" font-size: 11px; "  >
                          <tr>
                            <th>Lokasi Audit</th>
                            <th>Username</th>
                            <th>Password</th>
                          </tr>

                           @foreach ($auditor as $or)
                          <tr>
                            <td>{{$or->lokasi}}</td>
                            <td>{{$or->username}}</td>
                            <td>{{$or->pass}}</td>
                          </tr>
                         @endforeach

                    </table>
                  </div>
                </div>
                 

                 <div class="col-sm-6"> <b>Auditee</b> 
                 <div class="table-responsive" >
                   <table class="table table-bordered" style=" font-size: 11px; "  >
                <tr>
                  <th>Lokasi Audit</th>
                  <th>Username</th>
                  <th>Password</th>
                </tr>

                          @foreach ($auditee as $ee)
                          <tr>
                            <td>{{$ee->lokasi}}</td>
                            <td>{{$ee->username}}</td>
                            <td>{{$ee->pass}}</td>
                          </tr>
                         @endforeach

               
                </table>
               
                  </div>
                 
                 </div>
              
                  </div>
              

              
                 </div>
                  
            </div>

              <div class="modal-footer">
                    <button type="button" class="btn" data-dismiss="modal" style="color: #2E86C1;">Lanjutkan Ke Aplikasi <span class="fa fa-arrow-right" > </span> </button>
                    
                  </div>


             </div>
      </div>
    </div>
  </div>
    
{{-- ............ --}}






    <body id="page-top">

        <!-- Masthead-->
        <header class="masthead text-white text-center" style=" padding-bottom: 0px; background-color: #2E86C1;  padding-top: 0 ">
{{-- 
        <div class="row">
          <div class="col-md-2" style=" "> <img style="width: 140px; background-color: #fff; margin-left: 6px; margin-right: 6px;"  src=" {{ asset('audit/img/kemenperin.png')}}" alt="" /></div>
          <div class="col-md-10"></div>
        </div> --}}

        <div style="background-color: #fff;" align="left" > 

          <div class="row">
            <div class="col-md-4">
              <img style="width: 160px; margin-left: 30px; display: inline;margin-top: 4px; margin-bottom: 4px; /*border-bottom: 2px solid #2E86C1;*/ " class="img-fluid"alt="Responsive image"  src=" {{ asset('audit/img/kemenperin2.png')}}" alt="" /> 
              <img  style="width: 104px;   margin-left: 15px; display: inline;margin-top: 4px; margin-bottom: 4px;"class="img-fluid" alt="Responsive image"  src=" {{ asset('audit/img/landinglogo.png')}}" alt="" /> 
            </div>
            <div class="col-md-8 " >
               
             {{--  <img align="right" style="width: 50px;   margin-right: 30px; display: inline;margin-top: 4px; margin-bottom: 4px; "  src=" {{ asset('audit/img/iso.png')}}" alt="" />  --}}
             
             {{-- <h3 align="right" style="color: black; margin-right: 30px;" > 2019</h3> --}}

            </div>




          </div>
          

         
           
        </div>
        



      <div  class="container" style="padding-top: 8px;">

       
          @forelse($pengumuman as $p)
            <div class="alert alert-info alert-dismissible" role="alert" style="height:48px ; font-size: 12px; margin-bottom: 4px;">
              <button type="button"  class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Info!</strong> {{$p->pengumuman}}
          </div>
          @empty
          @endforelse
      </div>


            <div class="container d-flex align-items-center flex-column">
              <div class="bekgron" style="background-color: rgb(255, 255, 255);margin-top: 25px;  border-radius: 50%;" > 
                 <img class="masthead-avatar " style="  width: 160px; margin: 20px 7px 20px 20px;  "   src=" {{ asset('audit/img/auditicon.png')}}" alt="" />
              </div>
            
               
        
                <h1 class="masthead-heading text-uppercase mb-1 lato" style="font-size: 45px; font-weight: bold; margin-top: 5px;">Audit Internal</h1>
                <p class="masthead-subheading font-weight-bold mb-0 lato" style=" color: #fff;" >Balai Riset Dan Standardisasi Industri Surabaya</p>



                 
                 @if (Auth::guest())
                 <br>
                 <div class="submit-btn-area" style="margin-bottom: 25px; ">
                  <a href="{{ route('login') }} "> <button  class="btn btnn lato"  style="width: 200px; margin-top: 20px; " > 
                      Login &nbsp;&nbsp; <span class="ti-arrow-right" > </span>
                  </button></a>
                 </div>
                 @else
                 <br><br> <p style="font-size: 16px; color: #fff;" class="lato" >you are loged in!</p>
                <div class="submit-btn-area" style="margin-bottom: 25px;">

                  <a href="{{ url('/back') }} "> <button  class="btn btnn lato"  style="width: 240px; margin-top: 20px;" > 
                      Back To Your Page &nbsp;&nbsp; <span class="ti-arrow-right"  > </span>
                  </button></a>
                 </div>

                 @endif

            </div>

        </header>




        <!-- Portfolio Section-->
        <section class="page-section">
            <div class="container">
                <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0 mt-0" style="font-size: 25px; font-family: 'Lato', sans-serif;">Rekapitulasi Sementara</h2>
                <div class="container-fluid"  style="font-size: 12px; "> <br>

 <div class="card" id="boxx">
      <div class="card-body">
        <div class="single-table">
             
                  <table class="table  text-center table-responsive" style="font-size: 12px !important;  color: #6c757d;">
        <thead class="text-uppercase">
         <tr>
              
              <th style="text-align:center">Lokasi Audit/Auditee </th> 
              <th style="text-align:center; min-width: 300px;">Jumlah Ketidaksesuaian </th>
              <th style="text-align:center">Ketidaksesuaian (Memenuhi) </th> 
              <th style="text-align:center">Verifikasi Memenuhi (tanggal) </th> 
        </tr>
       </thead>
 
    
        <tr>
             
              <td style="text-align:center"> Top Manajemen </td>
              <td style="text-align:center"> {{$lks1}}  </td>
              <td style="text-align:center"> {{$lks1ok}}  </td>
              <td style="text-align:center">   {{$tglver1}} </td>
        </tr>

         <tr>
              
              <td > Sub Bag Tata Usaha </td>
              <td style="text-align:center">{{$lks2}}  </td>
               <td style="text-align:center">{{$lks2ok}}  </td>
              <td style="text-align:center"> {{$tglver2}} </td>
         </tr>

        <tr>
              
              <td > Seksi Pengembangan jasa Teknis </td>
              <td style="text-align:center"> {{$lks3}} </td>
               <td style="text-align:center"> {{$lks3ok}} </td>
              <td style="text-align:center"> {{$tglver3}} </td>
        </tr>

        <tr>
              
              <td > Seksi Standarisasi Dan Sertifikasi / Operasional </td>
              <td style="text-align:center"> {{$lks4}} </td>
              <td style="text-align:center"> {{$lks4ok}} </td>
              <td style="text-align:center">{{$tglver4}}   </td>
        </tr>

        <tr>
              
              <td > Seksi Standarisasi Dan Sertifikasi / Mutu </td>
              <td style="text-align:center"> {{$lks5}} </td>
               <td style="text-align:center"> {{$lks5ok}} </td>
              <td style="text-align:center"> {{$tglver5}} </td>
        </tr>

  </table>


 
</div>
</div>
</div>
 </div>

</div>
</section>


        <script src="{{ asset('audit/landing/js/scripts.css')}}"></script>
    </body>
</html>

@include('layout.footer')

<script>



    $(window).on('load',function(){
        $('#myModal').modal('show');
    });
    $('#myModal').modal({backdrop: 'static', keyboard: false}) 






  var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-210px";
  }
  prevScrollpos = currentScrollPos;
}


</script>




