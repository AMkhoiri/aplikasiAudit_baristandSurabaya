
<!DOCTYPE html>
<html>
<head>



@include('layout.head-css')

<title>BISBY - Audit Internal</title>

<style>
 #navbar { 
    background-color: #2E86C1; 
    transition: top 0.4s;
    box-shadow:0 4px 6px #C4C4C4 
  }

  .container {
    font-size: 12px;
  }

  .navbar-nav{
    margin-left: 22px;
  }

/*  .nav-item{
    transition: 0.15s;
  }*/

  .thumbnail{
    max-width: 100px;
  }

  #link{
     margin-left: 22px;  color: white; 
     text-decoration: none;
  }

  #links{
    margin-bottom: 0px; margin-top: 0px;  color: white; font-size: 12px;
  }

  #links:hover {
    background-color: #3993d0;
  }

  a{
    transition: 0.15s;
    
  }

  a:hover{
    font-weight: bold;
  }

  #dropdownn {
    background-color:#2E86C1; margin-top: 22px; outline-color: transparent; box-shadow:0 4px 6px #C4C4C4;  transition: 0.5s;
  }

  .nav-item .nav-link .dropdown-menu{
    transition: 0.5s;
  }

  #role{
    margin-right: 22px;
    font-weight: bold;
  }

</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light   fixed-top" id="navbar" >
        <div class="container" >
           <a class="navbar-brand logo_h" href="#"><img  class="thumbnail"   src=" {{ asset('audit/img/bisby.png')}}" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div  class="navbar-nav">
              <a data-toggle="tooltip" data-placement="top" title="Daftar Pertanyaan" class="nav-item nav-link" id="link" href="{{url ('auditor/daftarpertanyaan')}}">PERTANYAAN</a>
              <a  data-toggle="tooltip" data-placement="top" title="Lihat LKS"class="nav-item nav-link" id="link" href="{{url ('auditor/daftarlks')}}">LKS</a>
              <a data-toggle="tooltip" data-placement="top" title="Lihat Tindakan Perbaikan" class="nav-item nav-link " id="link" href="{{url ('auditor/lksver')}}">TINDAKAN PERBAIKAN

              @if ($tindakanlks !=0)
                  <span class="badge badge-light" style="color:#3993d0; ">{{$tindakanlks}}</span>
                @endif
              </a>

              <a data-toggle="tooltip" data-placement="top" title="Lihat Arsip" class="nav-item nav-link " id="link" href="{{url ('auditor/arsip')}}">ARSIP</a>
            </div>
            <div></div>

                      
             


        </div>

            @if (Auth::guest())
                <ul>
                    <a href=""></a>
                </ul>
            @else           
               <a  style=" color: white;  font-size: 1em;  text-align: center; line-height: 0.4em; background: #fff; color: #3993d0; border-radius: 1em;  "class="nav-item nav-link " id="role" href="#">Auditor</a>
             

                
               <div class="dropdown nav-item nav-link" style=""> <span class=" fa fa-user "  style="  color: white; "> </span> <a style="" id="link"  class="" data-toggle="dropdown" href="#">{{Auth::user()->username}} &nbsp; <span  class="fa fa-caret-down"></span></a>
                <ul class="dropdown-menu" id="dropdownn" style=" ">
                  <li><a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();" id="links" class="nav-item nav-link"><span class="fa fa-sign-out" ></span> Logout </a>
                  <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                  </form> 
                  </li>

                  <li><a href="#" id="links"  class="nav-item nav-link"> <span class="fa fa-key" ></span> Change Password</a></li>
                 
                </ul>
              </div>
            @endif
                             
        </div>
    </nav>


<br><br><br>


   <div class="breadcrumb" style="margin-bottom: 7px;" >
    <div class="container-fluid" style="font-size: 14px; font-weight: bold; color: #676767 ">
    
    @if(Auth::user()->lokasi==NULL)
    <i style=" color: red; " >Maaf Akun Anda Tidak Aktif, Silahkan Hubungi Admin !</i>
    @else
     Area Audit : 
    {{Auth::user()->lokasi}}
    @endif
    </div>       
  </div>


</body>
</html>


<script>
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
