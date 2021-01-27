<!DOCTYPE html>
<html>
<head>


 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,shrink-to-fit=no">
    <!-- <link rel="icon" href="../public/enjoybali/img/favicon.png" type="image/png"> -->

    <!--  <link rel="icon" href="../public/audit/img/favicon.png" type="image/png"> -->

      <link rel="icon"  href="{{ asset('audit/img/favicon.png')}}" type="image/png">


    <link rel="stylesheet" href="{{ asset('audit/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('audit/vendors/linericon/style.css')}}">
    <link rel="stylesheet" href="{{ asset('audit/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('audit/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('audit/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('audit/vendors/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('audit/vendors/nice-select/css/nice-select.css')}}">

     <link rel="stylesheet" href="{{ asset('audit/css/style.css')}}">
     
<link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400&display=swap" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
  {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
 <script src="{{asset('audit/admin/assets/js/vendor/jquery-2.2.4.min.js')}}"></script>




	@foreach ($tindakanlks as $lk)
  <title>Lembar_Ketidaksesuaian {{ $lk->nolks }}</title>
  @endforeach

</head>
<body>

  <div class="container" style=" font-size: 14px; " ><br><br>

        <div class="form row">
      <div class="col-md-3 border border-dark  justify-content-center " style="  " >
        <img  class="thumbnail"  style=" max-width: 190px; margin-left: 16px; "  src=" {{ asset('audit/img/kemenperin.png')}}" alt="">    
      </div>
        <div class="col-md-9 border border-dark">     
          <h5 style=" text-align: center;  padding-top: 12px;" >  LEMBAGA SERTIFIKASI <br> BARISTAND INDUSTRI SURABAYA</h5> 
      </div>
    </div>
      <br><br>


    <h5 style="text-align: center;"> <u>LAPORAN KETIDAKSESUAIAN (LKS)</u> </h5><br> 

    <div class="form-group row">
      <div class="col-md-8">

        @foreach ($tindakanlks as $lk)

        <tr>
          <td style="text-align: left;"><b>No LKS &ensp;&emsp;&emsp;:&ensp;</b> {{ $lk->nolks }}<br>
                                        <b>Area Audit &emsp;: &ensp;</b>{{$lk->lokasi}}<br>                      
          </td>
        </tr>
      </div>


      <div class="col-md-4">
        <tr>
          <td style="text-align: left; margin-left: 40px;"><b>Tanggal &emsp;&emsp;&emsp;&emsp;&emsp;:&ensp;</b>    {{\Carbon\Carbon::parse ($lk->tgl_terkirim)->format('d-m-Y')}}<br>
                                                           <b>Dokumen Acuan &emsp;:&ensp; </b> {{ $lk->acuan }} <br></td>
        </tr>
      </div>
    </div> @endforeach
    
    <table class="table table-bordered table-striped  ">
      <tr style=" font-size: 15px;">
        <th class=" " colspan="4">Deskripsi Ketidaksesuaian :</th>
      </tr>
       @foreach ($tindakanlks as $lk)
      <tr>
        <td style="text-align:left;" colspan="4"> {{ $lk->deskripsi }} <br><br>
                                     <b>Tidak Sesuai Dengan SNI ISO/IEC 17065:2012 Klausul &emsp;: &emsp;</b>{{ $lk->iec_2012 }} <br>
                                     <b>Tidak Sesuai Dengan ISO/IEC 17021-1:2015 Klausul &emsp;&emsp;: &emsp;</b>{{ $lk->iec_2015 }} <br>
                                     <b>Tidak Sesuai Dengan ISO/IEC 17021-3:2017 Klausul &emsp;&ensp;&ensp;:&emsp; </b>{{ $lk->iec_2017 }} <br>
                                     <b>Tidak Sesuai Dengan Dokumen SMM &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;: &emsp;</b>{{ $lk->smm }}<br></td>
        
        
      </tr>
      <tr>
        <td  colspan="4"> Auditor&emsp; : &ensp;  {{ $lk->nama_pengirim}}   <br><br></td>
        <!-- <td  colspan="2"> Auditee&emsp; : &ensp;     <br><br></td> -->
      </tr>
      @endforeach

    </table>



    <table class="table table-striped table-bordered  ">
         @foreach ($tindakanlks as $lk)
      <tr>
        <th style=" font-size: 15px;"colspan="4">Tindakan Perbaikan :</th>
      </tr>
       
      <tr>
        <td style="text-align: left;white-space: pre-line; " colspan="4"><b>Akar Permalahan :</b><br> {{ $lk->akar }} <br><hr><b>Tindakan Yang Akan Dilakukan :</b><br> {{ $lk->dilakukan }} <br><hr><b>Tindakan Pencegahan :</b><br> {{ $lk->pencegahan }} 
        </td>
        
      </tr>

       <tr>
        <td  colspan="2" style=" width: 50%;"> Auditee&emsp; : &ensp;{{ $lk->pengirim_tindakan}}     <br><br></td>
        <td  colspan="2" style=" width: 50%;"> Tanggal Penyelesaian &emsp; : &ensp; {{\Carbon\Carbon::parse ($lk->waktu_kirim)->format('d-m-Y')}}   <br><br></td>
      </tr> 
    </table>


    <table class="table  table-bordered  ">        
        <thead class="thead-light">
      <tr>
        <th style=" font-size: 15px;" colspan="4"class="thead-light">Verifikasi Tindakan Perbaikan :</th>
      </tr>
      </thead>     
      <tr>
        <td style="text-align: left; white-space: pre-line;"colspan="4"  > {{ $lk->catatan_verifikasi }} <br></td>
      </tr>

      <tr>
        <td  colspan="2" style=" width: 50%; "> Auditor&emsp; : &ensp;  {{ $lk->nama_verifikator }}   <br></td>
        <td  colspan="2"> Kasi SS &emsp; : &ensp; {{$ss->nama}}    <br></td>
      </tr>
      <tr>
        <td  colspan="2" style=" width: 50%;"> Tanggal&emsp; : &ensp;    {{\Carbon\Carbon::parse ($lk->updated_at)->format('d-m-Y')}}   <br></td>
        <td  colspan="2"> Tanggal  &emsp; : &ensp; <br></td>  
      </tr>
       
    @endforeach
    </table>
    <br><br>
    <div style="color: #838282;  font-size: 16px;" > FM - 8.4.05</div>

   <!--  <a href="/cetak_pdf/{id}" class="btn btn-success btn-sm" target="_blank" style="font-size: 10px;">CETAK PDF</a> -->
    
  </div>
  <br>
</body>
</html>