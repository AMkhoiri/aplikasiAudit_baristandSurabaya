<!DOCTYPE html>
<html>
<head>
	@include('layout.head-css')
	@include('kepala.headerkepalabalai')
	<title> Kepala Balai - Pilih Auditor</title>

	<style>
		.area{
			width: 320px;
		}

		.auditor{
			width: 480px;
		}
	</style>

</head>
<body>



<div class="container-fluid"  style="font-size: 12px; "> 

{{-- Breadcrumb --}}

<div class="breadcrumb" style="margin-bottom: 5px; margin-top: 6px;" >
  <div class="container-fluid">
   <div class="row">
     <div class="col-md-6" style="font-size: 20px; color: #3993d0; font-weight: bold; "> <span class="fa fa-folder-open" > </span> Pilih Auditor</div>
      <div class="col-md-6" style=" text-align: right !important; " >  
      	 @if (count($errors) > 0)
            <div class="alert alert-danger  " style=" align-content: center; margin-bottom: 0px; font-weight: bold;" >
              
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                
            </div>
            @endif

      </div>
                
    </div>
   </div>
  </div> 

{{-- .......... --}}

	
		<table class="table table-striped table-bordered  "  >
			<tr>
				<th class="area" >Area Audit</th>
				<th class="auditor">Auditor</th>
				<th>Pilih Auditor</th>
			</tr>

			<tr>
				<td>Top Manajemen</td>
				<td>
						 <?php $no = 0;?> 
					@foreach ($auditor1 as $a)
						<?php $no++ ;?>  
					<div class="row">
						<div class="col-md-1"> {{$no}} </div>
						<div class="col-md-9">{{$a->nama}}</div>
						<div class="col-md-2">
							<form action=" ../kepala/auditor/{{$a->id}}"  method="post" >     
				         	 <button  class="btn btn-danger btn-sm " style="margin-bottom: 3px;"  onclick="return confirm('Anda Yakin menghapus {{$a->nama}} dari Auditor ?')" type="submit" name="submit" data-toggle="tooltip" data-placement="top" title="Hapus" ><span class="fa fa-close" ></span> </button>
					          {{csrf_field() }}
					          <input type="hidden" name="_method" value="DELETE" >
		      				</form>
						</div>
					</div>
			      	@endforeach
				</td>
				
				<td>
					 <form action="{{ url('kepala/auditor/create') }}" method="post"> 
			        	 {{ csrf_field() }}
			 				<div class="row">
			 					<div class="col-md-10">
			 						<select class="custom-select " id="Sie" name="nama" required>
								        <option value="" >Pilih Auditor</option>
									  	@foreach ($pegawai as $p)
									        <option value="{{$p->nama}}">{{$p->nama}} </option>
									         <?php $id= $p->id; ?>
									    @endforeach
					     			</select>
		     			 			<input type="hidden" name="lokasi_audit" class="form-control" value="Top Manajemen"  required/><br>
			 					</div>
			 					<div class="col-md-2">
			 						<button  type="submit" class="btn btn-sm btn-primary " data-toggle="tooltip" data-placement="top" title="Simpan" ><span class="fa fa-save" ></span></button>    
			 					</div>
			 				</div>	       
			 		</form>
				</td>
				
			</tr>
		</table>


		<table class="table table-striped table-bordered  "  >
			<tr>
				<th class="area">Area Audit</th>
				<th class="auditor">Auditor</th>
				<th>Pilih Auditor</th>
			</tr>

			<tr>
				<td>Sub Bag Tata Usaha</td>
				<td>
						 <?php $no = 0;?> 
					@foreach ($auditor2 as $a)
						<?php $no++ ;?>  
					<div class="row">
						<div class="col-md-1"> {{$no}} </div>
						<div class="col-md-9">{{$a->nama}}</div>
						<div class="col-md-2">
							<form action=" ../kepala/auditor/{{$a->id}}"  method="post" >     
				         	 <button  class="btn btn-danger btn-sm " style="margin-bottom: 3px;"  onclick="return confirm('Anda Yakin menghapus {{$a->nama}} dari Auditor ?')" type="submit" name="submit" data-toggle="tooltip" data-placement="top" title="Hapus" ><span class="fa fa-close" ></span> </button>
					          {{csrf_field() }}
					          <input type="hidden" name="_method" value="DELETE" >
		      				</form>
						</div>
					</div>
			      	@endforeach
				</td>
				
				<td>
					 <form action="{{ url('kepala/auditor/create') }}" method="post"> 
			        	 {{ csrf_field() }}
			 				<div class="row">
			 					<div class="col-md-10">
			 						<select class="custom-select " id="Sie" name="nama" required>
								        <option value="" >Pilih Auditor</option>
									  	@foreach ($pegawai as $p)
									        <option value="{{$p->nama}}">{{$p->nama}} </option>
									         <?php $id= $p->id; ?>
									    @endforeach
					     			</select>
		     			 			<input type="hidden" name="lokasi_audit" class="form-control" value="Sub Bag Tata Usaha"  required/><br>
			 					</div>
			 					<div class="col-md-2">
			 						<button  type="submit" class="btn btn-sm btn-primary " data-toggle="tooltip" data-placement="top" title="Simpan" ><span class="fa fa-save" ></span></button>    
			 					</div>
			 				</div>	       
			 		</form>
				</td>
				
			</tr>
		</table>


				<table class="table table-striped table-bordered  "  >
			<tr>
				<th class="area">Area Audit</th>
				<th class="auditor" >Auditor</th>
				<th>Pilih Auditor</th>
			</tr>

			<tr>
				<td>Seksi Pengembangan jasa Teknis</td>
				<td>
						 <?php $no = 0;?> 
					@foreach ($auditor3 as $a)
						<?php $no++ ;?>  
					<div class="row">
						<div class="col-md-1"> {{$no}} </div>
						<div class="col-md-9">{{$a->nama}}</div>
						<div class="col-md-2">
							<form action=" ../kepala/auditor/{{$a->id}}"  method="post" >     
				         	 <button  class="btn btn-danger btn-sm " style="margin-bottom: 3px;"  onclick="return confirm('Anda Yakin menghapus {{$a->nama}} dari Auditor ?')" type="submit" name="submit" data-toggle="tooltip" data-placement="top" title="Hapus" ><span class="fa fa-close" ></span> </button>
					          {{csrf_field() }}
					          <input type="hidden" name="_method" value="DELETE" >
		      				</form>
						</div>
					</div>
			      	@endforeach
				</td>
				
				<td>
					 <form action="{{ url('kepala/auditor/create') }}" method="post"> 
			        	 {{ csrf_field() }}
			 				<div class="row">
			 					<div class="col-md-10">
			 						<select class="custom-select " id="Sie" name="nama" required>
								        <option value="" >Pilih Auditor</option>
									  	@foreach ($pegawai as $p)
									        <option value="{{$p->nama}}">{{$p->nama}} </option>
									         <?php $id= $p->id; ?>
									    @endforeach
					     			</select>
		     			 			<input type="hidden" name="lokasi_audit" class="form-control" value="Seksi Pengembangan jasa Teknis"  required/><br>
			 					</div>
			 					<div class="col-md-2">
			 						<button  type="submit" class="btn btn-sm btn-primary " data-toggle="tooltip" data-placement="top" title="Simpan" ><span class="fa fa-save" ></span></button>    
			 					</div>
			 				</div>	       
			 		</form>
				</td>
				
			</tr>
		</table>




				<table class="table table-striped table-bordered  "  >
			<tr>
				<th class="area">Area Audit</th>
				<th class="auditor">Auditor</th>
				<th>Pilih Auditor</th>
			</tr>

			<tr>
				<td>Seksi Standarisasi Dan Sertifikasi / Operasional</td>
				<td>
						 <?php $no = 0;?> 
					@foreach ($auditor4 as $a)
						<?php $no++ ;?>  
					<div class="row">
						<div class="col-md-1"> {{$no}} </div>
						<div class="col-md-9">{{$a->nama}}</div>
						<div class="col-md-2">
							<form action=" ../kepala/auditor/{{$a->id}}"  method="post" >     
				         	 <button  class="btn btn-danger btn-sm " style="margin-bottom: 3px;"  onclick="return confirm('Anda Yakin menghapus {{$a->nama}} dari Auditor ?')" type="submit" name="submit" data-toggle="tooltip" data-placement="top" title="Hapus" ><span class="fa fa-close" ></span> </button>
					          {{csrf_field() }}
					          <input type="hidden" name="_method" value="DELETE" >
		      				</form>
						</div>
					</div>
			      	@endforeach
				</td>
				
				<td>
					 <form action="{{ url('kepala/auditor/create') }}" method="post"> 
			        	 {{ csrf_field() }}
			 				<div class="row">
			 					<div class="col-md-10">
			 						<select class="custom-select " id="Sie" name="nama" required>
								        <option value="" >Pilih Auditor</option>
									  	@foreach ($pegawai as $p)
									        <option value="{{$p->nama}}">{{$p->nama}} </option>
									         <?php $id= $p->id; ?>
									    @endforeach
					     			</select>
		     			 			<input type="hidden" name="lokasi_audit" class="form-control" value="Seksi Standarisasi Dan Sertifikasi / Operasional"  required/><br>
			 					</div>
			 					<div class="col-md-2">
			 						<button  type="submit" class="btn btn-sm btn-primary " data-toggle="tooltip" data-placement="top" title="Simpan" ><span class="fa fa-save" ></span></button>    
			 					</div>
			 				</div>	       
			 		</form>
				</td>
				
			</tr>
		</table>




				<table class="table table-striped table-bordered  "  >
			<tr>
				<th class="area">Area Audit</th>
				<th class="auditor">Auditor</th>
				<th>Pilih Auditor</th>
			</tr>

			<tr>
				<td>Seksi Standarisasi Dan Sertifikasi / Mutu</td>
				<td>
						 <?php $no = 0;?> 
					@foreach ($auditor5 as $a)
						<?php $no++ ;?>  
					<div class="row">
						<div class="col-md-1"> {{$no}} </div>
						<div class="col-md-9">{{$a->nama}}</div>
						<div class="col-md-2">
							<form action=" ../kepala/auditor/{{$a->id}}"  method="post" >     
				         	 <button  class="btn btn-danger btn-sm " style="margin-bottom: 3px;"  onclick="return confirm('Anda Yakin menghapus {{$a->nama}} dari Auditor ?')" type="submit" name="submit" data-toggle="tooltip" data-placement="top" title="Hapus" ><span class="fa fa-close" ></span> </button>
					          {{csrf_field() }}
					          <input type="hidden" name="_method" value="DELETE" >
		      				</form>
						</div>
					</div>
			      	@endforeach
				</td>
				
				<td>
					 <form action="{{ url('kepala/auditor/create') }}" method="post"> 
			        	 {{ csrf_field() }}
			 				<div class="row">
			 					<div class="col-md-10">
			 						<select class="custom-select " id="Sie" name="nama" required>
								        <option value="" >Pilih Auditor</option>
									  	@foreach ($pegawai as $p)
									        <option value="{{$p->nama}}">{{$p->nama}} </option>
									         <?php $id= $p->id; ?>
									    @endforeach
					     			</select>
		     			 			<input type="hidden" name="lokasi_audit" class="form-control" value="Seksi Standarisasi Dan Sertifikasi / Mutu"  required/><br>
			 					</div>
			 					<div class="col-md-2">
			 						<button  type="submit" class="btn btn-sm btn-primary " data-toggle="tooltip" data-placement="top" title="Simpan" ><span class="fa fa-save" ></span></button>    
			 					</div>
			 				</div>	       
			 		</form>
				</td>
				
			</tr>
		</table>



</div>


</body>
</html>
@include('layout.footer')