<!DOCTYPE html>
<html>
<head>
	@include('layout.head-css')
	<title>Error</title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap" rel="stylesheet">
</head>
<body>

<div  class="container"  style=" font-size: 50px; font-family: roboto; opacity: 70%;  text-align: center; margin-top: 180px;  color: #9fa0a1;" > 

	{{-- ~~ <p   class="fa fa-frown-o "   style=" justify-content:  center; font-size:66px; " >  </p> ~~  --}}
	<img src="{{ asset('audit/img/sad.png')}}" alt="" style="width: 200px; margin-bottom: 20px; " >
		<h3 style="  text-align: center; color: #9fa0a1;  font-family: 'Roboto Mono', monospace;" >Ooopss...</h3  > 
	<h5 style="  text-align: center; color: #9fa0a1;  font-family: 'Roboto Mono', monospace;" >Anda Tidak Mempunyai Akses Ke Halaman Ini! </h5  > 

	<a  class=" btn btn-sm  " href="{{url ('/')}}" style=" width: 58px; font-size: 20px;  " > <span class="fa fa-arrow-left" ></span> </a>
</div>

</body>
</html>

