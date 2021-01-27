
 @extends('admin/layout/cmaster')




 <style>
   
  .btn{
    font-family: 'Poppins', sans-serif;
  }


 </style>

  @section('isi')


  {{-- Form Modal Input pegawai--}}

<div class="modal fade" id="inputModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content" style="border-radius: 14px;">
      <div class="modal-header" style="background-color: #2E86C1;" >
        <h5 class="modal-title" id="exampleModalLabel" style="color: #fff; "> <span class="fa fa-pencil" >  </span>&nbsp;&nbsp;  Tambah Pegawai </h5>
        <button type="button" class="close" data-dismiss="modal" style="color: #fff" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     <div class="modal-body">

      <form class="form-horizontal" action="{{ url('admin/datapegawai') }}" method="post" >
        {{ csrf_field() }}

         <div class="form-group">
          <label class="control-label" for="nama">Nama Pegawai : </label>                
            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
        </div>

         <div class="form-group">
          <label class="control-label " for="nip">NIP :</label>         
            <input type="text" class="form-control" id="nip" placeholder="Masukkan NIP" name="nip" required>     
        </div>

       <div class="form-group ">
          <label class=" control-label " for="Sie">Sie :</label>  
            <select class="custom-select " id="Sie" name="sie" required>
              <option value="">Pilih Sie...</option>
              <option value="Top Manajemen">Top Manajemen</option>
              <option value="Sub Bag Tata Usaha">Sub Bag Tata Usaha</option>
              <option value="Seksi Pengembangan jasa Teknis">Seksi Pengembangan jasa Teknis</option>
              <option value="Seksi Standarisasi Dan Sertifikasi">Seksi Standarisasi Dan Sertifikasi</option>
             <!--  <option value="Seksi Standarisasi Dan Sertifikasi / Mutu">Seksi Standarisasi Dan Sertifikasi / Mutu</option> -->
              <option value="Seksi Program Dan Pengembangan Kompetensi">Seksi Program Dan Pengembangan Kompetensi</option>
              <option value="Seksi Teknologi Industri">Seksi Teknologi Industri</option>
          </select>
        </div>

        <div class="form-group">
          <label class="control-label " for="jabatan">Jabatan :</label>            
            <select class="custom-select " id="jabatan" name="jabatan" required>
              <option value="">Pilih Jabatan...</option>
              <option value="Kepala Seksi">Kepala Seksi</option>
              <option value="Pelaksana">Pelaksana</option>
              <option value="Lainnya">Lainnya</option>
          </select>        
        </div>
         <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
             </div>
      </div>
    </div>
  </div>

{{-- ............ --}}





{{-- Form Modal edit pegawai --}}

<div class="modal fade" id="editModalPegawai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content" style="border-radius: 14px;">
      <div class="modal-header" style="background-color: #2E86C1;" >
        <h5 class="modal-title" id="exampleModalLabel" style="color: #fff"> <span class="fa fa-edit" > </span>&nbsp;&nbsp;  Edit Pegawai </h5>
        <button type="button" class="close" data-dismiss="modal" style="color: #fff" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     <div class="modal-body">

      <form  method="post" action=" "  enctype="multipart/form-data">  
               {{ csrf_field()}}  

                <input type="hidden" name="id" id="id" >  
           <div class="form-group">
              <label class="control-label" for="nama">Nama Pegawai : </label>                
                <input type="text" class="form-control" id="editnama" placeholder="Masukkan Nama" name="nama">
            </div>

             <div class="form-group">
              <label class="control-label " for="nip">NIP :</label>         
                <input type="text" class="form-control" id="editnip" placeholder="Masukkan NIP" name="nip" required>     
            </div>

           <div class="form-group ">
              <label class=" control-label " for="Sie">Sie :</label>  
                <select class="custom-select " id="editsie" name="sie" required>
                  <option value="">Pilih Sie...</option>
                  <option value="Top Manajemen">Top Manajemen</option>
                  <option value="Sub Bag Tata Usaha">Sub Bag Tata Usaha</option>
                  <option value="Seksi Pengembangan jasa Teknis">Seksi Pengembangan jasa Teknis</option>
                  <option value="Seksi Standarisasi Dan Sertifikasi">Seksi Standarisasi Dan Sertifikasi</option>
                 <!--  <option value="Seksi Standarisasi Dan Sertifikasi / Mutu">Seksi Standarisasi Dan Sertifikasi / Mutu</option> -->
                  <option value="Seksi Program Dan Pengembangan Kompetensi">Seksi Program Dan Pengembangan Kompetensi</option>
                  <option value="Seksi Teknologi Industri">Seksi Teknologi Industri</option>
              </select>
            </div>

            <div class="form-group">
              <label class="control-label " for="jabatan">Jabatan :</label>            
                <select class="custom-select " id="editjabatan" name="jabatan" required>
                  <option value="">Pilih Jabatan...</option>
                  <option value="Kepala Seksi">Kepala Seksi</option>
                  <option value="Pelaksana">Pelaksana</option>
                  <option value="Lainnya">Lainnya</option>
              </select>        
            </div>
             <input type="hidden" name="_method" value="PUT">
             <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
     </div>
    </div>
  </div>
</div>

{{-- ............ --}}




<div class="container-fluid"  style="font-size: 12px; "> <br>

 <div class="card">
      <div class="card-body">
        <div class="header-title">  
          <div class="row" > 
            <div class="col-md-6"><h4> Data Pegawai</h4></div>
            <div class="col-md-6" style=" text-align: right !important; " >
              <i style="color: #3993d0; font-weight: bold; font-size: 14px; margin-right: 20px; " >Total Data:  {{$totaldata}} </i> 
              <a href="#"><button class="btn btn-primary btn-xs "  style=" width: 125px; padding-top: 6px;padding-bottom:  6px; font-size: 11px; " type="button" data-toggle="modal" data-target="#inputModal" data-whatever="@getbootstrap"  >  <span class=" fa fa-plus " >  Tambah Pegawai</span> </button></a>
            </div>
          </div> 
        </div>
        <div class="single-table">
              <div class="table-responsive">
                  <table class="table table-hover text-center" style="font-size: 12px !important; ">
                    <thead class="text-uppercase">
  	
         <tr  >
              <th style="text-align:center">NO</th> 
              <th style="text-align:center">Nama</th>
              <!-- <th style="text-align:center">Jenis Kelamin</th> -->
              <th style="text-align:center">NIP</th>
              <th style="text-align:center">SIE</th>
              <th style="text-align:center">Jabatan</th>
              <!-- <th style="text-align:center">Email</th> -->
              <th style="text-align:center">Aksi</th>   
        </tr>

</thead>
<?php $no = 0;?>
   @foreach ($pegawai as $p)
 <?php $no++ ;?>  
    
        <tr>
          
              <td style="text-align:center">  {{$no}} </td>
              <td style=""> {{$p ->nama}} </td>
            <!--   <td style=""> {{$p ->jenis_kelamin}} </td> -->
              <td style="text-align:center">{{$p ->nip}}  </td>
              <td style=""> {{$p ->sie}}  </td>
              <td style=""> {{$p ->jabatan}} </td>
              <td style="text-align:right; width: 173px; " >

                 
                     
                        <a href="#" onclick="editForm({{$p->id}})" ><button class="btn btn-xs btn-info " data-toggle="tooltip" data-placement="top" title="Edit pegawai" style=" display: inline; font-size: 13px;"><span class=" fa fa-edit " ></span></button></a> 
                    

                     
                      <form action=" {{ route('hapuspegawai',$p->id) }}"  method="post" style="display: inline;" >     
                          <button  class="btn btn-danger btn-xs " style=" font-size: 13px; "   onclick="return confirm('Anda Yakin Untuk Menghapus {{$p->nama}} ?')" type="submit" name="submit" value="Hapus" data-toggle="tooltip" data-placement="top" title="Hapus pegawai"><span class="fa fa-trash" ></span></button>
                          {{csrf_field() }}          
                          <input type="hidden" name="_method" value="DELETE" >
                      </form> 
              
                 
                  
              </td>

        </tr>

    @endforeach
  </table>
  </div>

  <br><br>
  <br><br>
</div>
</div></div> </div>


{{-- <script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>
 --}}

@endsection



@section('js')


<script>
  
// tampil modal edit
    function editForm(id) 

    {

      $('#editModalPegawai form')[0].reset();
      $.ajax({
        url: "{{ url('admin/datapegawai')}}"+'/'+id+"/edit",
        type: "GET",
        dataType: "JSON",

        success: function(data) {
          
          $('#editModalPegawai').modal('show');

          $('#id').val(data.id);
          $('#editnama').val(data.nama);
          $('#editnip').val(data.nip);
          $('#editsie').val(data.sie);
          $('#editjabatan').val(data.jabatan);
        },
        error : function(){
          alert("nothing data");
        }
      });
    }
// ........

// update data

 $(function(){
            $('#editModalPegawai form').on('submit', function (e) {
                if (!e.isDefaultPrevented()){
                    var id = $('#id').val();
                  
                    $.ajax({
                        url : "{{ url('admin/datapegawai')}}"+'/'+id, 
                        type : "POST",
                        data : $('#editModalPegawai form').serialize(),
                        success : function($data) {
                            $('#editModalPegawai').modal('hide');
                            location.reload();
                        },
                        error : function(){
                            alert('Oops! Something Error!');
                        }
                    });
                    return false;
                }
            });
        });


// .............



</script>


@endsection
