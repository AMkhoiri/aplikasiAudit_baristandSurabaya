 @extends('admin/layout/cmaster')

 @section('isi')


<div class="container-fluid" >

{{-- Form Modal edit --}}

<div class="modal fade " id="detailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-left: 20px;" >
  <div class="modal-dialog modal-xl " role="document">
    <div class="modal-content" style="border-radius: 14px;">
              <div class="modal-header bg-info"  >
                <h5 class="modal-title" id="exampleModalLabel" style="color: #fff; font-weight: bold;"> <span class="fa fa-file-o" > </span>&nbsp;&nbsp;  Detail Data </h5>
                <button type="button" class="close" data-dismiss="modal" style="color: #fff" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
             <div class="modal-body">


    {{-- Breadcrumb --}}

<div class="breadcrumb " style="margin-bottom: 5px;" >
  <div class="container-fluid"  >
     <div  style="font-size: 18px;  font-weight: bold; "> Laporan Ketidaksesuaian :</div>
   </div>
  </div> 

{{-- .......... --}}

<div class="single-table table-responsive">
      <table class="table  table-striped "style="font-size: 12px !important; "  >

  
      <tr class=" ">
        <th >No LKS</th>
        <th >Deskripsi Ketidaksesuaian</th>
        <th >Dokumen Acuan</th>
        <th >SNI ISO/IEC 17065:2012 Klausul</th>
        <th >SNI ISO/IEC 17021-1:2015 Klausul</th>
        <th >SNI ISO/IEC 17021-1:2017 Klausul</th>
        <th >(Dokumen SMM)</th>
      </tr>


      <tr>  
        <td id="nolks" class="field">  </td>
        <td id="deskripsi" class="field" style="max-width: 330px; min-width: 300px;">  </td>
        <td id="acuan" class="field"style="max-width: 230px; min-width: 200px;">  </td>
        <td id="iec_2012" class="field">  </td>
        <td id="iec_2015" class="field">  </td>
        <td id="iec_2017" class="field">  </td>
        <td id="smm" class="field">  </td>
      </tr>
  

  </table>
</div><br>

    {{-- Breadcrumb --}}

<div class="breadcrumb" style="margin-bottom: 5px; " >
  <div class="container-fluid">
     <div  style="font-size: 18px;  font-weight: bold; ">  Tindakan Perbaikan :</div>
   </div>
  </div> 

{{-- .......... --}}
<div class="single-table table-responsive">
  <table class="table table-striped " style="font-size: 12px !important; " >
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
</div>





<div class="container-fluid"  style="font-size: 12px; "><br>

  <div class="card">
    <div class="card-body" style="padding-top: 20; padding-bottom: 0; ">
        <div class="header-title" >
        <div class="row">
          <div class="col-md-5 "><h5 style="font-weight: bold !important; color: #5bc0de; ">Data Audit   </h5></div>
          <div class="col-md-7 text-right" style="font-weight: bold !important; color: #5bc0de; "><h5>{{$lokasi }}  </h5></div>
        </div> 
          
        
        </div>
    </div>
  </div><br>

 <div class="card">
      <div class="card-body">
        
          <i style="font-size: 13px;  color: #5bc0de; font-weight: bold; " > Total Data :  {{$totaldata}} &nbsp; &nbsp;( Ok : {{$ok}}, Nok : {{$nok}} )&nbsp;&nbsp;</i>
        
           

      <div class="single-table table-responsive">      
         <table class="table  table-hover  text-center " style="font-size: 12px !important; margin-top: 5px; ">
            <thead class="text-uppercase bg-info">
    
            <tr class="text-white">
              <th style="text-align:center">No </th> 
             {{--  <th style="text-align:center">Tahun Audit</th> --}}
              <th style="text-align:center">Penulis</th>
              <th style="text-align:center">Pertanyaan</th>
              <th style="text-align:center">Kategori</th>
              <th style="text-align:center">Catatan</th>
              <th style="text-align:center">Verifikasi?</th>
              <th style="text-align:center">Aksi</th>
            </tr>

           </thead>

 

            <?php  $no=0?>
         @foreach ($pertanyaan as $p)
            <?php $no++ ;?>
            <tr>
                <td style="">{{$no}}</td>
                {{-- <td style="">{{$p->tahun_audit}} </td> --}}
                <td style="text-align:left; max-width: 110px;">{{$p->penulis}}</td>
                <td style="text-align:left">{{$p->pertanyaan}} </td>
                <td style="">{{$p->kategori}} </td>
                <td style="text-align:left">{{$p->catatan}} </td>
                <td style="text-align:center; width: 40px;">   

                  @if ($p->statuslks =='Ter-Verifikasi')
                   <p class="ti ti-check" > </p>
                  @endif
                  

                </td>
                <td style="text-align:right;">  
                 @if ($p->kategori == "NOK")
                
                   <button class="btn btn-xs btn-info " data-toggle="tooltip" data-placement="top" title="Lihat LKS"  onclick="showModal({{$p->id}})" style="font-size: 12px; margin-bottom: 3px;" > <span class="fa fa-eye" > </span>   </button>

                   @if ($p->statuslks =='Ter-Verifikasi')
                   <a href="{{ route('admincetaklks',$p->id) }} " class="btn btn-xs btn-info" target="_blank" data-toggle="tooltip" data-placement="top" title="Cetak LKS" > <span class="ti ti-printer" style="font-size: 12px;"> </span> </a>
                  @endif

                   
                @endif
            </td>
            </tr>
           @endforeach

      </table>
    </div>


      </div>
</div> <br>
</div>



 @endsection

 <script>
   
  // tampil modal detail
    function showModal(id) 

    {

       

      $('#detailModal .field').empty();
      $.ajax({
        url: "{{ url('admin/data')}}"+'/'+id+"/detail",
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