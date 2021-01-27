<!DOCTYPE html>
<html>
<head>

 @include('layout.head-css')
 @include('auditee.headerauditee')

<style>
  textarea { font-size: 13px !important; }
</style>

</head>
<body>

<div class="container-fluid" style=" font-size: 12px;">


    {{-- Breadcrumb --}}

<div class="breadcrumb" style="margin-bottom: 5px;" >
  <div class="container-fluid">
     <div  style="font-size: 20px; color: #3993d0; font-weight: bold; "> <span class="fa fa-file" > </span> Laporan Ketidaksesuaian </div>
   </div>
  </div> 

{{-- .......... --}}
<div class="table-responsive">
<table class="table  table-striped table-bordered"  >
    <tr>
      <th style="text-align:center;">No LKS</th>
      <th style="text-align:center;  ">Deskripsi Ketidaksesuaian</th>
      <th style="text-align:center;">Dokumen Acuan</th>
          <th style="text-align:center;">SNI ISO/IEC 17065:2012 Klausul</th>
          <th style="text-align:center;">SNI ISO/IEC 17021-1:2015 Klausul</th>
          <th style="text-align:center;">SNI ISO/IEC 17021-1:2017 Klausul</th>
          <th style="text-align:center;">(Dokumen SMM)</th>
    </tr>

    <tr>  
      <td style="text-align:center; "> {{ $lks -> nolks}} </td>
      <td style="text-align:left;width: 300px; "> {{ $lks -> deskripsi}} </td>
      <td style="text-align:left;width: 160px; "> {{ $lks -> acuan }} </td>
      <td style="text-align:left; "> {{ $lks -> iec_2012 }} </td>
      <td style="text-align:left; "> {{ $lks -> iec_2015 }} </td>
      <td style="text-align:left; "> {{ $lks -> iec_2017 }} </td>
      <td style="text-align:left; width: 150px;"> {{ $lks -> smm }} </td>
   </tr>

   <?php  $id_lks= $lks->id ?>


   <?php 
 
  $lokasi=$lks->lokasi; 
   $create=$lks ->updated_at;
  
  ?>


  </table>
</div>

</div><br>


<div class="container-fluid" style=" font-size: 12px;">

    {{-- Breadcrumb --}}

<div class="breadcrumb" style="margin-bottom: 5px;" >
  <div class="container-fluid">
     <div  style="font-size: 20px; color: #3993d0; font-weight: bold; "> <span class="fa fa-pencil" > </span> Tulis Tindakan Perbaikan </div>
   </div>
  </div> 

{{-- .......... --}}


<div class="breadcrumb" style="margin-bottom: 5px;" >
  <form role="form"  action="{{url ('auditee/daftartindakan')}}" method="post"  enctype="multipart/form-data">
    {{ csrf_field()}}

<div class="row">
    <div class="col-md-4">
      <div class="form-group">
        <label for="akar"><b>Akar Permasalahan  </b></label>
        <textarea cols="80" rows="7" spellcheck="false" class="form-control" placeholder="Tulis Akar Permasalahan" name="akar" id="akar" required></textarea><br>
       
      </div>
    </div>

    <div class="col-md-4">
      <div class="form-group">
       <label for="dilakukan"><b>Tindakan Yang Akan Dilakukan  </b></label>
        <textarea cols="80" rows="7" spellcheck="false" class="form-control" placeholder="Tulis Tindakan Yang Akan Dilakukan" name="dilakukan" id="dilakukan"  required></textarea>
      </div>
    </div>

    <div class="col-md-4">
      <div class="form-group">
        <label for="pencegahan"><b>Tindakan Pencegahan  </b></label>
        <textarea cols="80" rows="7" spellcheck="false" class="form-control" placeholder="Tulis Tindakan Pencegahan" name="pencegahan" id="pencegahan" required></textarea><br>
      

          <input type="hidden" class="form-control"  value="{{$id_lks}}" name="id_lks">
           <input type="hidden" class="form-control"  value="Telah Ditindak" name="status">
           <input type="hidden" class="form-control" id="lokasi" value="{{$lokasi}}" name="lokasi">
           <input type="hidden" class="form-control" id="tanggallks" value="{{$create}}" name="tanggallks">
           <input type="hidden" class="form-control"  value=" {{$lks ->nolks}}" name="nolks">
           
        
       </div>
      </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <label for="filebukti"><b>Sertakan File Bukti</b> (Ekstensi File: pdf/docx/doc/jpg/jpeg/png/zip/rar  max size: 2mb) </label>
      <input type="file" id="filebukti" class="form-control-file" name="file" style="  " > 


    </div>

    <div class="col-md-6" style="text-align: right;">
       <a  class="btn btn-sm btn-secondary " href="{{url ('/auditee/lks-tindakan')}} " style=" width: 120px; margin-right: 10px;" ><span class=" fa fa-arrow-left " >  Batal</span></a>
        <button type="submit" class="btn btn-primary btn-sm " style=" width: 120px; " ><span class=" fa fa-save " > Simpan</span></button>
    </div>
  </div>

           @if (count($errors) > 0)
          <br><div class="alert alert-danger  " style=" align-content: left; text-align: left; font-size: 13px;" >
              
                  @foreach ($errors->all() as $error)
                      {{ $error }}
                  @endforeach
              
          </div>
        @endif  
     
       
      
  </form>

</div>

</div>
</body>

<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>



</html>
@include('layout.footer')