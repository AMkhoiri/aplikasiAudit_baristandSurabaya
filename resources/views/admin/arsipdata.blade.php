 @extends('admin/layout/cmaster')

 @section('isi')





{{-- Form Modal edit --}}

<div class="modal fade " id="detailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-left: 20px;" >
  <div class="modal-dialog modal-xl " role="document">
    <div class="modal-content" style="border-radius: 14px;">
              <div class="modal-header bg-secondary"  >
                <h5 class="modal-title" id="exampleModalLabel" style="color: #fff; font-weight: bold;"> <span class="fa fa-file-archive-o" > </span>&nbsp;&nbsp;  Detail Data </h5>
                <button type="button" class="close" data-dismiss="modal" style="color: #fff" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
             <div class="modal-body">


    {{-- Breadcrumb --}}

<div class="breadcrumb " style="margin-bottom: 5px;" >
  <div class="container-fluid">
     <div  style="font-size: 18px;  font-weight: bold; "> Laporan Ketidaksesuaian :</div>
   </div>
  </div> 

{{-- .......... --}}

<div class="single-table table-responsive" >
      <table class="table table-hover table-striped " style="font-size: 12px !important; " >

  
      <tr class=" ">
        <th >No LKS</th>
        <th >Deskripsi Ketidaksesuaian</th>
        <th >Dokumen Acuan</th>
        <th > SNI ISO/IEC 17065:2012 Klausul</th>
        <th > SNI ISO/IEC 17021-1:2015 Klausul</th>
        <th >SNI ISO/IEC 17021-1:2017 Klausul</th>
        <th > (Dokumen SMM)</th>
      </tr>

      <tr>  
        <td id="nolks" class="field">  </td>
        <td id="deskripsi" class="field" style="width: 340px;" >  </td>
        <td id="acuan" class="field" style="width: 200px;">  </td>
        <td id="iec_2012" class="field" style="width: 200px;">  </td>
        <td id="iec_2015" class="field" style="width: 200px;">  </td>
        <td id="iec_2017" class="field" style="width: 200px;">  </td>
        <td id="smm" class="field">  </td>
      </tr>
  

  </table>
  </div><br><br>

    {{-- Breadcrumb --}}

<div class="breadcrumb" style="margin-bottom: 5px; " >
  <div class="container-fluid">
     <div  style="font-size: 20px;  font-weight: bold; ">  Tindakan Perbaikan :</div>
   </div>
  </div> 

{{-- .......... --}}
<div class="sigle-table table-responsive">
  <table class="table  table-striped " >
    <tr class=" ">
      <th >Akar Permasalahan</th>
          <th>Tindakan Yang Dilakukan</th>
          <th>Tindakan Pencegahan</th>
          <th>Bukti</th>
    </tr>


    <tr>
        <td id="akar" class="field">  </td>
        <td id="dilakukan" class="field">  </td>
        <td id="pencegahan" class="field"> </td>
        <td id="title" class="field" style="max-width: 140px;"> 

        </td>
      </tr>
      

  </table>
  </div><br><br>


    
             </div>
      </div>
    </div>
  </div>

{{-- ............ --}}








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
                        <select class="form-control"  style="height: 45px  !important;"   name="lokasi"  required>
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
                        <select class="form-control" style="height: 45px  !important;"    name="tahun_audit"  required>
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


 <div class="card">
      <div class="card-body">
        <div class="header-title"> 
          Arsip Data Audit ({{$lokasi ." - ". $tahun_audit}})
        </div>


      <div class="single-table table-responsive">      
         <table class="table table-hover  text-center" style="font-size: 12px !important; ">
            <thead class="text-uppercase bg-secondary">
    
            <tr class="text-white">
              <th >No </th> 
             {{--  <th style="text-align:center">Tahun Audit</th> --}}
              <th >Penulis</th>
              <th >Pertanyaan</th>
              <th >Kategori</th>
              <th >Catatan</th>
              <th >Aksi</th>
            </tr>

           </thead>

 

            <?php  $no=0?>
         @foreach ($pertanyaan as $p)
            <?php $no++ ;?>
            <tr>
                <td style="">{{$no}}</td>
                {{-- <td style="">{{$p->tahun_audit}} </td> --}}
                <td style="text-align:left; max-width: 120px;">{{$p->penulis}}</td>
                <td style="text-align:left">{{$p->pertanyaan}} </td>
                <td style="">{{$p->kategori}} </td>
                <td style="text-align:left">{{$p->catatan}} </td>
                <td style=" text-align: right;">  
                 @if ($p->kategori == "NOK")
                
                   <button class="btn btn-xs btn-secondary " data-toggle="tooltip" data-placement="top" title="Lihat LKS" onclick="showModal({{$p->id}})" style="font-size: 12px;" > <span class="fa fa-eye" > </span>   </button>
                @endif
            </td>
            </tr>
           @endforeach

      </table>
    </div>


      </div>
</div> <br>


 


</div>

	
<script>
  // tampil modal detail
    function showModal(id) 

    {
       

      $('#detailModal .field').empty();
      $.ajax({
        url: "{{ url('admin/arsip')}}"+'/'+id+"/detail",
        type: "GET",
        dataType: "JSON",

        success: function(data) {
          
          $('#detailModal').modal('show');

          $('#nolks').append(data.nolks);
          $('#deskripsi').append(data.deskripsi);
          $('#acuan').append(data.acuan);
          $('#iec_2012').append(data.iec_2012);
          $('#iec_2015').append(data.iec_2015);
          $('#iec_2017').append(data.iec_2017);
          $('#smm').append(data.smm);
          $('#akar').append(data.akar);
          $('#dilakukan').append(data.dilakukan);
          $('#pencegahan').append(data.pencegahan);
          $('#title').append(data.title);

        },
        error : function(){
          alert("nothing data");
        }
      });
    }
// ........
</script>






 @endsection