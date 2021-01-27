

<!DOCTYPE html>
<html>
<head>

	@include('layout.head-css')
	@include('auditee.headerauditee')

  <style>
    
  </style>

	<title>Daftar Tindakan</title>
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
      		<table class="table table-striped table-bordered  "  >
          	<tr>
              	<th style="text-align:center;  ">No LKS</th>
              
                <th style="text-align:center;"> TINDAKAN </th>
              	<th style="text-align:center; ">FILE BUKTI</th>
                <th style="text-align:center;  ">CATATAN AUDITOR</th>
                <th style="text-align:center;   ">STATUS</th>
                <th style="text-align:center;  ">AKSI</th>
          	</tr>

            
          @foreach ($tindaklks as $tdk)
           

          <tr>
            <td style=" text-align: center; width: 70px; " >{{$tdk->nolks}}   </td>
            <td style=" padding-left: 10px;  white-space: pre-line; max-width: 370px;" >  <b>Akar Permasalahan:  </b><br> {!! $tdk ->akar!!} <br><br> <b>Tindakan Yang Dilakukan:</b> <br> {!! $tdk ->dilakukan !!}  <br><br> <b>Tindakan Pencegahan: </b> <br>{!! $tdk ->pencegahan !!}  </td>
            <td style="   max-width: 150px; text-align: center; " >    @if ($tdk->title == !NULL)  <img style="width: 20px;" src="{{ asset('audit/img/document.png')}}" alt=""> <br>  {{ $tdk ->title}}
        @else 
        @endif  

            </td>








              <td  style="  min-width: 200px; max-width: 280px; " >
                 @if( $tdk->status_tindakan=='dikembalikan')
                 <b>Catatan Auditor: </b><br>
                 {{$tdk->catatan_verifikasi}}

                 @else
                 @endif
              </td>
              <td style=" text-align: center; max-width: 130px; padding-right: 4px; padding-left: 4px;" >
                @if( $tdk->status_tindakan=='dikembalikan')
                     <p class="fa fa-undo"  style=" font-size: 1.2em; width: 1.7em; height: 1.1em; padding-top: 2px; padding-bottom: 2px; text-align: center;line-height: 0.8em;  background: #c9ba01; color: #fff; border-radius: 0.8em;" > </p><br>
                      Dikembalikan <br> Oleh Auditor<br>

                @elseif ( $tdk->status_tindakan=='Terkirim')
                    <i class=" terkirim fa fa-check"  style="font-size: 1.2em; width: 1.7em; height: 1.1em; padding-top: 2px; padding-bottom: 2px; text-align: center;line-height: 0.8em;background: green; color: #fff; border-radius: 0.8em;">   </i><br>
                    {{$tdk->status_tindakan}}<br>{{$tdk->updated_at->diffForHumans()}} 

                    {{-- <br><br>{{ \Carbon\Carbon::createFromFormat('d-F-Y' , $tdk->updated_at)}} --}}

                 @elseif ( $tdk->status_tindakan=='Ter-Verifikasi')
                    <i class=" terkirim fa fa-check" style="font-size: 1.2em; width: 1.7em; height: 1.1em; padding-top: 2px; padding-bottom: 2px; text-align: center;line-height: 0.8em; background: blue; color: #fff; border-radius: 0.8em;"  >   </i><br>
                    {{$tdk->status_tindakan}}<br>{{$tdk->updated_at->diffForHumans()}}
                @endif
              </td> 


              <td style=" text-align: center; width: 75px; padding-right: 4px; padding-left: 4px;">

                        @php 
                        $tdkid= \Crypt::encrypt($tdk->id_tindakan) ; 
                        @endphp
                
                  @if( $tdk->status_tindakan==NULL)



                    <a href="{{ route('edittindakan',$tdkid) }}"><button class="btn btn-primary " style=" font-size: 13px;margin-bottom: 3px;"><span class=" fa fa-edit " > </span></button></a>
                      <br>
                  

                 <form class="form-horizontal" action="{{ route('kirimtindakan',$tdk->id_tindakan) }}" method="post">
                {{ csrf_field()}}
             
                    <input type="hidden" class="form-control" id="status" name="status" value="Terkirim">             
                    <button type="submit" class="btn  btn-success" onclick="return confirm('Setelah Terkirim, Anda tidak akan bisa mengubahnya lagi. yakin untuk mengirim Isi Tindakan Ini ? ')"  style=" font-size: 13px;" data-toggle="tooltip" data-placement="top" title="Kirim Tindakan Perbaikan"><span class=" fa fa-send " >  </span></button>
                    <input type="hidden" name="_method" value="PUT">
                </form>
              
                @elseif( $tdk->status_tindakan=='dikembalikan')
                <a href="{{ route('edittindakan',$tdkid) }}"><button class="btn btn-primary "  data-toggle="tooltip" data-placement="top" title="Edit Tindakan Perbaikan" style=" font-size: 13px;margin-bottom: 3px;"><span class=" fa fa-edit " > </span></button></a>

                      <br>  
                     <form class="form-horizontal" action="{{ route('kirimtindakan',$tdk->id_tindakan) }}" method="post">
                    {{ csrf_field()}}            
                        <input type="hidden" class="form-control" id="status" name="status" value="Terkirim">
                        <button type="submit" class="btn  btn-success" onclick="return confirm('Setelah Terkirim, Anda tidak akan bisa mengubahnya lagi. yakin untuk mengirim Isi Tindakan Ini ? ')"  style=" font-size: 13px;" data-toggle="tooltip" data-placement="top" title="Kirim Tindakan Perbaikan"><span class=" fa fa-send " ></span></button>
                        <input type="hidden" name="_method" value="PUT">
                    </form>
                @else          
                @endif
              </td>
          </tr>

          @endforeach
         
        </table>
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