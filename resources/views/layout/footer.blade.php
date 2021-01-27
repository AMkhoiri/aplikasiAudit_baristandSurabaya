
 

<!DOCTYPE html>
<html>
<head>

   
  
    <!-- others css -->
    {{-- <link rel="stylesheet" href="{{asset('audit/admin/assets/css/typography.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{asset('audit/admin/assets/css/default-css.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('audit/admin/assets/css/styles.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('audit/admin/assets/css/responsive.css')}}"> --}}
    <!-- modernizr css -->
 
 @include('layout.head-css')




 
  <title></title>

  <style>
    footer{
        position: relative;
        bottom: -240px;
        text-align:  right;

}

a{
    text-decoration: none;
    color: #676666;
}

a:hover{
    text-decoration: none;
}
 

</style>
</head>
<body>



        <footer style="font-family: 'Kumbh Sans', sans-serif; font-size: 12px;">
            <div class="footer-area" >
                <p >Made with <span  >❤</span> by  <a href="mailto:ahmad.m.khoiri@gmail.com">ahmad.m.khoiri@gmail.com</a> </p>
            </div>
        </footer>
        
 <script src="{{asset('audit/admin/assets/js/vendor/jquery-2.2.4.min.js')}}"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @include('sweet::alert')
</html>






