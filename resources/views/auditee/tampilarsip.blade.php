<!DOCTYPE html>
<html>
<head>
 
 	@include('auditee.headerarsip')

	<title></title> 
</head>
<body>




<div class="container-fluid" style="font-size: 13px;" >

{{-- Form Modal edit --}}

<div class="modal fade " id="detailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-left: 20px;" >
  <div class="modal-dialog modal-xl " role="document">
    <div class="modal-content" style="border-radius: 14px;">
              <div class="modal-header " style="background-color: #3993d0; color: #fff;"  >
                <h5 class="modal-title" id="exampleModalLabel" style="color: #fff; font-weight: bold;"> <span class="fa fa-file-archive-o" > </span>&nbsp;&nbsp;  Detail LKS </h5>
                <button type="button" class="close" data-dismiss="modal" style="color: #fff" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
             <div class="modal-body">


    {{-- Breadcrumb --}}

<div class="breadcrumb " style="margin-bottom: 5px;" >
  <div class="container-fluid">
     <div  style="font-size: 20px;  font-weight: bold; "> Laporan Ketidaksesuaian :</div>
   </div>
  </div> 

{{-- .......... --}}


      <table class="table table-responsive table-striped "  >

  
      <tr>
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
        <td id="deskripsi" class="field" style="width: 350px;">  </td>
        <td id="acuan" class="field" style="width: 270px;">  </td>
        <td id="iec_2012" class="field">  </td>
        <td id="iec_2015" class="field">  </td>
        <td id="iec_2017" class="field">  </td>
        <td id="smm" class="field">  </td>
      </tr>
  

  </table><br>

    {{-- Breadcrumb --}}

<div class="breadcrumb" style="margin-bottom: 5px; " >
  <div class="container-fluid">
     <div  style="font-size: 20px;  font-weight: bold; ">  Tindakan Perbaikan :</div>
   </div>
  </div> 

{{-- .......... --}}

  <table class="table table-striped  ">
    <tr>
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
      

  </table><br><br>


    
             </div>
      </div>
    </div>
  </div>

{{-- ............ --}}

</div>
<div class="container-fluid" style="font-size: 12px; margin-top: 5px;" >



	
	{{-- Breadcrumb --}}

<div class="breadcrumb " style="margin-bottom: 5px;   " >
  <div class="container-fluid">
   <div class="row">
     <div class="col-md-8" style="font-size: 20px; color: #676767; font-weight: bold; "> <span class="fa fa-file-archive-o" > </span> Arsip Data ({{Auth::user()->lokasi}}) - {{$tahun_audit}}</div>
      <div class="col-md-4" style="" >

        <form action="{{ route('auditeedataarsip') }}" method="post">
           {{ csrf_field()}} 
        <div class="row">
          
          <div class="col-md-8" style=" text-align: right !important; padding-right: 0;">
            <div class="form-group" style=" display: inline;">
              
              <select class="form-control-sm" style="border: none; font-size: 13px; width: 240px;" name="tahun_audit" required>
                <option value="" selected>Pilih tahun audit.........</option>
              @foreach ($periode as $p)
                  <option value="{{$p->tahun_audit}}">{{$p->tahun_audit}}</option>           
              @endforeach

              </select>
            </div>
          </div>
          <div class="col-md-4" style="margin-left: 0">
            <button type="submit" style="display: inline; font-size: 12px; padding: 6px 16px 6px 16px; background-color: #3993d0; color: #fff;" class="btn btn-sm "><span class="fa fa-search" > Cari Data </span></button>
          </div>
        </div>
       </form>
          

      </div>
    </div>
   </div>
  </div> 

{{-- .......... --}}







{{-- Tabel --}}

<div class="table-responsive" >

    <table class="table  table-striped table-bordered  " style=" "  >
    <tr style=" color: #676767;">
        <th class=" text-center " style="padding-left: 2px; padding-right: 2px;">No</th>
        <th class=" text-center " style="padding-left: 2px; padding-right: 2px;">Tahun Audit</th>
        <th class=" text-center ">Penulis</th>
        <th class=" text-center " style="min-width: 260px;">Pertanyaan</th>
        <th class=" text-center " style="min-width: 80px;  padding-left: 2px; padding-right: 2px;" >Kategori</th>
        <th class=" text-center " style="min-width: 250px;">Catatan</th>
        <th class=" text-center " style="max-width: 70px !important;" >LKS</th>
         
    </tr>

    

      <?php $no = 0;?>
    @foreach ($pertanyaan as $pr)
      <?php $no++ ;?>

    <tr>  
      <td class="  text-center " >{{$no}}</td>
      <td class=" text-center " style="max-width: 80px;">{{$pr->tahun_audit}}</td>
       <td class=" text-center ">{{$pr->penulis}}</td>
      <td class="  " style="white-space: pre-line;" > {!!$pr ->pertanyaan!!} </td>
      <td class=" text-center " > {{$pr ->kategori}} </td>
      <td class="  " style="white-space: pre-line;"> {{$pr ->catatan}} </td>
      <td   class=" text-center "  style="padding-left: 2px; padding-right: 2px; min-width: 65px;">
        @if ($pr->kategori == "NOK")
        
           <button class="btn  " onclick="showModal({{$pr->id}})" style="font-size: 12px; background-color: #3993d0; color: #fff;" > <span class="fa fa-eye" > </span>   </button>
        @endif
      </td>

     

    </tr>
    @endforeach
   
  </table>
  </div>





</div>

</body>

<script>

  
// tampil modal edit
    function showModal(id) 

    {
       

      $('#detailModal .field').empty();
      $.ajax({
        url: "{{ url('auditee/arsip')}}"+'/'+id+"/detail",
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

</html>
  @include('layout.footer')