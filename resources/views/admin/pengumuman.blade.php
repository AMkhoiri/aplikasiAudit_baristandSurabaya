 @extends('admin/layout/cmaster')

 @section('isi')





{{-- Form Modal Input pegawai--}}

<div class="modal fade" id="inputModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content" style="border-radius: 14px;">
      <div class="modal-header" style="background-color: #2E86C1;" >
        <h5 class="modal-title" id="exampleModalLabel" style="color: #fff"> <span class="fa fa-pencil" >  </span>&nbsp;&nbsp; Tulis Pengumman </h5>
        <button type="button" class="close" data-dismiss="modal" style="color: #fff" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     <div class="modal-body">

      <form class="form-horizontal" action="{{ route('storepengumuman') }} " method="post" >
        {{ csrf_field() }}

         <div class="form-group">
           <label for="akar">Isi Pengumuman</label>
        <textarea cols="70" rows="5" class="form-control" placeholder="Tulis pengumuman untuk ditampilkan di halaman awal aplikasi" name="pengumuman"  required></textarea>
        </div>


     
         <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
        </div>
      </form>
             </div>
      </div>
    </div>
  </div>

{{-- ............ --}}


<div class="container-fluid">

<br>
 <div class="card">
      <div class="card-body" style="font-size: 12px !important;">
        <div class="header-title">  
          <div class="row" > 
            <div class="col-md-6"><h4> Data Pengumuman</h4></div>
            <div class="col-md-6" style=" text-align: right !important; " >
               <a href="#"><button class="btn btn-primary btn-sm "  style="  font-size: 12px; margin-top: 4px;" type="button" data-toggle="modal" data-target="#inputModal" data-whatever="@getbootstrap"  >  <span class=" fa fa-bullhorn " >  Tulis Pengumuman</span> </button></a>
            </div>
          </div> 
        </div>
        <div class="single-table">

<div class="table-responsive">
      <table class="table   " style="font-size: 12px;">  

		<tr>
			
			<th style=" text-align: center;  " >NO</th>
			<th style=" text-align: center; " >ISI PENGUMUMAN</th>
			<th style=" text-align: center; ; " >TANGGAL DIBUAT</th>
			<th style=" text-align: center;  " >STATUS</th>
			<th style=" text-align: center;  " >AKSI</th>
		</tr>

		<?php $no = 0;?>
 
		@foreach ($pengumuman as $p)
		<?php $no++ ;?> 
	
			<tr>
				
				<td style=" text-align: center; "> {{$no}}</td>
				<td> {{$p->pengumuman}}</td>
				<td style=" text-align: center; "> {{\Carbon\Carbon::parse ($p->created_at)->format('d - M - Y')}}</td>
				<td style=" text-align: center; "> {{$p->status}}</td>
				<td style=" text-align: center; width: 130px; ">

					@if ($p->status==NULL)

						<form class="form-horizontal" action="{{ route('publishpengumuman',$p->id) }}" method="post" style=" display: inline; margin-right: 3px;">
	                    	{{ csrf_field()}}     

	                             <input type="hidden" class="form-control" id="pengumuman" name="pengumuman" value="Published">
	                        	<button type="submit" style=" font-size: 12px; " onclick="return confirm('Anda Yakin Untuk Mem-Publish Pengumuman Ini ?')"  class="btn btn-xs btn-success"  ><span class=" fa fa-arrow-up " > </span></button>

	                        <input type="hidden" name="_method" value="PUT">
                    </form>
						
					@endif
					
					 <form action=" {{ route('hapuspengumuman',$p->id) }}"  method="post" style="display: inline;" >     
                         
                           <button  class="btn btn-danger btn-xs " style=" font-size: 12px; "   onclick="return confirm('Anda Yakin Untuk Menghapus Pengumuman Ini ?')" type="submit" name="submit" value="Hapus"><span class="fa fa-trash" ></span></button>
                          {{csrf_field() }}          
                          <input type="hidden" name="_method" value="DELETE" >
            		 </form> 

				</td>
			</tr>


		@endforeach

	</table>
  </div>

		</div>
	</div>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br>

@endsection

</div>

<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>



