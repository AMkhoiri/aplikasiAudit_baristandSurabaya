<!DOCTYPE html>
<html>
<head>

 @include('layout.head-css')
 @include('auditor.headerauditor')

	<title>Form Verifikasi</title>

	<style>
		table tr th{
			text-align: center;
		}
		textarea { font-size: 13px !important; }
	</style>

</head>
<body>

<div class="container-fluid" style=" font-size: 12px;">


    {{-- Breadcrumb --}}

<div class="breadcrumb" style="margin-bottom: 5px;" >
  <div class="container-fluid">
     <div  style="font-size: 20px; color: #3993d0; font-weight: bold; "> <span class="fa fa-file" > </span> Laporan Ketidaksesuaian :</div>
   </div>
  </div> 

{{-- .......... --}}

	<table class="table table-responsive table-striped table-bordered"  >

	
	    <tr>
	      <th >No LKS</th>
	      <th >Deskripsi Ketidaksesuaian</th>
	      <th >Dokumen Acuan</th>
	      <th >SNI ISO/IEC 17065:2012 Klausul</th>
	      <th >SNI ISO/IEC 17021-1:2015 Klausul</th>
	      <th >SNI ISO/IEC 17021-1:2017 Klausul</th>
	      <th >(Dokumen SMM)</th>
	    </tr>

	<?php $no = 0;?>
    <?php $no++ ;?>

	    <tr>  
	      <td > {{$no}} </td>
	      <td style="max-width: 320px; min-width: 290px;" >  {{$lks->deskripsi}}</td>
	      <td style="max-width: 240px; min-width: 200px;"> {{$lks->acuan}} </td>
	      <td > {{$lks->iec_2012}} </td>
	      <td >  {{$lks->iec_2015}} </td>
	      <td >   {{$lks->iec_2017}}</td>
	      <td >   {{$lks->smm}}</td>
   		</tr>
	
   	<?php  $id_lks= $lks->id ?>

	</table><br>

    {{-- Breadcrumb --}}

<div class="breadcrumb" style="margin-bottom: 5px;" >
  <div class="container-fluid">
     <div  style="font-size: 20px; color: #3993d0; font-weight: bold; "> <span class="fa fa-file" > </span> Tindakan Perbaikan :</div>
   </div>
  </div> 

{{-- .......... --}}
	<div class="table-responsive">
	<table class="table  table-striped  table-bordered">
		<tr>
			<th>Akar Permasalahan</th>
	        <th>Tindakan Yang Dilakukan</th>
	        <th>Tindakan Pencegahan</th>
	      	<th>Bukti</th>
		</tr>

@foreach ($tindakan as $tdk)
		<tr>
	      <td > {{ $tdk ->akar }} </td>
	      <td > {{ $tdk ->dilakukan }} </td>
	      <td > {{ $tdk ->pencegahan }} </td>
	      <td style="text-align: center;" > <img style="width: 20px;" src="{{ asset('audit/img/document.png')}}" alt=""> <br>  {{ $tdk ->title}} <br><br>

	      

	      </td>
  		</tr>
  		

	</table>
	</div>
	<br>

    {{-- Breadcrumb --}}

<div class="breadcrumb" style="margin-bottom: 5px;" >
  <div class="container-fluid">
     <div  style="font-size: 20px; color: #3993d0; font-weight: bold; margin-bottom: 5px; "> <span class="fa fa-pencil" > </span> Catatan Verifikasi :</div>
   
  
{{-- .......... --}}

	<form class="form-horizontal" action="{{route ('updateverifikasi', $tdk->id_tindakan) }}" method="post">
		{{ csrf_field()}}

		<div class="form-group  ">	
			<textarea cols="50" rows="5" spellcheck="false" class="form-control" id="catver" placeholder="Masukkan Catatan" name="catver">{{$tdk->catatan_tindakan}} </textarea> <br>

				<a  class="btn btn-sm btn-secondary " href="{{route ('daftartindakan')}} " style=" width: 120px; " ><span class=" fa fa-arrow-left " >  Batal</span></a>		
				<button type="submit" class="btn btn-success btn-sm" style="width: 120px;"  ><span class=" fa fa-save " >  Simpan</span></button>
					<input type="hidden" name="_method" value="PUT">					

		</div>
	</div> 
</div>
		<br>

		@endforeach
	</form>
	</div>

</body><br><br><br><br><br>
</html>
@include('layout.footer')