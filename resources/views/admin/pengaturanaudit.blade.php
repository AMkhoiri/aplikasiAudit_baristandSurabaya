 @extends('admin/layout/cmaster')


<style>
  
  .btnn{
    background-color: #A87DFA;
    color: rgb(255, 255, 255);
    border-color: ;
     transition: top 0.4s;
  }

  .btnn:hover {
    background-color:#4F2A95;
    color: rgb(255, 255, 255);
    
  }


</style>


 @section('isi')



{{-- Form Modal Mulai audit--}}

<div class="modal fade" id="inputModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content" style="border-radius: 14px;">
      <div class="modal-header" style="background-color: #8446f9;" >
        <h5 class="modal-title" id="exampleModalLabel" style="color: #fff"> <span class="fa fa-calendar-check-o" >  </span>&nbsp;&nbsp; Mulai Audit Baru</h5>
        <button type="button" class="close" data-dismiss="modal" style="color: #fff" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     <div class="modal-body">

      <form class="form-horizontal" method="post" action="{{ url('admin/mulaiaudit') }}">
          {{ csrf_field() }}

        <br>
             <div class="form-gp">
              <label for="password" class="control-label">Tulis tahun audit (misal: 2020 / 2021)</label>
                 <input  type="text" class="form-control" name="tahun_audit" required>
          </div>


          <div class="submit-btn-area">
                  <button type="submit" class="btn btn-block " > 
                      Start &nbsp;&nbsp; <span class="fa fa-arrow-right" > </span>
                  </button>
          </div>
        </div>
      </form>
             </div>
      </div>
    </div>
 

{{-- ............ --}}












<div class="container-fluid"  style="font-size: 12px; "> <br>


  <div class="row">
    <div class="col-md-10">
       <div class="card">
      <div class="card-body">
        <div class="header-title">  
          <div class="row" > 
            <div class="col-md-6"><h5> Periode Audit Internal</h5></div>
            <div class="col-md-6"  >
             
            </div>
          </div> 
        </div>
        <div class="single-table">
             
         <table class="table  text-center" style="font-size: 12px !important; ">
            <thead class="text-uppercase" style="background-color: #8446f9; color: white; ">
    
            <tr>
              <th style="text-align:center">TAHUN </th> 
              <th style="text-align:center">STATUS SAAT INI</th>
              <th style="text-align:center">STATUS DATA</th>
              <th style="text-align:center">AKSI</th>
            </tr>

      </thead>


         @foreach ($periode as $p)
            <tr>
                <td style="">{{$p->tahun_audit}} </td>
                <td style="text-align: center;"> 

                @if ($p->status_audit == 'aktif')
                  <p style="    color: green; font-size: 14px; " class="ti ti-check" ><span style="color: black;"></span> </p>
                @endif
                </td>
                <td style=""> {{$p->status_data}} </td>
                <td style="">

                  @if($p->status=="" && $p->status_data=="diarsipkan")
                  
                          <a href="{{ route('hapusarsip',$p->id) }}" class="btn  btn-xs " style=" font-size: 13px; background-color: rgb(255, 255, 255); color: red;"   onclick="return confirm('Anda yakin untuk menghapus data audit tahun {{$p->tahun_audit}} ?')" type="submit" name="submit" data-toggle="tooltip" data-placement="top" title="Hapus arsip data audit tahun {{$p->tahun_audit}}"><span class="fa fa-close" ></span></a>

                      
                  @endif
                </td>
              </tr>
              @endforeach

      </table>
    </div>

</div><br>
</div>
    </div>



    <div class="col-md-2">
       <div class="card" style="">
      <div class="card-body" style=" padding-bottom: 0; padding-right: 3px; padding-left: 3px; padding-top: 15px;font-size: 90px;text-align:  center; " >
        <div class="header-title"> 
          <h6>Status Audit</h6><hr>
        </div>
         @if($tahunaktif==null)
          <p class="fa fa-calendar-times-o" style=" font-size: 70px; margin-bottom: 40px; "> </p>
          @else
         <p class="fa fa-calendar-check-o" style=" font-size: 70px; color:green;margin-bottom: 40px;  ">  </p><br> <h6 style="font-size: 18px; margin-bottom: 15px;">{{$tahunaktif}}</h6> 
         @endif
      </div>
  </div>
    </div>

  </div>

 <br><br>


  <div class="card">
  	<div class="card-body">
  		<div class="header-title">  
          <div class="row" > 
            <h5 style="padding-left: 16px;" > Mulai Audit Internal Baru ?</h5>

          </div> 
        </div><br><br>
  		<div class="row">
	             <div class="col-md-6">

                    <h4 class="header-title">Step 1  
                    	@if ($status_data =="kosong")
                    	<span class="ti ti-check" style="color:green; font-weight: bold; font-size: 26px;" ></span>
	                    @else
	                    @endif 
                	</h4>
                    <div id="accordion3" class="according accordion-s3 gradiant-bg">
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#accordion31">  Mengarsipkan Semua Data Audit Tahun {{$tahunaktif}}</a>
                            </div>
                            <div id="accordion31" class="collapse " data-parent="#accordion3">
                                <div class="card-body">
                                   Mengarsipkan semua data seperti data pertanyaan, data laporan ketidaksesuaian, dan data tindakan perbaikan. data-data ini akan dipindahkan ke tabel arsip, sehingga akan dapat diakses oleh admin maupun petugas audit pada audit internal ditahun-tahun berikutnya. sebelum memulainya pastikan semua tahapan audit internal pada tahun ini telah selesai!
                                   <br>
                                   @if ($status_lks=="aman")
                                    {{''}}
                                    @else
                                     <div class="alert alert-warning" role="alert">
                                            <strong>Peringatan!</strong> {{$status_lks}}
                                        </div>
                                   @endif

                                    @if ($status_data =="kosong")
                                      {{-- <a href="#" class="btn  btn-outline-secondary btn-sm btn-block" onclick="return confirm('Tidak ada data yang perlu diarsipkan lagi!')">Jalankan</a> --}}
                                    @else

                                     <a href="{{ route('arsip-confirm') }}"  class="btn  btnn btn-sm btn-block">Jalankan</a>
                                    @endif 
                                  
                                  
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
                 <div class="col-md-6">

                    <h4 class="header-title">Step 2 
                      @if ($status_users =="kosong")
                      <span class="ti ti-check" style="color:green; font-weight: bold; font-size: 26px;" ></span>
                      @else
                      @endif 
                    </h4>
                    <div id="accordion4" class="according accordion-s3 gradiant-bg">
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#accordion41">Menghapus Data User</a>
                            </div>
                            <div id="accordion41" class="collapse " data-parent="#accordion4">
                                <div class="card-body">
                                    Menghapus semua data user (Auditor dan Auditee). setelah tahap ini dilakukan berarti pegawai yang sebelumnya telah dipilih untuk menjadi auditor/auditee tidak bisa lagi untuk login ke aplikasi.
                                      <br>

                                      @if ($status_users =="kosong")
                                      
                                      @else
                                       <a href=" {{ route('hapususers') }}" class="btn  btnn btn-sm btn-block" onclick="return confirm('Anda yakin untuk Menjalankan Perintah Ini?')">Jalankan</a>
                                      @endif
                                  

                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
  		</div><br><br>


		  		<div class="row">
	             <div class="col-md-6">

                    <h4 class="header-title">Step 3
                      @if ($status_pelaksana =="kosong")
                      <span class="ti ti-check" style="color:green; font-weight: bold; font-size: 26px;" ></span>
                      @else
                      @endif 
                    </h4>
                    <div id="accordion1" class="according accordion-s3 gradiant-bg">
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#accordion11">Menghapus Data Auditor/Auditee</a>
                            </div>
                            <div id="accordion11" class="collapse " data-parent="#accordion1">
                                <div class="card-body">
                                    Menghapus data auditor dan auditee, sehingga kepala balai dapat memilih ulang pegawai sebagai auditor maupun auditee di pelaksanaan audit yang baru.
                                      <br>
                                   @if ($status_pelaksana =="kosong")
                                      @else
                                        <a href="{{ route('hapuspelaksana') }}" class="btn  btnn btn-sm btn-block" onclick="return confirm('Anda yakin untuk Menjalankan Perintah Ini?')">Jalankan</a>
                                      @endif

                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
                 <div class="col-md-6">

                    <h4 class="header-title">Step 4</h4>
                    <div id="accordion2" class="according accordion-s3 gradiant-bg">
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#accordion21">Memulai Periode Audit Baru</a>
                            </div>
                            <div id="accordion21" class="collapse " data-parent="#accordion2">
                                <div class="card-body">
                                  Setelah semua data dari pelaksanaan audit internal pada tahun sebelumnya telah dihapus/diarsipkan, Langkah selanjutnya yaitu memulai pelaksanaan audit baru, sehingga audit internal dapat dilaksanakan mulai dari tahap awal.
                                    <br><br>

                                    <a href="#"><button class="btn btnn btn-sm btn-block"   type="button" data-toggle="modal" data-target="#inputModal" data-whatever="@getbootstrap"  > Mulai Audit Baru  </button></a>

                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
  		</div>


  	</div>
  </div>



</div>

	


 @endsection