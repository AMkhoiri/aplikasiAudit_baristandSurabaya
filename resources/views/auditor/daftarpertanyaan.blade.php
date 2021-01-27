<!DOCTYPE html>
<html>
<head>

 @include('layout.head-css')
 @include('auditor.headerauditor')


	<title>Daftar Pertanyaan</title>

  <style>
    textarea { font-size: 13px !important; }
    input{ font-size: 13px !important; }
    select { font-size: 13px !important; }

  </style>


</head>
<body>

{{-- Form Modal Input --}}

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content" style="border-radius: 14px;">
              <div class="modal-header" style="background-color: #2E86C1;" >
                <h5 class="modal-title" id="exampleModalLabel" style="color: #fff"> <span class="fa fa-pencil" >  </span>&nbsp;&nbsp;  Tulis Pertanyaan </h5>
                <button type="button" class="close" data-dismiss="modal" style="color: #fff" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
             <div class="modal-body">

            <form  method="post" action="{{url ('auditor/daftarpertanyaan')}}"  enctype="multipart/form-data">  
               {{ csrf_field()}}        

              <div class="form-group">
                  <label class="control-label " for="pertanyaan">Pertanyaan : </label>
                    <textarea cols="50" rows="4" class="form-control" spellcheck="false" id="pertanyaan" placeholder="Masukkan Pertanyaan" name="pertanyaan" required></textarea>
              </div>
              <div class="form-group ">
                  <label class=" control-label " for="kategori">Kategori : </label>
                    <select class="custom-select " id="kategori" name="kategori" required>
                      <option value="" selected>Pilih...</option>
                      <option value="OK">OK</option>
                      <option value="NOK">NOK</option>
                    </select>
              </div><br>  
              <div class="form-group ">
                <label class="control-label " for="catatan">Catatan : </label>            
                    <textarea cols="50" rows="4" class="form-control" spellcheck="false" id="catatan" placeholder="Masukkan Catatan" name="catatan"></textarea>
              </div>
 
                <input type="hidden" name="lokasi" value=" {{$auditor->lokasi_audit}} " >

 
              </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </form>
             </div>
      </div>
    </div>
    
{{-- ............ --}}




{{-- Form Modal edit --}}

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content" style="border-radius: 14px;">
              <div class="modal-header" style="background-color: #2E86C1;" >
                <h5 class="modal-title" id="exampleModalLabel" style="color: #fff"> <span class="fa fa-edit" > </span>&nbsp;&nbsp;  Edit Pertanyaan </h5>
                <button type="button" class="close" data-dismiss="modal" style="color: #fff" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
             <div class="modal-body">

    
            <form  method="post" action=" "  enctype="multipart/form-data">  
               {{ csrf_field()}}    
        <input type="hidden" name="id" id="id" >
              <div class="form-group">
                  <label class="control-label " for="pertanyaan">Pertanyaan : </label>
                    <textarea cols="50" rows="4" class="form-control" spellcheck="false" id="editpertanyaan" placeholder="Masukkan Pertanyaan" name="pertanyaan" required></textarea>
              </div>
              <div class="form-group ">
                  <label class=" control-label " for="kategori">Kategori : </label>
                    <select class="custom-select " id="editkategori" name="kategori" required>
                      <option value="" selected>Pilih...</option>
                      <option value="OK">OK</option>
                      <option value="NOK">NOK</option>
                    </select>
              </div><br>  
              <div class="form-group ">
                <label class="control-label " for="catatan">Catatan : </label>            
                    <textarea cols="50" rows="4" class="form-control" spellcheck="false" id="editcatatan" placeholder="Masukkan Catatan" name="catatan"></textarea>
              </div>
                  <input type="hidden" name="_method" value="PUT">
              </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </form>
             </div>
      </div>
    </div>

{{-- ............ --}}





{{-- Form Modal cetak pertanyaan --}}

<div class="modal fade" id="cetakPertanyaanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content" style="border-radius: 14px;">
              <div class="modal-header" style="background-color: #0ebb5c;" >
                <h5 class="modal-title" id="cetakPertanyaanModalLabel" style="color: #fff"> <span class="fa fa-print" > </span>&nbsp;&nbsp;  Cetak Pertanyaan </h5>
                <button type="button" class="close" data-dismiss="modal" style="color: #fff" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
             <div class="modal-body">
    
            <form  method="post" action=" {{ route('cetakpertanyaan') }}"target="_blank"  enctype="multipart/form-data">  
               {{ csrf_field()}}    
       
              <div class="form-group">
                <label class="control-label " for="auditee">Nama Auditee</label>      
                  <input type="text" class="form-control border" id="auditee" placeholder="Masukkan Nama Auditee" name="nama_auditee" required>     
              </div>
              <div class="form-group">
                  <label class="control-label " for="acuan">Dokumen Acuan</label>
                  <input type="text" class="form-control border" id="acuan" placeholder="Masukkan Acuan" name="dokumen_acuan" required>
              </div>
             
                  <div class="modal-footer">
                    <button type="button" class="btn" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn" id="closemodalcetak" style="background-color: #0ebb5c; color: #fff;" > <span class="fa fa-print" >&nbsp;  </span> Cetak</button>
                  </div>
                </form>
             </div>
      </div>
    </div>
  </div>

{{-- ...... End modal cetak pertanyaan...... --}}




<div class=" container-fluid" style=" font-size: 12px ; " > 


{{-- Breadcrumb --}}

<div class="breadcrumb" style="margin-bottom: 5px;" >
  <div class="container-fluid">
   <div class="row">
     <div class="col-md-6" style="font-size: 20px; color: #3993d0; font-weight: bold; "> <span class="fa fa-folder-open" > </span> Daftar Pertanyaan</div>
      <div class="col-md-6" style=" text-align: right !important; " >  
          @if (Auth::user()->lokasi==!NULL)
            <i style="font-size: 15px; color: #3993d0; font-weight: bold;" > Total Data :  {{$totaldata}} &nbsp; &nbsp;( OK : {{$ok}}, NOK : {{$nok}} )&nbsp;&nbsp;</i>
            <a href="#"><button class="btn btn-sm " data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap" style=" width: 130px; font-size: 11px; background-color: #3993d0; color: #fff; "  > <span class=" fa fa-plus " >  Tulis Pertanyaan</span></button></a>

           {{--  <a href="{{ route('cetakpertanyaan') }}"><button type="button" class="btn btn-success btn-sm " style="width: 130px; font-size: 11px; "  > <span class=" fa fa-print " >  Cetak Pertanyaan</span></button></a> --}}

             <button type="button" class="btn btn-success btn-sm " data-toggle="modal" data-target="#cetakPertanyaanModal" data-whatever="@getbootstrap" style="width: 130px; font-size: 11px; "  > <span class=" fa fa-print " >  Cetak Pertanyaan</span></button>

          @else   
          
          @endif       
      </div>
    </div>
   </div>
  </div> 

{{-- .......... --}}


{{-- Tabel --}}

<div class="table-responsive" >

		<table class="table  table-striped table-bordered  " style=" "  >
    <tr>
      	<th class=" text-center ">NO</th>
        <th class=" text-center ">PENULIS</th>
      	<th class=" text-center ">PERTANYAAN</th>
      	<th class=" text-center " style="max-width: 70px;  margin-left: 2px; margin-right: 2px;" >KATEGORI</th>
      	<th class=" text-center ">CATATAN</th>
      	<th class=" text-center " >LKS</th>
      	<th class=" text-center " style="" >AKSI</th>   
    </tr>

      <?php $no = 0;?>
    @foreach ($pertanyaan as $pr)
      <?php $no++ ;?>

    <tr>  
      <td class="  text-center " >{{$no}}</td>
       <td class=" text-center " style="max-width: 90px; padding-right: 3px; padding-left: 3px;">{{$pr->penulis}}</td>
      <td class="  " style="white-space: pre-line; min-width: 220px;max-width: 440px;" > {{$pr ->pertanyaan}} </td>
      <td class=" text-center " style="min-width: 90px;" > {{$pr ->kategori}} </td>
      <td class="  " style="white-space: pre-line; min-width: 220px; max-width: 440px;"> {{$pr ->catatan}} </td>
      <td   class=" text-center ">

        @php
        $prid= \Crypt::encrypt($pr->id) ; 
        @endphp

        @if( $pr->kategori=="NOK")
            @if( $pr->status==NULL)
              <a href="{{ route('buatlks',$prid) }}"><button class="btn btn-info btn-sm" style=" width: 84px; font-size: 11px;"  > <span class=" fa fa-pencil " >  Buat LKS</span></button></a>
            @else
              {{$pr ->status}}
            @endif  
        @else    
             <h6></h6>
        @endif
      </td>

      <td class=" text-center " style="min-width: 100px; padding-right: 3px; padding-left: 3px;" >
        @if( $pr->status==NULL)
          {{--    <a href="{{ route('editpertanyaan',$pr->id) }}"><button class="btn btn-primary btn-sm" style="width: 55px; font-size: 10px; "> <span class=" fa fa-edit " > Edit</span></button></a> <br> --}}

              <button onclick="editForm({{$pr->id}})" class="btn btn-sm" data-toggle="tooltip" data-placement="top" title="Edit Pertanyaan" style=" display: inline; font-size: 13px; background-color: #3993d0; color: #fff; "> <span class=" fa fa-edit "  > </span></button>
       
              <form action="{{ route('hapuspertanyaan',$pr->id) }}" method="post" style=" font-size: 13px; display: inline;" >
            <button class="btn btn-danger btn-sm"  onclick="return confirm('Anda yakin untuk Menghapus pertanyaan ini ?')" type="submit" name="submit"   data-toggle="tooltip" data-placement="top" title="Hapus Pertanyaan"> <span class="fa fa-trash" ></span> </button>     
              {{ csrf_field() }}
              <input type="hidden" name="_method" value="DELETE">
           </form>

      


        @else
        @endif
      </td>

    </tr>
    @endforeach
   
  </table>
  </div>

  {{-- ........ --}}

  <br><br>
</div>


<br><br>



<script>
 

 $(function()
 {
  $('#closemodalcetak').on('click', function ()
  {
    
    $('#cetakPertanyaanModal').modal('hide');
  }
  );
  
 });

// tampil modal edit
    function editForm(id) 

    {
      $('#editModal form')[0].reset();
      $.ajax({
        url: "{{ url('auditor/daftarpertanyaan')}}"+'/'+id+"/edit",
        type: "GET",
        dataType: "JSON",

        success: function(data) {
          
          $('#editModal').modal('show');

          $('#id').val(data.id);
          $('#editpertanyaan').val(data.pertanyaan);
          $('#editkategori').val(data.kategori);
          $('#editcatatan').val(data.catatan);
        },
        error : function(){
          alert("nothing data");
        }
      });
    }
// ........

// update data

 $(function(){
            $('#editModal form').on('submit', function (e) {
                if (!e.isDefaultPrevented()){
                    var id = $('#id').val();
                  
                    $.ajax({
                        url : "{{ url('auditor/daftarpertanyaan')}}"+'/'+id, 
                        type : "POST",
                        data : $('#editModal form').serialize(),
                        success : function($data) {
                            $('#editModal').modal('hide');
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



  </body>
  @include('layout.footer') 

      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @include('sweet::alert')
  </html>
  