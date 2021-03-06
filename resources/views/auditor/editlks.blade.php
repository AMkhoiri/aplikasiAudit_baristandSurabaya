<!DOCTYPE html>
<html>
<head>

 @include('layout.head-css')
 @include('auditor.headerauditor')

	<title>Buat LKS</title>

	<style>
	body {
	  background: #EEF2F7;
	}
	.form-group{
		padding-right: 20px;
		padding-left: 20px;
	}

	.control-label{
		font-weight: bold;
		color: #676767;
	}
	.card{
		width: 45rem; border:none !important; border-radius: 10px;
	}
	.content-card{
		box-shadow:
		  0 2.8px 2.2px rgba(0, 0, 0, 0.034),
		  0 6.7px 5.3px rgba(0, 0, 0, 0.048),
		  0 12.5px 10px rgba(0, 0, 0, 0.06),
		  0 22.3px 17.9px rgba(0, 0, 0, 0.072),
		  0 41.8px 33.4px rgba(0, 0, 0, 0.086),
		  0 100px 80px rgba(0, 0, 0, 0.12);

		  background: white !important;
		  /*border-radius: 5px;*/
	}

	.content-card-header{
			background-color: #2E86C1; 
			font-weight: bold; 
			padding-top: 20px; 
			padding-bottom: 15px;  
			font-size: 14px; 
			text-align: center;   
			color:white;
	}


		::-webkit-input-placeholder {
		   font-size: 25px;
		}

		:-moz-placeholder { /* Firefox 18- */
		      font-size: 25px;
		}

		::-moz-placeholder {  /* Firefox 19+ */
		      font-size: 25px;
		}

		/* Overriding styles */

		::-webkit-input-placeholder {
		   font-size: 13px!important;
		}

		:-moz-placeholder { /* Firefox 18- */
		      font-size: 13px!important;
		}
		::-moz-placeholder {  /* Firefox 19+ */
		      font-size: 13px!important;
		}

		textarea { font-size: 13px !important; }
		input { font-size: 13px !important; }



</style>
</head>
<body>
<br>
	<div class="container d-flex justify-content-center"  style="font-size: 12px;   ">
		<div class="card" style=" ">
		<div class="content-card-header" style="">
			<span class="fa fa-edit" >&nbsp;&nbsp;</span>
			FORM EDIT LAPORAN KETIDAKSESUAIAN
		</div> 

		<div class="content-card" style="">

<br>

	  <form class="form-horizontal" action="../../../auditor/daftarlks/{{$lks->id}}" method="post">
	  	{{ csrf_field()}}
		   
		  

		    <div class="form-group  ">
		      <label class="control-label " for="acuan">Dokumen Acuan  </label>
		     
		      	<textarea cols="10" rows="4" spellcheck="false" class="form-control border" id="acuan" name="acuan">{{$lks->acuan}}</textarea>
		     
		    </div>

		    <div class="form-group ">
		      <label class="control-label " for="deksripsi">Deskripsi Ketidaksesuaian </label>
		      
		      	<textarea cols="50" rows="6" spellcheck="false" class="form-control border" id="deskripsi" name="deskripsi">{{$lks->deskripsi}}</textarea>
		     
		    </div>


		     <div class="form-group ">
		      <label class="control-label " for="iec_2012">SNI ISO/IEC 17065:2012 Klausul </label>
		      
		      	<select class="custom-select border-0" id="iec_2012" name="iec_2012" >
					        <option value="{{$lks ->iec_2012}}" selected >{{$lks ->iec_2012}}</option>
					  	@foreach ($klausul2012 as $p)
					        <option value="{{$p->klausul}}">{{$p->klausul}}</option>		       
					    @endforeach
		     	</select>

	
		    </div>

		    <div class="form-group ">
		      <label class="control-label " for="iec_2015"> ISO/IEC 17021-1:2015 Klausul </label>
		      
		      	<select class="custom-select border-0" id="iec_2015" name="iec_2015" >
					        <option value="{{$lks ->iec_2015}}" selected>{{$lks ->iec_2015}}</option>
					  	@foreach ($klausul2015 as $p)
					        <option value="{{$p->klausul}}">{{$p->klausul}}</option>		       
					    @endforeach
		     	</select>
		    
		    </div>

		    <div class="form-group ">
		      <label class="control-label " for="iec_2017"> ISO/IEC 17021-3:2017 Klausul </label>
		      
		      	<select class="custom-select border-0" id="iec_2017" name="iec_2017" >
					        <option value="{{$lks ->iec_2017}}" selected>{{$lks ->iec_2017}}</option>
					  	@foreach ($klausul2017 as $p)
					        <option value="{{$p->klausul}}">{{$p->klausul}}</option>		       
					    @endforeach
		     	</select>
		    
		    </div>
		    

		    <div class="form-group ">
		      <label class="control-label " for="smm">Tidak Sesuai Dengan (Dokumen SMM) </label>
		      	<input type="text" class="form-control border" id="smm" name="smm" value="{{$lks->smm}}">
		    </div>

		    <div class="form-group " style="align-content: right!important ; ">  
		    	   
		      	<div class="row"> 
		      		<div class="col-md-6">
		      			 <a  class="btn  btn-block border border-dark" href="{{url ('auditor/daftarlks')}} " style="color: black"  >  Batal</span></a>
		      		</div>
		      		<div class="col-md-6">
		      			 <button type="submit" class="btn btn-block " style=" background-color: #2E86C1; color: white;" > Simpan</span></button>
		      			 <input type="hidden" name="_method" value="PUT">
		      		</div>
		      	</div>
		       
		    </div> 


		</form>
	</div>
	</div>
	</div>


</body>

</html>
@include('layout.footer')