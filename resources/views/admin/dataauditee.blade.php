 @extends('admin/layout/cmaster')

  @section('isi')

<div class="container-fluid"  style="font-size: 12px; "> <br>
  

  <div class="card">
      <div class="card-body">
        <div class="header-title">  
          <div class="row" > 
            <div class="col-md-6"><h4> Data Auditee</h4></div>
            <div class="col-md-6"  >
  
            </div>
          </div> 
        </div>
        <div class="single-table">
              <div class="table-responsive">
                  <table class="table table-hover text-center" style="font-size: 12px !important; ">
                    <thead class="text-uppercase">

     <tr >
        <th style="text-align:center">NO</th>
        <th style="text-align:center">Nama</th> 
        <th style="text-align:center">Lokasi Auditee</th>
        <th style="text-align:center">Username</th>
        <th style="text-align:center">Password</th>  
        <th style="text-align:center" >Status</th>
        <th style="text-align:center">Aksi</th>
    </tr>
  </thead>


    <?php $no = 0;?>
   @foreach ($auditee as $a)
    <?php $no++ ;?> 


    <tr>  
        <td style="text-align:center"> {{$no}} </td>    
        <td style="text-align:left;"> {{$a->nama}}  </td>
        <td > {{$a->lokasi_auditee}} </td>
        <td style="text-align:center">  {{$a->username}}</td>
        <td style="text-align:center"> 
           @if ($a->status_password == "changed" )
            <span style="font-size: 14px; color: green" class="ti ti-lock"data-toggle="tooltip" data-placement="top" title="Telah Diubah" > </span>
            @else
             {{$a->pass}}
          @endif
        </td>

        <td style="text-align:center ; min-width: 130px;"  >  

           @if ( $a->lokasi == NULL & $a->username == !NULL)
            Belum Aktif

          @elseif ( $a->username == NULL)
          Belum Di-Registrasi
                
          @else ( $a->lokasi == !NULL) 
          <i class="fa fa-check" style="font-size: 11px; width: 5em; text-align: center;line-height: 1em; height: 1.6em; padding-top: 3px; padding-bottom: 2px; background: green;color: #fff;border-radius: 0.8em;" > <span style="margin-top: 2px; margin-bottom: 2px;" >Aktif</span>   </i>  
          @endif


        </td>

        <td style="text-align:right; width: 180px; "> 
          @if ( $a->username == !NULL)

           
                 
                  @if ($a->lokasi == NULL)

                     <form class="form-horizontal" action="{{ route('syncauditee',$a->id) }}" method="post" style="display: inline;">
                    {{ csrf_field()}}      
                        <input type="hidden" class="form-control" id="status" name="lokasi" value="{{$a->lokasi_auditee}}">                 
                         <button type="submit" style=" font-size: 13px; width: 35px;"   class="btn btn-xs btn-success" data-toggle="tooltip" data-placement="top" title="Aktifkan" ><span class="fa fa-unlock" ></span>  </button>
                        <input type="hidden" name="_method" value="PUT">
                    </form>

                    @else

                     <form class="form-horizontal" action="{{ route('asyncauditee',$a->id) }}" method="post" style="display: inline;">
                    {{ csrf_field()}}                 
                        <button type="submit"  style=" font-size: 13px; width: 35px; color: rgb(255, 255, 255); "  onclick=" return confirm('Anda Yakin Untuk Me-nonaktifkan Akun Ini ? ') "  class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Nonaktifkan" ><span class="fa fa-lock" > </span></button>
                        <input type="hidden" name="_method" value="PUT">
                    </form>
    
                  @endif    
               

               
                   <form action=" {{ route('hapususer2',$a->id) }}"  method="post" style="display: inline;">     
                        <button  class="btn btn-danger btn-xs " style=" font-size: 13px; width: 35px; "   onclick="return confirm('Anda Yakin Untuk Menghapus User {{$a->username}} ?. Setelah terhapus, anda bisa me-regristrasi ulang.')" type="submit" name="submit" data-toggle="tooltip" data-placement="top" title="Hapus akun" > <span class="fa fa-trash" > </span> </button>
                        {{csrf_field() }}          
                        <input type="hidden" name="_method" value="DELETE" >
                  </form>
               

              
               @else
                <form action=" {{ route('formregistrasiauditee') }}"  method="post" style="display: inline;"> 
                 {{csrf_field() }}          
                    <input type="hidden" name="akses" value="AUDITEE" >
                    <input type="hidden" name="id_auditor" value="" >
                    <input type="hidden" name="id_auditee" value="{{$a->id_auditee}}" >
                    <input type="hidden" name="nama" value="{{$a->nama}} " >
               <a href="#"><button  class="btn btn-primary btn-xs " style=" font-size: 13px;  width: 76px;" type="submit" name="submit" data-toggle="tooltip" data-placement="top" title="Registrasi auditee" > <span class="fa fa-user-plus" > </span> </button></a>
            </form>  
             @endif         
         </td>
             
    </tr>

    @endforeach
   
  </table>
  </div>
  <br><br>

   <i>*Username Dan Password Dapat Digunakan Setelah Diaktifkan</i> 
</div>
</div></div></div>
        <br><br><br><br>

@endsection

<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>
</html>

