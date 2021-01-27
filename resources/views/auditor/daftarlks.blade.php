

<!DOCTYPE html>
<html>
<head>

 @include('layout.head-css')
 @include('auditor.headerauditor')

<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400&display=swap" rel="stylesheet">
 <style>
 
  </style>

	<title>Daftar Laporan Ketidakseuaian</title>
</head>
<body>



	
<div class=" container-fluid" style=" font-size: 12px ; " > 

		{{-- Breadcrumb --}}

<div class="breadcrumb" style="margin-bottom: 5px;" >
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
         <div  style="font-size: 20px; color: #3993d0; font-weight: bold; "> <span class="fa fa-folder-open" > </span> Daftar Laporan Ketidaksesuaian</div>
   </div>
     
      <div class="col-md-6"style=" text-align: right !important; " >
        <i style="font-size: 15px; color: #3993d0; font-weight: bold;" > Jumlah LKS :  {{$totaldata}} &nbsp; &nbsp;( Terkirim : {{$terkirimm}}, Belum Terkirim : {{$belumterkirim}} )&nbsp;&nbsp;</i>
      </div>
       </div>
    </div>
    
  </div> 

{{-- .......... --}}








    <div class="table-responsive">
		<table class="table table-striped table-bordered"  >

    	<tr>

      	<th class="  text-center "  data-toggle="tooltip" data-placement="top" title="Nomor LKS akan terisi setelah terkirim ke auditee"><u> NO LKS</u></th>
        <th class="  text-center ">PENULIS</th>
        <th class="  text-center ">DOKUMEN ACUAN</th>
      	<th class="  text-center ">DESKRIPSI KETIDAKSESUAIAN</th>
      
        <th class="  text-center ">TIDAK SESUAI DENGAN</th>
        <th class="  text-center ">STATUS</th>
         <th class="  text-center ">AKSI</th>
    
    	</tr>


      <?php $no = 0;?>

    @foreach ($lks as $lk)
      <?php $no++ ;?> 

    <tr>  
      <td class="  text-center " style="min-width: 70px;" ><b>{{ $lk ->nolks}}</b> </td>
      <td > {{ $lk ->nama_penulis}} </td>
      <td style="white-space: pre-line;"> {{ $lk ->acuan}} </td>
      <td  style="white-space: pre-line; width: 410px;"> {{ $lk ->deskripsi }} </td>
    
      <td style="max-width: 320px; min-width: 300px;" > <b>SNI ISO/IEC 17065:2012 Klausul: </b><br>{{ $lk ->iec_2012 }} <br><br><b>ISO/IEC 17021-1:2015 Klausul:<br> </b> {{ $lk ->iec_2015 }} <br><br><b> ISO/IEC 17021-3:2017 Klausul: </b><br>  {{ $lk ->iec_2017 }} <br><br><b>(Dokumen SMM): </b><br>{{ $lk ->smm }}</td>



      <td style=" text-align: center; min-width: 120px;" >
          @if( $lk->status==NULL)
  
          @else
          <i class="fa fa-check"  style="  font-size: 1.2em;width: 1.7em;text-align: center;line-height: 0.8em; height: 1.1em; padding-top: 2px; padding-bottom: 2px; background: green;color: #fff;border-radius: 0.8em; " >  </i><br>
          {{$lk->status}}<br>
    
          @endif

          @if ($lk->status=="Terkirim")
             <i style="font-size: 10px;" > {{\Carbon\Carbon::parse ($lk ->tgl_terkirim)->format('d/m/Y')}}</i>
             @else
             {{""}}
          @endif 
      </td>

    


    <td style="text-align:center; min-width: 60px; padding-left: 3px; padding-right: 3px; " >

{{-- encrypt id lks --}}
        @php
        $lkid= \Crypt::encrypt($lk->id) ;
        @endphp

         @if( $lk->status==NULL)
          <a href="{{ route('editlks',$lkid) }}" style=" margin-bottom: 2px; "  data-toggle="tooltip" data-placement="top" title="Edit LKS"><button class="btn btn-primary "  >   <span  style="font-size: 13px " class=" fa fa-edit " ></span></button></a>
       
<?php    $nama= $auditor->nama; ?>
     
        <form class="form-horizontal" action="{{ route('kirimlks',$lk->id) }}" method="post" style="margin-top: 2px;">
          {{ csrf_field()}}      
              <input type="hidden" class="form-control" id="status" name="status" value="Terkirim">
              <input type="hidden" class="form-control" id="nama" name="nama" value="{{$nama}}"> 
               <input type="hidden" class="form-control" id="nlks" name="nolks" value="{{$no}}">          
              <button type="submit" style=""  class="btn  btn-success" data-toggle="tooltip" data-placement="top" title="Kirim LKS" onclick="return confirm('Setelah Terkirim, Anda tidak akan bisa mengubahnya lagi. yakin untuk mengirim LKS ini Ke Auditee ? ')" ><span  style="font-size: 13px " class=" fa fa-send " > </button>

              <input type="hidden" name="_method" value="PUT">
          </form>


 
           @else
          
          @endif
      </td>
    </tr>

    @endforeach
   
  </table>
  </div>
 <br><br> <i style="font-size: 14px;" >*Nomor LKS akan terisi setelah terkirim ke auditee, dan ditentukan berdasarkan urutan pengiriman</i> 
</div>

</body><br><br><br><br><br>


<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>
  
</html>
 @include('layout.footer')