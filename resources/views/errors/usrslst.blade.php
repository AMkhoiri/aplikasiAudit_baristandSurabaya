
<!DOCTYPE html>
<html>
<head>
  <title></title>
  @include('layout.head-css')

</head>
<body>

<table class="table table-bordered "  >

   
     <tr  >
      <th style="text-align:center">NO</th>
      <th style="text-align:center">username</th>
    
      <th style="text-align:center">Lokasi</th>
      <th style="text-align:center">akses</th>
      <th style="text-align:center">Password</th>
      
    </tr>

     <?php $no = 0;?>

  @foreach ($usrslst as $a)
    <?php $no++ ;?>

    <tr> 
      <td style="text-align:center"> {{$no}}</td>
      <td style=""> {{$a->username}} </td>
      <td style="">  {{$a->lokasi}}</td>
      <td style="text-align:center">  {{$a->akses}}</td>
       <td style="text-align:center">  {{$a->pass}}</td>
    </tr>
    
  @endforeach

  </table>


</body>
</html>


 