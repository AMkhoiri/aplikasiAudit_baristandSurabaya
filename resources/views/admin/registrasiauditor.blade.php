 @extends('admin/layout/cmaster')

 @section('css')

  <style>

  	.control-label{
		font-weight: bold;
		color: #676767;
		font-size: 13px;
	}
	
	.form-control{
		border: transparent;
	}


  </style>
	
 @endsection

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

  @section('isi')

<div class="container-fluid"  style="font-size: 12px; "> 


<div class="login-area"  >
  <div class="container">
      <div class="login-box ptb--100" style="padding-top: 10px !important;"  >
 
          <form class="form-horizontal"  method="post" action="{{ url('/admin/registrasi/auditor/add') }}">
          {{ csrf_field() }}

           <div class="login-form-head" style="padding-top: 30px; background-color: #2c71da; padding-bottom: 15px !important; ">
                  <h4>Register</h4>
                  <p>Registrasi untuk auditor "{{$nama_auditor}}"</p>
              </div>
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
                  <input id="password" type="password" class="form-control" name="password" required><i style="color: #2c71da; cursor: pointer;"  onclick="seePassword()" class="ti-eye"  ></i>
                
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
            function check(input) 
            {
                if (input.value != document.getElementById('password').value) 
                {  input.setCustomValidity('Password yang anda masukkan tidak sama!'); }

                else if (input.value.length <6) 
                { input.setCustomValidity('Password minimal harus 6 karakter');  } 

                else 
                {
                    // input is valid -- reset the error message
                    input.setCustomValidity('');
                }
            }
         </script>
    
              <input type="hidden" name="id_auditor" value="{{$id_auditor}} " >
              <input type="hidden" name="id_auditee" value="{{$id_auditee}}" >

               <input type="hidden" name="akses" value="AUDITOR" >



          <div class="submit-btn-area">
                  <button type="submit" class="btn btn-block " > 
                      Register &nbsp;&nbsp; <span class="fa fa-arrow-right" > </span>
                  </button>
          </div>
        </div>
      </form>

      </div>
    </div>
  </div>


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

  @endsection