<!DOCTYPE html>
<html>
<head>
	@include('layout.head-css')

	<title>Lembar Pertanyaan</title>
</head>
<body>

	<div class="container" >  <br><br>

		  <div class="form row">
      <div class="col-md-3 border border-dark  justify-content-center " style="  " >
        <img  class="thumbnail"  style=" max-width: 190px; margin-left: 16px; "  src=" {{ asset('audit/img/kemenperin.png')}}" alt="">    
      </div>
        <div class="col-md-9 border border-dark">     
          <h5 style=" text-align: center;  padding-top: 12px;" >  LEMBAGA SERTIFIKASI <br> BARISTAND INDUSTRI SURABAYA</h5> 
      </div>
    </div>
      <br><br>

      <h5 class=" text-center " >DAFTAR PERTANYAAN</h5> <br>
      <h6>Ruang Lingkup/Lokasi Audit &emsp;  &ensp;: &emsp;  {{Auth::user()->lokasi}} </h6>
       <h6>Dokumen Acuan &emsp; &emsp; &emsp; &ensp; &ensp; &ensp; &ensp; :  &emsp; {{$acuan}} </h6>
       <h6>Auditee &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &ensp; &ensp; &ensp;: &emsp;  {{$auditee}}</h6><br>


      <table class=" table table-bordered " >  

<thead class="thead-light">

      	<tr>
      		<th class=" text-center " >No</th>
      		<th class=" text-center ">Pertanyaan</th>
      		<th class=" text-center ">Kategori</th>
      		<th class=" text-center ">Catatan Audit</th>

      	</tr>
      	</thead> 

      	<?php $no = 0;?>

		@foreach ($pertanyaan as $per)
		<?php $no++ ;?>
      	<tr>
      		<td class=" text-center ">{{$no}} </td>
      		<td style=" width: 500px;white-space: pre-line; " >{{ $per->pertanyaan }}</td>
      		<td class=" text-center "> {{$per->kategori}} </td>
      		<td style=" width: 500px;white-space: pre-line; ">{{$per->catatan}} </td>

      	</tr>
      	@endforeach

      </table>
      <br><br>

      <div class="row" > 
      	<div class=" col-md-9 " > </div>
      	<div class=" col-md-3 " >Surabaya, <br> Auditor</div>

      </div>
      
      <br><br><br><br><br>
  <div style="color: #838282;  font-size: 16px;" > FM - 8.4.03</div>
      <br><br><br><br><br><br><br><br><br><br>

	</div>

</body>
</html>