<!DOCTYPE html>
<html>
<head>

 @include('layout.head-css')
 @include('auditee.headerauditee')

<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400&display=swap" rel="stylesheet">


</head>
<body>
  
<div class=" container-fluid" style=" font-size: 12px ; " > 

    {{-- Breadcrumb --}}

<div class="breadcrumb" style="margin-bottom: 5px;" >
  <div class="container-fluid">
     <div  style="font-size: 20px; color: #3993d0; font-weight: bold; "> <span class="fa fa-folder-open" > </span> Daftar Laporan Ketidaksesuaian</div>
   </div>
  </div> 

{{-- .......... --}}


<div class="table-responsive">
		<table class="table  table-striped table-bordered w-auto "  >

    	<tr>

      	<th style="text-align:center;">No LKS</th>
        <th style="text-align:center;">TANGGAL TERBIT</th>
        <th style="text-align:center;">PENGIRIM</th>
        <th style="text-align:center;">DOKUMEN ACUAN</th>
      	<th style="text-align:center;">DESKRIPSI KETIDAKSESUAIAN</th>
      	<th style="text-align:center; width: 240px; ">TIDAK SESUAI DENGAN</th>
        <th style="text-align:center;">AKSI</th>
    
    	</tr>

@foreach ($lks as $lk)
    <tr>  

        <td style="text-align:center; width: 55px; "> {{ $lk -> nolks}} </td>
        <td style="text-align:center; width: 100px; ">  {{\Carbon\Carbon::parse ($lk->tgl_terkirim)->format('d-m-Y')}}</td>
        <td style="text-align:center; width: 55px; "> {{ $lk ->nama_pengirim}} </td>
        <td style="text-align:left; white-space: pre-line;"> {{ $lk -> acuan}} </td>
        <td style="text-align:left; width: 380px; white-space: pre-line;"> {{ $lk -> deskripsi }} </td>
        <td style="text-align:left; min-width: 300px;"><b>SNI ISO/IEC 17065:2012 Klausul :</b><br> {{ $lk -> iec_2012 }} <br><br>
                                       <b>ISO/IEC 17021-1:2015 Klausul :</b><br> {{ $lk -> iec_2015 }} <br><br>
                                       <b>ISO/IEC 17021-3:2017 Klausul :</b><br> {{ $lk -> iec_2017 }} <br><br>
                                       <b>Dokumen SMM :</b><br> {{ $lk -> smm }} </td>
        <td style="text-align:center; width: 100px; padding-left: 3px; padding-right: 3px; " >
           @if( $lk->status=="Terkirim")
              @php 
              $lkid= \Crypt::encrypt($lk->id) ; 
              @endphp
           <a href="{{ route('buattindakan',$lkid) }}"><button class="btn btn-info btn-sm" style=" font-size: 11px; "><span class=" fa fa-pencil " >  Tindakan</span></button></a>
       
         @else
        <p class=" fa fa-check " style="font-size: 1.2em; width: 1.7em; height: 1.1em; padding-top: 2px; padding-bottom: 2px; text-align: center;line-height: 0.8em; background: green; color: #fff; border-radius: 0.8em;" >  </p> <br> <span> {{$lk->status}} </span>
         @endif
        	
        </td>

    </tr>

@endforeach
   
  </table>
  </div>

</div>

</body>
</html>
@include('layout.footer')