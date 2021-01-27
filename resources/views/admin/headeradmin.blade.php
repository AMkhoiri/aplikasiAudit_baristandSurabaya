
<!DOCTYPE html>
<html>
<head>
 @include('layout.head-css')

    <title>BISBY - Audit Internal</title>



    <style>

.navbar-nav .nav-link.active,
 .navbar-nav .nav-item:hover .nav-link {
        background: blue; 
        font-color: blue;
        color: black;
      }
</style>
</head>
<body>

<!-- <div class="container"  >  -->
  <header>
     <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary" style=" box-shadow:0 4px 6px #C4C4C4;" >

                <div class="container" style="font-size: 14px ">

                   <a class="navbar-brand logo_h" href="#"><img  class="thumbnail"  style=" max-width: 100px;  "  src=" {{ asset('audit/img/bisby.png')}}" alt=""></a>
                  

                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                  <div class="collapse navbar-collapse" id="navbarNavAltMarkup" >
                    <div   style="margin: 0px;"  class="navbar-nav">
                           
                          <a   style="  margin-left: 22px;   color: white; "  data-toggle="tooltip" data-placement="top" title="Data Pegawai" class="nav-item nav-link " href="{{url ('admin/datapegawai')}}">DATA PEGAWAI</a>
                       
                          <a  style="  margin-left: 22px;   color: white; "    data-toggle="tooltip" data-placement="top" title="Data Auditor" class="nav-item nav-link" href="{{url ('admin/dataauditor')}}">DATA AUDITOR</a>
                          <a  style="  margin-left: 22px;  color: white;   " data-toggle="tooltip" data-placement="top" title="Data Auditee" class="nav-item nav-link" href="{{url ('admin/dataauditee')}}">DATA AUDITEE</a>
                          <a  style=" margin-left: 22px;   color: white;  " data-toggle="tooltip" data-placement="top" title="Data Kepala Balai"  class="nav-item nav-link " href="{{url ('admin/datakepala')}}">KEPALA BALAI</a>
                          <a  style=" margin-left: 22px;   color: white;  " data-toggle="tooltip" data-placement="top" title="Buat Pengumuman"  class="nav-item nav-link " href="{{url ('admin/pengumuman')}}">PENGUMUMAN</a>
                     
                    </div>
                  </div>

                          @if (Auth::guest())
                                 <ul>
                                      <a href=""></a>
                                  </ul>
                          @else

                          
                           <a  style="padding: 0px 20px 0px 20px;   color: white;  "class="nav-item nav-link " href="#">{{Auth::user()->username}} - Admin</a>
                           <a class=" fa fa-user "  style="  color: white; "></a>
                           <a    style="padding: 0px 20px 0px 20px;   color: white;  "  data-toggle="tooltip" data-placement="top" title="Logout" class="nav-item nav-link" href="{{ url('/logout') }}"
                                                    onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                                      LOGOUT
                          </a>

                           <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                            </form>

                           
                          @endif
                             

             </div>
     </nav>
     
 </header>
</body>


<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip(); 
});
</script>


</html>
