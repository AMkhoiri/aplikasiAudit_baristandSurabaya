 @extends('admin/layout/cmaster')

  @section('isi')





  {{-- Form Modal Input pegawai--}}

<div class="modal fade" id="inputModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content" style="border-radius: 14px;">
      <div class="modal-header" style="background-color: #2E86C1;" >
        <h5 class="modal-title" id="exampleModalLabel" style="color: #fff"> <span class="fa fa-pencil" >  </span>&nbsp;&nbsp; Tambah User Baru </h5>
        <button type="button" class="close" data-dismiss="modal" style="color: #fff" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     <div class="modal-body">

      <form class="form-horizontal" method="post" action="{{ url('admin/datausers/add') }}">
          {{ csrf_field() }}

        
              <div class="login-form-body">

                  <input id="name" type="hidden" class="form-control" name="name" value="name">
                  <input id="email" type="hidden" class="form-control" name="email" value="test@gmail.com">

           <div class="form-gp{{ $errors->has('username') ? ' has-error' : '' }}">
              <label for="username" class="control-label">Username</label>
                  <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required>
                  @if ($errors->has('username'))
                      <span class="help-block">
                          <strong>{{ $errors->first('username') }}</strong>
                      </span>
                  @endif
          </div>

          <div class="form-gp has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
              <label for="password" class="control-label">Password</label>
                  <input id="password" type="password" class="form-control" name="password" required><i style="color: #2c71da;"  onclick="seePassword()" class="ti-eye"></i>
                
                  @if ($errors->has('password'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif

          </div>

          <div class="form-gp">
              <label for="password-confirm" class="control-label">Confirm Password</label>
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  oninput="check(this)" required>
          </div>


          <script language='javascript' type='text/javascript'>
      function check(input) {
          if (input.value != document.getElementById('password').value) {
              input.setCustomValidity('Password yang anda masukkan tidak sama!');
          } else {
              // input is valid -- reset the error message
              input.setCustomValidity('');
          }
      }
  </script>

            <div class="form-gp">
                 
              <select name="akses" class="custom-select" required> 
                   <option value="">Pilih Akses User</option>
                  <option value="ADMIN" >Admin</option>
                  <option value="KEPALA" >Kepala Balai</option>

               </select>
          </div>


          <div class="submit-btn-area">
                  <button type="submit" class="btn btn-block " > 
                      Add &nbsp;&nbsp; <span class="fa fa-arrow-right" > </span>
                  </button>
          </div>
        </div>
      </form>
             </div>
      </div>
    </div>
  </div>

{{-- ............ --}}

<div class="container-fluid"  style="font-size: 12px !important; "> <br>
  

  <div class="card">
      <div class="card-body">
        <div class="header-title">  
          <div class="row" > 
            <div class="col-md-6"><h4> Data Users</h4></div>
            <div class="col-md-6" style=" text-align: right !important; " >
              <a href="#"><button class="btn btn-primary btn-sm "  style=" width: 120px; font-size: 11px; " type="button" data-toggle="modal" data-target="#inputModal" data-whatever="@getbootstrap"  >  <span class=" fa fa-plus " >  Tambah User</span> </button></a>
            </div>
          </div> 
        </div>
        <div class="single-table">
              <div class="table-responsive">
                  <table class="table  text-center" style="font-size: 12px !important; ">
                    <thead class="text-uppercase">
                    
                    <tr  >
                      <th style="text-align:center">NO</th>
                        <th style="text-align:center">Username</th>
                        <th style="text-align:center">Password</th> 
                         <th style="text-align:center">Akses</th>  
                        <th style="text-align:center">Aksi</th> 
                       
                    </tr>
                  </thead>

                  <?php $no = 0;?>
                  @foreach ($kepala as $a)
                  <?php $no++ ;?>  
                    <tr>
                    <td style="text-align:center"> {{$no}} </td>  
                        <td style="text-align:center"> {{$a->username}} </td>
                        <td style="text-align:center">  
                          
                          @if($a->akses=='ADMIN')
                          <span style="font-size: 14px; color: green" class="ti ti-lock" > </span>
                          @else
                          {{$a->pass}}
                          @endif
                        </td>
                        <td style="text-align:center">  {{$a->akses}}</td>
                        <td style="text-align:right !important;">  
                             <form action=" {{ route('hapususer3',$a->id) }}"  method="post" >     
                                <button  class="btn btn-danger btn-xs " style=" font-size: 13px;  "   onclick="return confirm('Anda Yakin Untuk Menghapus User {{$a->username}} ?')" type="submit" name="submit" > <span class="fa fa-trash" > </span> </button>
                                {{csrf_field() }}          
                                <input type="hidden" name="_method" value="DELETE" >
                            </form>
                        </td>
                    </tr>
                    
                  @endforeach


                  </table>
                </div>
              </div>
            </div>
          </div>

</div>
<br><br><br><br>


@endsection

<script>
  function seePassword() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>