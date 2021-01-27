<!DOCTYPE html>
<html>
<head>
	
 	@include('auditee.headerauditee')

	
	<title></title> 
</head>
<body>
<div class=" container-fluid" style=" font-size: 12px ; " > 
	
{{-- Breadcrumb --}}

<div class="breadcrumb " style="margin-bottom: 5px;  margin-top: 5px; " >
  <div class="container-fluid">
   <div class="row">
     <div class="col-md-8" style="font-size: 20px; color: #676767; font-weight: bold; "> <span class="fa fa-file-archive-o" > </span> Arsip Data Audit</div>
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
            <button type="submit" style="display: inline; font-size: 12px; padding: 6px 16px 6px 16px; background-color: #3993d0; color: #fff;" class="btn btn-sm"><span class="fa fa-search" > Cari Data </span></button>
          </div>
        </div>
       </form>
          

      </div>
    </div>
   </div>
  </div> 

{{-- .......... --}}
</div>

</body>
<div style="margin-bottom: 500px;" ></div>
</html>
  @include('layout.footer')