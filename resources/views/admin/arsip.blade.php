 @extends('admin/layout/cmaster')

 @section('isi')





<div class="container-fluid"  style="font-size: 12px; "> <br>





	 <div class="card" style="">
      <div class="card-body" style=" padding-bottom: 0; padding-top: 15px; font-size: 25px; " >
      	<div class="header-title"> 

                 Arsip Data Audit Internal   
      	</div>

           <form action="{{ route('admindataarsip') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                              

                  <div class="row">
                    <div class="col-md-5">
                      <div class="form-group">
                        <select class="form-control"  style="height: 45px  !important;"   name="lokasi" required>
                            <option value="" selected>Pilih area audit...</option>
                          
                            <option value="Top Manajemen">Top Manajemen</option>
                            <option value="Sub Bag Tata Usaha">Sub Bag Tata Usaha</option>
                            <option value="Seksi Pengembangan jasa Teknis">Seksi Pengembangan jasa Teknis</option>
                            <option value="Seksi Standarisasi Dan Sertifikasi / Operasional">Seksi Standarisasi Dan Sertifikasi / Operasional</option>
                            <option value="Seksi Standarisasi Dan Sertifikasi / Mutu">Seksi Standarisasi Dan Sertifikasi / Mutu</option>
                            
                        </select>  
                      </div>
                        
                    </div>
                    <div class="col-md-3">
                        <select class="form-control" style="height: 45px  !important;"    name="tahun_audit" required>
                            <option value="" selected>Pilih tahun audit...</option>
                            @foreach($periode as $p)
                            <option value="{{$p->tahun_audit}}">{{$p->tahun_audit}}</option>
                            @endforeach
                        </select>  
                    </div>
                    <div class="col-md-4">
                      <button  type="submit" class="btn btn-secondary " style="width: 100%; "> <span class="fa fa-search" >&ensp;</span> <b> Cari Data</b> </button>
                    </div>
                  </div>

        </form>

      </div>
  </div><br>


 


</div>

	


 @endsection