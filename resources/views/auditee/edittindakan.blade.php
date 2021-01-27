<!DOCTYPE html>
<html>
<head>

	@include('layout.head-css')
	@include('auditee.headerauditee')

	<title>Form Tindakan</title>


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

<table class="table table-responsive table-striped table-bordered"  >
	
    <tr>
      <th style="text-align:center;">No LKS</th>
      <th style="text-align:center;">Deskripsi Ketidaksesuaian</th>
      <th style="text-align:center;">Dokumen Acuan</th>
          <th style="text-align:center;">SNI ISO/IEC 17065:2012 Klausul</th>
          <th style="text-align:center;"> SNI ISO/IEC 17021-1:2015 Klausul</th>
          <th style="text-align:center;">SNI ISO/IEC 17021-1:2017 Klausul</th>
          <th style="text-align:center;">(Dokumen SMM)</th>
    </tr>

    <tr>  
      <td style="text-align:center; width: 45px; "> {{$lks->nolks}} </td>
      <td style="width: 300px;">  {{$lks->deskripsi}}</td>
      <td style="width: 160px;"> {{$lks->acuan}} </td>
      <td style=""> {{$lks->iec_2012}} </td>
      <td style="">  {{$lks->iec_2015}} </td>
      <td style="">   {{$lks->iec_2017}}</td>
      <td style="text-align:center;">   {{$lks->smm}}</td>
   </tr>
  
  </table>
</div>

<div class="container-fluid" style="font-size: 12px;" >
    {{-- Breadcrumb --}}

<div class="breadcrumb" style="margin-bottom: 5px;" >
  <div class="container-fluid">
     <div  style="font-size: 20px; color: #3993d0; font-weight: bold; "> <span class="fa fa-pencil" > </span> Edit Tindakan Perbaikan </div>
   </div>
  </div> 

{{-- .......... --}}





<div class="breadcrumb" style="margin-bottom: 5px;" >
  <form role="form"  action="{{route ('updatetindakan', $tindakan->id_tindakan)}}" method="post"  enctype="multipart/form-data">
    {{ csrf_field()}}

<div class="row">
    <div class="col-md-4">
      <div class="form-group">
        <label for="akar"><b>Akar Permasalahan  </b></label>
        <textarea cols="80" rows="7" class="form-control" spellcheck="false" placeholder="Tulis Akar Permasalahan" name="akar" id="akar" required> {{$tindakan->akar}} </textarea><br>
       
      </div>
    </div>

    <div class="col-md-4">
      <div class="form-group">
       <label for="dilakukan"><b>Tindakan Yang Akan Dilakukan  </b></label>
        <textarea cols="80" rows="7" class="form-control" spellcheck="false" placeholder="Tulis Tindakan Yang Akan Dilakukan" name="dilakukan" id="dilakukan"  required> {{$tindakan->dilakukan}}</textarea>
      </div>
    </div>

    <div class="col-md-4">
      <div class="form-group">
        <label for="pencegahan"><b>Tindakan Pencegahan  </b></label>
        <textarea cols="80" rows="7" class="form-control" spellcheck="false" placeholder="Tulis Tindakan Pencegahan" name="pencegahan" id="pencegahan" required> {{$tindakan->pencegahan}}</textarea><br>

       </div>
      </div>

     <?php  $nama= $auditee->nama;  ?>
    <input type="hidden" class="form-control" id="pengirim_tindakan" value="{{$nama}}" name="pengirim_tindakan">


  </div>
  <div class="row">
    <div class="col-md-6">
      <label for="filebukti"><b>Sertakan File Bukti</b> (Ekstensi File: pdf/docx/doc/jpg/jpeg/png/zip/rar  max size: 2mb) </label>
      <input type="file" id="filebukti" class="form-control-file" name="file" style="  " > {{$tindakan->title}}

    </div>

    <div class="col-md-6" style="text-align: right;">
       <a  class="btn btn-sm btn-secondary " href="{{url ('/auditee/daftartindakan')}} " style=" width: 120px; margin-right: 10px;" ><span class=" fa fa-arrow-left " >  Batal</span></a>
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
     
       
      <input type="hidden" name="_method" value="PUT">
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