
<?php 

use App\catatan;

 ?>

<!DOCTYPE html>
<html>
<head>


 @include('layout.head-css')
 @include('auditor.headerauditor')

  <title>Tindakan Perbaikan</title>
</head>

<body>

<div class=" container-fluid" style=" font-size: 12px ; " > 
 
{{-- Breadcrumb --}}

<div class="breadcrumb" style="margin-bottom: 5px;" >
  <div class="container-fluid">
     <div  style="font-size: 20px; color: #3993d0; font-weight: bold; "> <span class="fa fa-folder-open" > </span> Daftar Tindakan Perbaikan</div>
   </div>
  </div> 

{{-- .......... --}}

<div class="table-responsive">
    <table class="table  table-striped table-bordered"  >

      <tr>

        <th style="text-align:center;">NO LKS</th>
        <th style="text-align:center;">DOKUMEN ACUAN|DESKRIPSI KETIDAKSESUAIAN</th>
        <th style="text-align:center;">TIDAK SESUAI DENGAN</th>
        <th style="text-align:center;">TINDAKAN</th>
         <th style="text-align:center;">FILE BUKTI</th>
         <th style="text-align:center;">CATATAN</th>
         <th style="text-align:center;">STATUS</th>
         <th style="text-align:center;">AKSI</th>

      </tr>

    
    @foreach ($tindakanlks as $lk) 

    <tr>  
      <td style="text-align:center; "> {{ $lk ->nolks}} </td>
      <td style="; text-align:left; white-space: pre-line; max-width: 330px;">   <b> Dokumen Acuan: </b> <br>{{ $lk ->acuan }}<br><br><b> Deskripsi Ketidaksesuaian: </b> <br>{{ $lk ->deskripsi }}
      </td>
      <td style=" max-width: 320px; "><b>SNI ISO/IEC 17065:2012 Klausul :</b><br> {{ $lk ->iec_2012 }} <br><br>
                                   <b>ISO/IEC 17021-1:2015 Klausul :</b><br> {{ $lk ->iec_2015 }} <br><br>
                                   <b>ISO/IEC 17021-3:2017 Klausul :</b><br> {{ $lk ->iec_2017 }} <br><br>
                                   <b>Dokumen SMM :</b><br> {{ $lk ->smm }} </td>


      <td  style=" white-space: pre-line; min-width: 250px; max-width: 320px; "> <b> Akar Permasalahan : </b><br>{{ $lk ->akar}}<br>
          <b> Tindakan Dilakukan : </b><br>{{ $lk ->dilakukan }}<br>
           <b> Tindakan Pencegahan : </b><br>{{ $lk ->pencegahan }}<br>
      </td>
       <td class="  text-center " style="width: 90px; "  >  @if ($lk->title == !NULL)  <img style="width: 20px;" src="{{ asset('audit/img/document.png')}}" alt=""> <br>  {{ $lk ->title}}
        @else 
        @endif  <br><br> 



      </td>

@php
  $tindakan_id = $lk->id_tindakan; 
    $catatan = catatan::where('id_tindakan','=',$tindakan_id)->get();
     $catatann = $catatan;  

@endphp


      <td  style=" min-width: 150px; max-width: 270px; ">

          <b>Catatan: </b><br>
              <?php $no = 0;?>
            @foreach($catatann as $cat)
               <?php $no++ ;?>

             {{$cat ->catatan_tindakan}}  <br> <b style=" font-size: 9px; " > {{\Carbon\Carbon::parse ($cat ->updated_at)->format('d/m/Y')}} </b>
             @if ($cat->status=="new")
               <span style="font-size: 11px; color: #00cc00;" class="fa fa-arrow-circle-up" > </span>
             @elseif($cat->status=="Terkirim")
             <span style="font-size: 11px; color: #00cc00;" class="fa fa-send" > </span>
              @elseif($cat->status=="selesai")
             <span style="font-size: 11px; color: #00cc00;" class="fa fa-check" > </span>
             @else
             @endif
             <br><br>

            @endforeach
            <br>  
      </td>

     
      <td style="text-align:center; min-width: 90px; padding-right: 2px; padding-left: 2px; " >
            @if ($lk->status_tindakan =='dikembalikan')
                 <i class="fa fa-undo" style="  font-size: 1.2em; width: 1.7em; height: 1.1em; padding-top: 2px; padding-bottom: 2px; text-align: center;line-height: 0.8em;background: #c9ba01;color: #fff;border-radius: 0.8em; " >   </i><br>
                 {{$lk->status_tindakan}}

            @elseif ($lk->status_tindakan =='Ter-Verifikasi')
             <i class="fa fa-check" style="font-size: 1.2em; width: 1.7em; height: 1.1em; padding-top: 2px; padding-bottom: 2px; text-align: center; line-height: 0.8em;background: blue; color: #fff; border-radius: 0.8em;" > </i><br>
                   {{$lk->status_tindakan}}

            @else ($lk->status_tindakan == "Terkirim" )   
             {{-- <i class="fa fa-check" style="font-size: 1.2em; width: 1.7em; height: 1.1em; padding-top: 2px; padding-bottom: 2px; text-align: center; line-height: 0.8em;background: green; color: #fff; border-radius: 0.8em;" > </i><br>
                   Data Masuk <br> {{$lk->waktu_kirim}}  --}}
                   {{-- Data Masuk {{$lk->updated_at->diffForHumans()}}  --}}
                   {{-- {{ \Carbon\Carbon::createFromFormat('Y-m-d ', $lk->waktu_kirim)}} --}}
            @endif        

      </td>




      <td style=" min-width: 60px; text-align:center; padding-left: 2px;padding-right: 2px; ">

          @if ($lk->title == !NULL)
          <a href="{{route ('downloadfile', $lk->id_tindakan) }}" data-toggle="tooltip" data-placement="top" title="Unduh file bukti" class=" btn btn-info  " style="font-size: 12px; margin-bottom: 2px;" ><span class=" fa fa-download " ></span></a><br>
          @else
          
          @endif

            <?php $nama=$auditor->nama; ?>

         @if ($lk->status_tindakan =='Terkirim') 

                               @php 
                              $lkid= \Crypt::encrypt($lk->id) ; 
                              @endphp 
              <a href="{{ route('tindakan', $lkid) }}" data-toggle="tooltip" data-placement="top" title="Tulis catatan"><button  style="font-size: 14px;text-align: center;margin-bottom: 2px; " class="btn btn-info " ><span class=" fa fa-pencil " ></span></button></a> 


                @php
                 //mengecek apakah ada catatan yang bisa dikirim ke auditee (berstatus NULL)
                 $catt = catatan::where('id_tindakan','=',$tindakan_id) ->where('status', "new")->first();

                 // dd($catt);
                @endphp

                    @if ($catt)

                        <form class="form-horizontal" action="{{ route('kembalikantindakan',$lk->id_tindakan) }}" method="post" style="margin-bottom: 2px;">
                       {{ csrf_field()}}
                         <input type="hidden" class="form-control" id="status_tindakan" name="status_tindakan" value="dikembalikan">   
                         <button type="submit" style=" font-size: 14px;  color: white; "data-toggle="tooltip" data-placement="top" title="Kembalikan ke auditee"  class="btn btn-warning  " onclick="return confirm('Kembalikan Tindakan Ini Ke Auditee? ')" ><span class=" fa fa-undo " ></span></button> 
                         <input type="hidden" name="_method" value="PUT">
                       </form>
                       @else

                    @endif

                      
                 
               

              <form class="form-horizontal" action="{{ route('verifikasitindakan',$lk->id_tindakan) }}" method="post" style="margin-bottom: 2px;" >
               {{ csrf_field()}}
                 <input type="hidden" class="form-control" id="status_tindakan" name="status_tindakan" value="Ter-Verifikasi"> 
                  <input type="hidden" class="form-control" id="nama" name="nama" value="{{$nama}}">

                 <button type="submit" style=" font-size: 13px; color: white; "  class="btn b btn-success " onclick="return confirm('Anda Yakin Untuk Verifikasi Tindakan Ini?')" data-toggle="tooltip" data-placement="top" title="Verifikasi tindakan perbaikan" ><span class=" fa fa-check " ></span></button>
                 <input type="hidden" name="_method" value="PUT">
           </form>

          @elseif ($lk->status_tindakan =='Ter-Verifikasi')

                  @php
                  $lkid= \Crypt::encrypt($lk->id_tindakan) ;
                  @endphp
                 
                   <a href="{{ route('lihat',$lkid) }}" target="_blank" >  <button class="btn btn-primary " style="font-size: 13px; " data-toggle="tooltip" data-placement="top" title="cetak LKS" > <span class=" fa fa-print " ></span></button></a>
        @endif
      </td>
    </tr>

    @endforeach

  </table>
  </div>

   <br><br> <i style="font-size: 14px;" >*Ketika tindakan dikembalikan, catatan yang terlihat oleh auditee hanya catatan yang terakhir ditulis</i> 
</div>

</body>
<br><br><br><br><br><br><br>

 

<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>
  @include('layout.footer')

</html>
