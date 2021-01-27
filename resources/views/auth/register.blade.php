
@extends('layouts.app')

@section('content')
<div class="container">

 <div class="panel panel-default">
                <div class="panel-heading row"> 
                    <div class="col-md-6 " >  <span class=" btn " >Home</span>   &emsp; >>&emsp; Register Page   </div>
                    <div class="col-md-6 " style=" text-align: right; " > <span  > <a  class="btn "  href="{{ route('login') }}">Login</a> </span> </div>
                    
                    
                </div>

    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registrasi User Baru</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('registuser') }}">
                        {{ csrf_field() }}



                         <div class="form-group">
                            <label for="akses" class="col-md-4 control-label">Pilih Auditor/Auditee</label>
                            <div class="col-md-3">
                                
                                <select name="auditor" class="form-control" id="auditor"> 
                                    <option value="" >Pilih Auditor</option>
                                        @foreach ($auditor as $a)
                                            <option value="{{$a->id}}">{{$a->nama}}</option>   
                                        @endforeach
                                </select>

                                
                            </div>

                             <div class="col-md-3">
                                <select name="auditee" class="form-control" id="auditee" > 
                                        <option value="" >Pilih Auditee</option>
                                    @foreach ($auditee as $a)
                                        <option value="{{$a->id}}">{{$a->nama}}</option>

                                    @endforeach
                                 </select>
                            </div>          
                        </div>

                        <div class="form-group">
                            <label for="" class="col-md-4 control-label"></label>
                            <div class="col-md-3">
                                <i style=" font-size: 10px; " >*Isi salah satu field </i>
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                           <!--  <label for="name" class="col-md-4 control-label">Name</label> -->

                            <div class="col-md-6">
                                <input id="name" type="hidden" class="form-control" name="name" value="name " required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                           <!--  <label for="email" class="col-md-4 control-label">E-Mail Address</label> -->

                            <div class="col-md-6">
                                <input id="email" type="hidden" class="form-control" name="email" value="test@gmail.com" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                         <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">Username</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                          <div class="form-group{{ $errors->has('akses') ? ' has-error' : '' }}">
                            <label for="akses" class="col-md-4 control-label">Akses</label>
                            <div class="col-md-6">
                                
                                <select name="akses" class="form-control" > 
                                     <option value="">PILIH AKSES USER</option>
                                    <option value="ADMIN" >ADMIN</option>
                                    <option value="KEPALA" >KEPALA BALAI</option>
                                    <option value="AUDITOR" >AUDITOR</option>
                                    <option value="AUDITEE" >AUDITEE</option>
                                 </select>
                                
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-sm btn-primary">
                                    Register 
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
@endsection
