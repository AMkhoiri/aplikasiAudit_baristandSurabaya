<!DOCTYPE html>
<html>
<head>

	@include('layout.head-css')
	@include('kepala.headerkepalabalai')
	<title>Kepala Balai</title>
</head>
<body>

<div class="container-fluid"  style="font-size: 12px; margin-top: 5px;"> 

{{-- Breadcrumb --}}

<div class="breadcrumb" style="margin-bottom: 5px;" >
  <div class="container-fluid">
   <div class="row">
     <div class="col-md-6" style="font-size: 20px; color: #3993d0; font-weight: bold; "> <span class="fa fa-folder-open" > </span>Data Pelaksana Audit</div>
      <div class="col-md-6" style=" text-align: right !important; " >  
      	 <i style="font-size: 16px; color: #3993d0; font-weight: bold;" > Tahun Audit :  {{$tahun_audit}} </i>
        
      </div>
    </div>
   </div>
  </div> 

{{-- .......... --}}

	<div class="table-responsive">
		<table class="table table-striped table-bordered  "  >
		  	
		     <tr  >
		      <th style="text-align:center"> NO</th>
		      <th style="text-align:center">Lokasi Audit</th>
		      <th style="text-align:center">Auditor</th>
		      <th style="text-align:center">Auditee</th> 
		    </tr>


		    <tr>
		   		<td style="text-align:center"> 1</td>
			    <td style=""> Top Manajemen</td>
		      	<td style=""> <?php $no = 0;?> @foreach ($auditor1 as $a)   <?php $no++ ;?>   {{$no}}.  {{$a->nama}} <br>@endforeach </td>
		      	<td style=""> <?php $no = 0;?> @foreach ($auditee1 as $a)   <?php $no++ ;?>   {{$no}}.  {{$a->nama}} <br>@endforeach</td>
		    </tr>

		     <tr>
		   		<td style="text-align:center"> 2 </td>
			    <td style=""> Sub Bag Tata Usaha</td>
		      	<td style="">  <?php $no = 0;?> @foreach ($auditor2 as $a)   <?php $no++ ;?>   {{$no}}.  {{$a->nama}} <br>@endforeach</td>
		      	<td style=""> <?php $no = 0;?> @foreach ($auditee2 as $a)   <?php $no++ ;?>   {{$no}}.  {{$a->nama}} <br>@endforeach</td>
		    </tr>

		     <tr>
		   		<td style="text-align:center"> 3 </td>
			    <td style=""> Seksi Pengembangan jasa Teknis</td>
		      	<td style="">  <?php $no = 0;?> @foreach ($auditor3 as $a)   <?php $no++ ;?>   {{$no}}.  {{$a->nama}} <br>@endforeach</td>
		      	<td style=""> <?php $no = 0;?> @foreach ($auditee3 as $a)   <?php $no++ ;?>   {{$no}}.  {{$a->nama}} <br>@endforeach</td>
		    </tr>

		     <tr>
		   		<td style="text-align:center"> 4</td>
			    <td style=""> Seksi Standarisasi Dan Sertifikasi / Operasional</td>
		      	<td style="">  <?php $no = 0;?> @foreach ($auditor4 as $a)   <?php $no++ ;?>   {{$no}}.  {{$a->nama}} <br>@endforeach</td>
		      	<td style=""> <?php $no = 0;?> @foreach ($auditee4 as $a)   <?php $no++ ;?>   {{$no}}.  {{$a->nama}} <br>@endforeach</td>
		    </tr>

		     <tr>
		   		<td style="text-align:center"> 5 </td>
			    <td style=""> Seksi Standarisasi Dan Sertifikasi / Mutu</td>
		      	<td style=""> <?php $no = 0;?> @foreach ($auditor5 as $a)   <?php $no++ ;?>   {{$no}}.  {{$a->nama}} <br>@endforeach</td>
		      	<td style="">  <?php $no = 0;?> @foreach ($auditee5 as $a)   <?php $no++ ;?>   {{$no}}.  {{$a->nama}} <br>@endforeach</td>
		    </tr>

		</table>
		</div>
</div>
<br><br><br>

</body>
</html>
@include('layout.footer')
